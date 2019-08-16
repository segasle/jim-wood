</div>
</div>
<footer>
    <div class="cellar">

    </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="javascrpt/function-form.js"></script>
<script src="javascrpt/main.js"></script>

<script>


    $('.carousel').on('slid.bs.carousel', function (e) {
        var test2= $('.active > .d-md-block h3 ').text();
        var test_p= $('.active > .d-md-block p').text();
        var item_test = $(this).find('.first.carousel-item.active h3');
        if (test2){
            $('.my-block .h3').text(test2);
        }
        if (test_p) {
            $('.my-block .text').text(test_p);
        }
    });



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
</body>
</html>