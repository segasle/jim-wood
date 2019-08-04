<?php

global $mysqli;
if (empty($mysqli)){
    $mysqli = mysqli_connect('localhost', 'ch06403_jimwood', 'x58uMQw7', 'ch06403_jimwood');
    mysqli_set_charset($mysqli, 'UTF8');
}
if (mysqli_connect_errno()){
    echo 'ошибка в подключении к БД ('.mysqli_connect_errno().')'.mysqli_connect_error();
}