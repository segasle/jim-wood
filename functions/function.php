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
