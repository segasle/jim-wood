<?php

global $mysqli;
if (empty($mysqli)){
    $mysqli = mysqli_connect('localhost', 'jimwood_jimwood1', 'x58uMQw7', 'jimwood_jimwood1');
    mysqli_set_charset($mysqli, 'UTF8');
}
if (mysqli_connect_errno()){
    echo 'ошибка в подключении к БД ('.mysqli_connect_errno().')'.mysqli_connect_error();
}