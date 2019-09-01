<?php
    include 'bd.php';
    $data = $_POST;
    $errors = array();
    $name = $data['person'];
    $email = $data['email'];
    $phone = $data['phone'];
    if (!preg_match("/^[a-zA-Zа-яА-Я]+$/ui", $name)) {
        $errors[] = 'Вы неправильно ввели имя';
    }
    if (!preg_match("/(^(?!\+.*\(.*\).*\-\-.*$)(?!\+.*\(.*\).*\-$)(\+[0-9]{1,3}\([0-9]{1,3}\)[0-9]{1}([-0-9]{0,8})?([0-9]{0,1})?)$)|(^[0-9]{1,4}$)/", "$phone")) {
        $errors[] = "Вы неправильно ввели номер телефона, пример: +7(915)5473712";
    }
    if (!preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", "$email")) {
        $errors[] = 'Вы неправильно ввели электронную почту';
    }
    if (empty($data['content'])) {
        $errors[] = 'Не ввели сообщения';
    }
    if (empty($errors)) {
        $nameto ='Имя:' . $name ."<br>";
        $phoneto ='Номер:' . $phone ."<br>";
        $emailto ='Почта:' . $email ."<br>";
        $txtto ='Сообщение:' . $data['content'] ."<br>";
        $mess = $nameto.$phoneto.$emailto.$txtto;
        $result = mysqli_query($mysqli, "SELECT COUNT(*) as count FROM feedback WHERE `email` = '{$email}'");
        $result = $result->fetch_object();
        if (empty($result->count)) {
            $wer = mysqli_query($mysqli, "INSERT INTO feedback (`email`, `name`, `phone`, `text`) VALUES ('{$email}','{$name}','{$phone}','{$data['content']}')");
            if (!empty($wer)) {
                $to = 'jim-owner@yandex.ru';
                $subject = 'обратная связь';
                $message = "$mess";
                $headers = 'From: segasle@kafe-lyi.ru' . "\r\n" .
                    'Reply-To: segasle@kafe-lyi.ru' . "\r\n" .
                    "Content-Type: text/html; charset=\"UTF-8\"\r\n".
                    'X-Mailer: PHP/' . phpversion();
                $mail = mail("$to", "$subject", "$message", "$headers");
                if ($mail) {
                	echo '<div class="go">Успешно</div>';
                } else {
                	echo '<div class="errors">Ошибка отправки формы</div>';
                }
            } else {
            	echo '<div class="errors">Ошибка отправки формы</div>';
            }
        } else {
        	echo '<div class="errors">Такая электронная почта уже есть</div>';
        }
    } else {
    	echo '<div class="errors">'.array_shift($errors).'</div>';
    }