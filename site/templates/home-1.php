<?php snippet('header-home') ?>

<div
	class="wrap-logo" 
	data-0="height: 100%; transform: translate3d(0, 0, 0);" 
	data-100p="height: 0; transform: translate3d(0, 0, 0);">
		<img src="assets/images/EveningClassLogo-01.png" alt="" />
</div>

<div id="skrollr-body">
	<div class="content">
		<p>Evening Class is a self-organising design education experiment in London. A flexible environment where participants can cultivate common interests, develop their research and collectively shape the class’s agenda.</p>
		<p>Participants reflect on their practices in wider cultural, social and political contexts and work closely with London’s different landscapes. They create their own audience, learn from it and engage with it.</p>
		<p>The process of the group’s evolution is transparent and publicly observed. Evening Class intends to make the programme’s materials and references accessible to a wider audience.</p>
		<p>The curation of the classes is expected to take many forms and explore different themes. Speakers and mentors are invited bi-weekly in relation to the current programme. </p>
		<p>Evening Class is a self-supporting group. The expenses are decided collectively and fluctuate in accordance with the group's needs. At the moment they amount to £30 a month.</p>
		<p>Beginning in January 2016, Evening Class takes place twice per week. It is currently located at 48 Aberfeldy Street, Poplar, with occasional meetings in Hoxton, East London, where <a href="http://www.europaeuropa.co.uk" alt="" target="_blank"><span>Europa</span></a> have kindly given us the use of their space.</p>
		<p>The programme currently consists of 28 participants from different educational and cultural backgrounds, who form an active and collaborative partnership.</p>
		<p>The current participants are Ailsa Ogden, Aleena Jamil, Alexandra Lunn, Andrew Beltran, Andrew Brash, An Yen, Ashley Kirby, Camille Gervais, Christopher Lacy, Chya Hsu, Daniel Shannon, Dina Silanteva, Eva Nazarova, Gareth Lindsay, Joseph Nava, Kia Tasbihgou, Lauranne Cox, Margherita Huntley, Michael Wallace, Nicola Chemotti, Nick Reilly, Oliver Gabe, Oliver Long, Olya Troitskaya, Phoebe Barnicoat, Robbie Blundell, Rosa Nussbaum and Simon Rogers.</p>
		<p>For any questions please write to <a href="mailto:info@evening-class.org" alt="" target="_blank"><span>info@evening-class.org</span></a>.</p>
		<p><a href="https://twitter.com/evening_class" alt="" target="_blank"><span>Twitter</span></a><br/>
		<a href="https://www.facebook.com/eveningclasslondon?_rdr=p" alt="" target="_blank"><span>Facebook</span></a></p>
		<div class="credits-mob">
			<p>Website is made by <a href="http://olyatroitskaya.com/" alt="" target="_blank"><span>Olya Troitskaya</span></a> and <a href="mailto:arturturkuli@gmail.com"><span>Artur Turkuli</span></a>.</p>
		</div>
	</div>
	<div class="credits">
		<p>Website is made by <a href="mailto:arturturkuli@gmail.com"><span>Artur Turkuli</span></a> and <a href="http://olyatroitskaya.com/" alt="" target="_blank"><span>Olya Troitskaya</span></a>.</p>
	</div>
	</div>
</div>
<script src="assets/js/skrollr.js"></script>
<script type="text/javascript">
window.onload=function(){
	skrollr.init({
		smoothScrolling: false,
		forceHeight: false,
		//mobileDeceleration: 0.004
	});
};
$(".wrap-logo").click(function() {
    $("html, body").animate({
        scrollTop: $("#skrollr-body").offset().top
    }, 1200);
});
$(document).click(function() {
    $(".banner-wrapper").hide();
});
</script>
</body>
</html>

