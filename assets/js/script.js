$(function(){

  var element = $('#posts');
  var url     = element.data('page') + '.json';
  var limit   = parseInt(element.data('limit'));
  var offset  = limit;

  $(window).scroll(function() { // detect page scroll
      if($(window).scrollTop() + $(window).height() >= $(document).height()) { // if user scrolled to bottom of the page
        $.get(url, {limit: limit, offset: offset}, function(data) {

          if(data.more === false) {
            $('.footer').show();
          }

          var $container = $('#posts').packery({ itemSelector: '.item' });
          var $html = $( data.html );

          $('element').imagesLoaded( function() { // only apply Packery once images loaded
            element.append( $html )
            .packery( 'appended', $html );
          });

          offset += limit;

        });
      }
  });

});
