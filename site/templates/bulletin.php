<div class="bulletin-window">
  <div id="bulletin-hide"><i class="ion-ios-close-empty"></i></div>
  <div class="bulletin">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->homeBulletin()->kirbytext() ?>
  <img src="<?php echo $homeBulletinImage->url() ?>" alt="<?php echo $page->title()->html() ?>">
  </div>
</div>
