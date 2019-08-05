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

    <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" href="icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css?t=<?php echo(microtime(true) . rand()); ?>">
</head>
<body>
<button type="button" class="btn btn-primary mod" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-shopping-basket fa-2x"></i>
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">

    <header>
        <div class="header">
            <div class="row">
                <div class="col-xl-2 col-xs-12">
                    <div class="logo">
                        <a href="/"><img src="" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-10 col-xs-12">
                    <div class="menu">
                        <input type="checkbox" id="checkbox">
                        <label class="burger label-none" for="checkbox">
                            <div class="fas fa-align-justify fa-2x"></div>
                        </label>
                        <nav>
                            <ul>
                                <?php
                                $active ='';
                                $url = basename($_SERVER['REQUEST_URI']);
                                $menu =  do_query("SELECT * FROM `menu`");
                                foreach ($menu as $item){
                                    if ($item['url'] === $url){
                                        $active = 'active';
                                    }else{
                                        $active ='noactive';
                                    }

                                    echo '<li><a class="'.$active.'" href="'.$item['url'].'">'.$item['title'].'</a></li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content ndra-container">