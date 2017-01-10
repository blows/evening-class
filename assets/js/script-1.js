$(function(){

  var element = $('#posts');
  var url     = element.data('page') + '.json';
  var limit   = parseInt(element.data('limit'));
  var offset  = limit;


  $('.load-more').on('click', function(e) {

    $.get(url, {limit: limit, offset: offset}, function(data) {

      if(data.more === false) {
        $('.load-more').hide();
      }

      var $html = $( data.html );

      $('element').imagesLoaded( function() {
        element.append( $html )
        .packery( 'appended', $html );
      });

      offset += limit;

    });

  });

});
