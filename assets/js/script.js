$(function(){

  var element = $('#posts');
  var url     = element.data('page') + '.json';
  var limit   = parseInt(element.data('limit'));
  var offset  = limit;

  $(window).scroll(function() { //detect page scroll
      if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled to bottom of the page
        $.get(url, {limit: limit, offset: offset}, function(data) {

          if(data.more === false) {
            $('.load-more').hide();
          }

          var $container = $('#posts').packery({ itemSelector: '.item' });
          var $html = $( data.html );
          $container.append( $html );
          $container.packery( 'appended', $html );
          $container.packery( 'layout' );


          offset += limit;

        });
      }
  });

});
