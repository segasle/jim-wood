<!DOCTYPE html>
<html lang="ru">
<head>
<?php include 'functions/head.php'; ?>
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
          content="jim wood кухни">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900&display=swap&subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" href="icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css?t=<?php echo(microtime(true) . rand()); ?>">
    <link href="https://itchief.ru/examples/vendors/fancybox/jquery.fancybox.min.css" rel="stylesheet">
</head>
<body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="answer-modal"></div>
                <form enctype="multipart/form-data" action="" method="post"
                      class="form js-ajax-form__form form-modal" id="form-form_mail" data-form_id="11" data-goal="">
                    <div class="field form__field form__field--name_person form__field--type_short_text is-required js-ajax-form__field js-ajax-form__field--person">
                        <label for="xflexfield_62" class="field__label">
                            Ваше имя
                        </label>
                        <div class="field__input">
                            <input placeholder="Андрей" name="person" value="" type="text" id="xflexfield_62"
                                   required="required" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="field form__field form__field--name_phone form__field--type_short_text js-ajax-form__field js-ajax-form__field--phone">
                                <label for="xflexfield_288" class="field__label">
                                    Телефон
                                </label>
                                <div class="field__input">
                                    <input class="form-control form-control-lg phone-number" type="text"
                                           id="xflexfield_288"
                                           name="phone" placeholder="+7 999 999 99 99" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="field form__field form__field--name_email form__field--type_short_text js-ajax-form__field js-ajax-form__field--email">
                                <label for="xflexfield_289" class="field__label">
                                    E-mail
                                </label>
                                <div class="field__input">
                                    <input value="" name="email" placeholder="example@gmail.com" id="xflexfield_289"
                                           type="text" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field form__field form__field--name_content form__field--type_long_text js-ajax-form__field js-ajax-form__field--content">
                        <label for="xflexfield_61" class="field__label">
                            Дополнительно
                        </label>
                        <div class="field__input">
                            <textarea name="content" placeholder="Размер, материалы или описание"
                                      id="xflexfield_61" class="form-control form-control-lg"></textarea>
                        </div>
                    </div>
                    <div class="field form__field form__field--name_document1 form__field--type_file js-ajax-form__field js-ajax-form__field--document1">
                        <label for="xflexfield_213" class="field__label">
                            Прикрепите файл (проект, рисунок или план)
                        </label>
                        <div class="field__input">
                            <div class="jq-file" id="xflexfield_213-styler">

                                <input type="file" id="exampleInputFile" accept="image/jpeg,image/png" name="file"
                                       class="inputfile hide"
                                       data-multiple-caption="{count} files selected">
                                <label
                                        for="exampleInputFile"
                                        class="btn-outline-secondary btn btn-default btn-lg btn-block"><span>Выбрать</span></label>
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="_action" value="send_form">
                    <input type="hidden" name="form_id" value="11">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 order-sm-1 order-xs-1">
                            <div class="form__submit field">
                                <button type="submit" class="form__button button btn btn-success btn-lg" id="sendmodal">
                                    Посчитать
                                    проект
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 order-sm-0 order-xs-0">
                            <div class="form__agreement form__field--name_agreement is-required js-ajax-form__field js-ajax-form__field--agreement">
                                Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid overflow-x-hidden">
    <header>
        <div class="header">
            <div class="row">
                <div class="col-xl-4 col-sm-9 col-md-5 col-lg-4 col-12 order-xs-1">
                    <div class="pull-left">
                        <div class="logo">
                            <a href="/" class="link"></a>
                        </div>
                    </div>
                    <div class="pull-left">
                        <div class="slogan">Столярная
                            <br> Мастерская
                        </div>
                    </div>

                </div>
                <div class="col-xl-8 col-sm-3 col-md-7 col-lg-8 col-12 order-xs-0">
                    <div class="menu">
                        <input type="checkbox" id="checkbox">
                        <label class="burger label-none" for="checkbox">
                            <div class="fas fa-align-justify fa-2x" id="mobileMenuBut"></div>
                        </label>
                        <nav>
                            <ul>
                                <?php
                                $active = '';
                                $url = basename($_SERVER['REQUEST_URI']);
                                $menu = do_query("SELECT * FROM `menu`");
                                foreach ($menu as $item) {
                                    if ($item['url'] === $url) {
                                        $active = 'active';
                                    } else {
                                        $active = 'noactive';
                                    }

                                    echo '<li><a class="' . $active . '" href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
                                }
                                ?>

                                <button type="button" class="btn btn-primary mod" data-toggle="modal"
                                        data-target="#exampleModal">посчитать проект
                                </button>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content ndra-container padding-bottom">