<div class="block green">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-caption d-none d-md-block">
            <h3>Первое фотто слайдера , показывается всегда </h3>
            <p>...</p>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/sukharkov.jpg" alt="Первый слайд">

            </div>


            <div class="carousel-item   first">
                <img class="d-block w-100" src="/img/galoshes.jpg" alt="Второй слайд">
            </div>


            <div class="carousel-item  first">
                <img class="d-block w-100" src="/img/Mitrofanova.jpg" alt="Третий слайд">
            </div>
            <div class="carousel-item  first">
                <img class="d-block w-100" src="/img/hallway.jpg" alt="Третий слайд">
            </div>
            <div class="carousel-item  first">
                <img class="d-block w-100" src="/img/sukharkov.jpg" alt="Третий слайд">
            </div>

            <div class="carousel-item none">
                <img class="d-block w-100" src="/img/IMG_5771.jpg" alt="Второй слайдер">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Второй слайдер , показывается при клике </h3>
                    <p>...</p>
                </div>
            </div>

            <div class="carousel-item none">
                <img class="d-block w-100" src="/img/tub.jpg" alt="Второй слайдер">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Третий слайдер , показывается при клике </h3>
                    <p>...</p>
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
<script>
    function sl_test() {
        $('.carousel').on('slid.bs.carousel', function () {
            var item = $(this).find('.none');
            if (!item.hasClass('active')) {
                item.removeClass('carousel-item').css('display', 'none');
                $('.first:not(.active)').addClass('carousel-item').css('display', '');
            }
        })
    }

    function sl_test_of() {
        $('.carousel-inner').each(function (i) {
            var item = $(this).find('.none');
            item.css('display', '').addClass('carousel-item none');
            $('.first:not(.active)').removeClass('carousel-item').css('display', 'none');
        });
    }

    sl_test();
</script>