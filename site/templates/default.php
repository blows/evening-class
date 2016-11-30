<?php snippet('header') ?>

<div class="row">
<div class="col-xs-12">
	<header>
	  <h1><?= $page->title()->html() ?></h1>
	</header>

	<?= $page->text()->kirbytext() ?>
</div>
</div>

<?php snippet('footer') ?>
