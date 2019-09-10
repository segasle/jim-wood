<h1 class="text-center">Добро пожаловать в мир Jim Wood!</h1>

<div class="block_text block-center">
    <div class="block_text-descriptions">
        <p class="text-center">Здесь вы можете ознакомиться со всеми нашими проектами, которые представляют для компании
            особую ценность. Когда-то каждая из этих кухонь сделала счастливыми своих заказчиков.
            Надеемся, что однажды Jim Wood принесет праздник и в Ваш дом!

        </p>
    </div>
</div>
<?php
include 'template/instagram.php';

$sql = do_query("SELECT * FROM `portfolio`");
foreach ($sql as $item) {
    echo '<div class="row align-items-center padding">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <img src="/img/portfolio/' . $item['img'] . '" alt="' . $item['text'] . '" class="w-100">
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

        <div class="block_text">
            <div class="block_text-descriptions">
                <p class="fatty">' . $item['text'] . '</p>
                <p><a href="' . $item['link'] . '">
                        Подробнее
                    </a></p>
            </div>
        </div>
    </div>
</div>';
}
?>