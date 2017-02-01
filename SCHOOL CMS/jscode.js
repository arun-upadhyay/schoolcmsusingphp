        var imgs = [
        'images/frontgal/1.jpg',
        'images/frontgal/2.jpg',
        'images/frontgal/3.jpg'];
        var cnt = imgs.length;

        $(function() {
            setInterval(Slider, 3000);
        });

        function Slider() {
        $('#imageSlide').fadeOut("slow", function() {
           $(this).attr('src', imgs[(imgs.length++) % cnt]).fadeIn("slow");
        });
        }
