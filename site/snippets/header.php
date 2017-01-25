<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="keywords" content="<?= $site->keywords()->html() ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <?php echo css('assets/css/ionicons.min.css') ?>

  <?php echo js('assets/js/jquery-2.2.1.min.js') ?>
  <?php echo js('assets/js/jquery-ui.min.js') ?>
  <?php echo js('assets/js/clock.js') ?>
  <?php echo js('assets/js/script.js') ?>
  <script src="https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


  <script type="text/javascript">
  function getStylesheet() {
        var currentTime = new Date().getHours();
        if (0 <= currentTime&&currentTime < 7) {
         document.write('<?php echo css('/assets/css/night.css') ?>');
        }
        if (7 <= currentTime&&currentTime < 19) {
         document.write('<?php echo css('/assets/css/day.css') ?>');
        }
        if (19 <= currentTime&&currentTime <= 24) {
         document.write('<?php echo css('/assets/css/night.css') ?>');
        }
  }
  getStylesheet();

  </script>

  <noscript><!-- <link href="/evening-class/assets/css/day.css" rel="stylesheet"> --><?php echo css('/assets/css/day.css') ?></noscript>
  </script>
  <!-- for development '/evening-class/assets/css/day.css' but for uploads just '/assets/css/night.css' for live uploads
  - otherwise certain pages don't look for styelsheetsin the right place - why is this happening, what am I missing? -->


  </head>
  <body>
    <div class="container-fluid">

<?php snippet('nav-bar') ?>

      <div class="row">
      <div class="col-xs-12">
        <header id="navigation">
          <h1>
            <a href="<?= $site->url() ?>"><?= $site->title()->html() ?></a>
          </h1>
            <?php snippet('nav-main') ?>
        </header>
      </div>
      </div>
        <main>
