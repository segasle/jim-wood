<?php
include 'bd.php';
include 'function.php';
/**
 * Created by PhpStorm.
 * User: sergejslepenkov
 * Date: 2019-08-07
 * Time: 19:47
 */
    $data = $_POST;
    $errors = array();
    $name = $data['person'];
    $email = $data['email'];
    $phone = $data['phone'];
    if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $name)) {
        $errors[] = 'Не правильно ввели имя';
    }

    if (!preg_match("/(^(?!\+.*\(.*\).*\-\-.*$)(?!\+.*\(.*\).*\-$)(\+[0-9]{1,3}\([0-9]{1,3}\)[0-9]{1}([-0-9]{0,8})?([0-9]{0,1})?)$)|(^[0-9]{1,4}$)/", "$phone")) {
        $errors[] = "Вы непраильно ввели номер телефона, пример: +7(915)5473712";
    }
    if (!preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", "$email")) {
        $errors[] = 'Вы неправильно ввели электронную почту';
    }
    if (empty($data['content'])) {
        $errors[] = 'Не ввели сообщения';
    }
    if (empty($errors)) {
        if (isset($_FILES['file'])) {
            $update = $_SERVER['DOCUMENT_ROOT'].'/download/';
            $file = $_FILES['file']['name'];
            $update_file = $update . $file;
            if (!file_exists($update_file)) {
                if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                    if ($_FILES['file']['size'] > 1024 * 3 * 1024) {
                        echo '<div class="errors">Файл должен быть не больше 3 МБ</div>';
                    } else {
                        $ext = pathinfo($update_file, PATHINFO_EXTENSION);
                        $allow = array('jpeg', 'jpg', 'png', 'xlsx', 'docx');
                        if (in_array($ext, $allow)) {
                            if (move_uploaded_file($_FILES['file']['tmp_name'], $update_file)) {
                                $nameto ='Имя:' . $name ."<br>";
                                $phoneto ='Номер:' . $phone ."<br>";
                                $emailto ='Почта:' . $email ."<br>";
                                $txtto ='Сообщение:' . $data['content'] ."<br>";
                                $mess = $nameto.$phoneto.$emailto.$txtto;
                                $wer = do_query("INSERT INTO `feedback` (`email`, `name`, `phone`, `text`, `dock`) VALUES ('{$email}','{$name}','{$phone}', '{$data['content']}','{$file}')");
                                if (!empty($wer)) {
                                    $to = 'jim-owner@yandex.ru';
                                    $subject = 'обратная связь';
                                    $message = "$mess";
                                    $headers = 'From: segasle@kafe-lyi.ru' . "\r\n" .
                                        'Reply-To: segasle@kafe-lyi.ru' . "\r\n" .
                                        "Content-Type: text/html; charset=\"UTF-8\"\r\n"
                                        . 'X-Mailer: PHP/' . phpversion();
                                    $mail = mail("$to", "$subject", "$message", "$headers");
                                    echo '<div class="go">Успешно подано</div>';
                                } else {
                                    echo $mysqli->error;
                                }
                            }
                        }
                    }
                } else {
                    echo '<div class="errors">Ошибка загрузки файла</div>';
                }
            } else {
                echo '<div class="errors">Ошибка загрузки файла</div>';
            }
        } else {
            echo '<div class="errors">Не выбран файл</div>';
        }
    } else {
        echo '<div class="errors">'.array_shift($errors).'</div>';
    }