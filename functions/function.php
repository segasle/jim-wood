<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');

function connections()
{
    $file = '';
    if (empty($_GET['page'])) {
        $file = 'main';
    } else {
        $file = $_GET['page'];
    }
    include 'template/header.php';
    include 'page/' . $file . '.php';
    include 'template/footer.php';
}
function do_query($query)
{
    global $mysqli;
    $result = mysqli_query($mysqli, $query);
    return $result;
}
function feeback(){
    if (isset($_POST['button'])){
        $data = $_POST;
        $errors = array();
        $name = $data['person'];
        $email = $data['email'];
        $phone = $data['phone'];
        if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $name)){
            $errors[] = 'Не правильно ввели имя';
        }

        if (!preg_match("/(^(?!\+.*\(.*\).*\-\-.*$)(?!\+.*\(.*\).*\-$)(\+[0-9]{1,3}\([0-9]{1,3}\)[0-9]{1}([-0-9]{0,8})?([0-9]{0,1})?)$)|(^[0-9]{1,4}$)/", "$phone")) {
            $errors[] = "Вы непраильно ввели номер телефона, пример: +7(915)5473712";
        }
        if (!preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", "$email")) {
            $errors[] = 'Вы неправильно ввели электронную почту';
        }
        if (empty($data['content'])){
            $errors[] = 'Не ввели сообщения';
        }
        if (empty($errors)){
            $nameto ='Имя:' . $name ."<br>";
            $phoneto ='Номер:' . $phone ."<br>";
            $emailto ='Почта:' . $email ."<br>";
            $txtto ='Сообщение:' . $data['content'] ."<br>";
            $mess = $nameto.$phoneto.$emailto.$txtto;
            $result = do_query("SELECT COUNT(*) as count FROM feedback WHERE `email` = '{$email}'");
            $result = $result->fetch_object();
            if (empty($result->count)) {
                // сохраняет все данные в БД
                $wer = do_query("INSERT INTO feedback (`email`, `name`, `phone`, `text`) VALUES ('{$email}','{$name}','{$phone}','{$data['content']}')");
                if (!empty($wer)) {
                    $to = 'jim-owner@yandex.ru';
                    $subject = 'обратная связь';
                    $message = "$mess";
                    $headers = 'From: segasle@kafe-lyi.ru' . "\r\n" .
                        'Reply-To: segasle@kafe-lyi.ru' . "\r\n" .
                        "Content-Type: text/html; charset=\"UTF-8\"\r\n"
                        . 'X-Mailer: PHP/' . phpversion();
                    $mail = mail("$to", "$subject", "$message", "$headers");
                    //$out =
                    if ($mail){
                        echo  '<div class="go">Успешно</div>';
                    }
                }
            } else {
                echo '<div class="errors">Такая электронная почта уже есть</div>';
            }
        }else{
            echo '<div class="errors">'.array_shift($errors).'</div>';

        }
    }
    return true;
}