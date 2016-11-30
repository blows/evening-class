jQuery(document).ready(function(){

// clock in real time
	$('time[data-time]').each(
		function(){

			var hrs = 0, mins = 0;

			if ( $(this).data('time') == "now" ){
				var currentTime = new Date();
				hrs  = currentTime.getHours();
				mins = currentTime.getMinutes();
			} else {
				hrs  = parseInt( $(this).data('time').toString().slice(0,2), 10 ),
				mins = parseInt( $(this).data('time').toString().slice(2,4), 10 );
			}

			var	minutesDegrees = 6 * mins, 				 // 1 min = 6 deg
				hoursDegrees   = 30 * ( hrs + mins/60 ); // 1 hr = 30 deg

			$(this).find('.hour-hand').css({
				'transform' : 'rotate(' + hoursDegrees + 'deg)',
				'-ms-transform' : 'rotate(' + hoursDegrees + 'deg)',
				'-webkit-transform' : 'rotate(' + hoursDegrees + 'deg)'
			});

			$(this).find('.minute-hand').css({
				'transform' : 'rotate(' + minutesDegrees + 'deg)',
				'-ms-transform' : 'rotate(' + minutesDegrees + 'deg)',
				'-webkit-transform' : 'rotate(' + minutesDegrees + 'deg)'
			});
		}
	);

// clock-window draggable
$(".clock-window").draggable({
	containment: "body"
});

$('.clock-window').each(function(i,el){

		var tLeft = Math.floor(Math.random()*70),
				tTop  = Math.floor(Math.random()*70);

		$(el).css({position:'absolute', left: tLeft+'%', top: tTop+'%'});

});

// clock-window hidable
	$("#clock-hide").click(function(){
		$(".clock-window").hide();
	});








});
