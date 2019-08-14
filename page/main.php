<?php
$text = '<div class="carousel-caption d-none d-md-block">
                    <p class="h3">Кухни на заказ в любом стиле</p><p>А также корпусная мебель в гостиную,
                    прихожую, ванную, гардероб
                </p><a href="?page=portfolio" class="w-100 btn btn-outline-primary">Посмотреть портфолио</a>
                </div>';
?>
<div class="block green">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/sukharkov.jpg" alt="Первый слайд">
                <?php echo $text; ?>
            </div>


            <div class="carousel-item   first">
                <img class="d-block w-100" src="/img/galoshes.jpg" alt="Второй слайд"> <?php echo $text; ?>

            </div>


            <div class="carousel-item  first">
                <img class="d-block w-100" src="/img/Mitrofanova.jpg" alt="Третий слайд"> <?php echo $text; ?>

            </div>
            <div class="carousel-item  first">
                <img class="d-block w-100" src="/img/hallway.jpg" alt="Третий слайд"> <?php echo $text; ?>

            </div>
            <div class="carousel-item  first">
                <img class="d-block w-100" src="/img/sukharkov.jpg" alt="Третий слайд"> <?php echo $text; ?>

            </div>

            <div class="carousel-item none">
                <img class="d-block w-100" src="/img/IMG_5771.jpg" alt="Второй слайдер">
                <div class="carousel-caption d-none d-md-block">
                    <p class="h3">
                        Молодой бренд с богатым прошлым и грандиозными планами
                    </p>
                    <p>


                        Высокие технологии производства, индивидуальный подход к клиенту,
                        регулярная обратная связь
                    </p><a href="?page=" class="w-100 btn btn-outline-primary">Узнать больше о Jim Woo</a>
                </div>
            </div>

            <div class="carousel-item none">
                <img class="d-block w-100" src="/img/tub.jpg" alt="Второй слайдер">
                <div class="carousel-caption d-none d-md-block">
                    <p class="h3">Как нас найти? </p>
                    <p>

                        Мы находимся в Москве, производство сосредоточено в республике Чувашия. Заходите в наш Instagram!
                    </p><a href="?page=" class="w-100 btn btn-outline-primary">Подробная контактная информация</a>
                </div>
            </div>
        </div>
        <a onmouseleave="sl_test()" class="carousel-control-prev " href="#carouselExampleIndicators" role="button"
           onclick="sl_test_of()" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a onmouseleave="sl_test()" class="carousel-control-next " href="#carouselExampleIndicators"
           onclick="sl_test_of()" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>