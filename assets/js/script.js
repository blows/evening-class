$(function() {

    var element = $('#posts');
    var url = element.data('page') + '.json';
    var limit = parseInt(element.data('limit'));
    var offset = limit;

    $(window).scroll(function() { // detect page scroll
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) { // if user scrolled to bottom of the page
            $.get(url, { limit: limit, offset: offset }, function(data) {

                if (data.more === false) {
                    $('.footer').show();
                }

                // console.log("data.more is " + data.more);

                var $container = $('#posts').packery({ itemSelector: '.item' });
                var $html = $(data.html);

                // Hide the new html content so it doesn't pop-up for a second
                // before if appears on screen and gets placed by packery
                $html.css('opacity', 0);


                // Old Code
                // $('element').imagesLoaded(function() { // only apply Packery once images loaded
                //     element.append($html)
                //         .packery('appended', $html);
                // });

                // Fix from second last comment here:
                // https://github.com/metafizzy/packery/issues/245
                $container.append($html);
                $container.imagesLoaded(function() {
                    element.packery('appended', $html);
                    // Show the new html content after it's been placed by packery
                    $html.css('opacity', 1);
                });

                offset += limit;
            });
        }
    });

});