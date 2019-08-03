<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="yandex-verification" content="1828ff9bd0a32839"/>
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="article">
    <meta property="og:title" content="">
    <meta property="og:description" content="ru_RU">
    <meta property="og:site_name" content="">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
          content="<?php //echo $keywords; ?>">
    <meta name="description" content="<?php //echo $description; ?>">
    <title><?php //echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css?t=<?php echo(microtime(true) . rand()); ?>">
</head>
<body>
<div class="container-fluid">
    <header>
        <div class="row">
            <div class="col-xl-2 col-xs-12">
                <div class="logo">

                </div>
            </div>
            <div class="col-xl-10 col-xs-12">
                <div class="menu">
                    <input type="checkbox" id="checkbox">
                    <label class="burger label-none" for="checkbox">
                        <div class="burger_open"></div>
                    </label>
                    <nav>
                        <ul>
                            <?php
                              $menu =  do_query("SELECT * FROM `menu`");
                              foreach ($menu as $item){
                                  echo '<li><a href="'.$item['url'].'">'.$item['title'].'</a></li>';
                              }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
