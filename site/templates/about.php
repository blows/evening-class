<?php snippet('header') ?>

<section id="about">

<div class="row">
<div class="col-sm-6">
	<div class="about-section"><?= $page->general()->kirbytext() ?></div>
	<div class="about-section"><?= $page->contact()->kirbytext() ?></div>
	<div class="about-section"><?= $page->participants()->kirbytext() ?></div>
</div>
<div class="col-sm-6">
	<div class="about-section"><?= $page->particpate()->kirbytext() ?></div>
	<div class="about-section"><?= $page->location()->kirbytext() ?></div>
	<div class="about-section"><?= $page->finance()->kirbytext() ?></div>
	<!-- Begin MailChimp Signup Form -->
	<div id="mc_embed_signup">
	<form action="//evening-class.us14.list-manage.com/subscribe/post?u=4a0ffd44bb6102249bf42f1f2&amp;id=9da9e33e28" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">
		<h2>Newsletter</h2>
		<div class="sign-up-bar">
			<div class="mc-field-group">
				<label for="mce-EMAIL" style="display:none">Email Address</label>
				<input type="email" placeholder="Enter email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="button"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4a0ffd44bb6102249bf42f1f2_9da9e33e28" tabindex="-1" value=""></div>
	    </div>
	</form>
	</div>
	<!--End mc_embed_signup-->
</div>
</div>

<div class="clock-window">
  <div id="clock-hide"><i class="ion-ios-close-empty"></i></div>
  <time class="clock" data-time="now">
    <i class="hour-hand"></i><i class="separator"></i><i class="minute-hand"></i>
  </time>
</div>

</section>

<?php snippet('footer') ?>
