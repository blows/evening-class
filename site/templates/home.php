<?php snippet('header') ?>

<style type="text/css">

body{
background: url(<?php $img = $page->homeImage()->toFile();
echo $img->url(); ?>) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-color: rgba(0, 0, 255, 1) !important;
  background-blend-mode: multiply;
}

header#navigation h1 a, nav#main ul li a {
    color: white !important;
}

</style>

</div> <!--#homeImage-->

<div class="clock-window">
  <div id="clock-hide"><i class="ion-ios-close-empty"></i></div>
  <time class="clock" data-time="now">
    <i class="hour-hand"></i><i class="separator"></i><i class="minute-hand"></i>
  </time>
</div>

<?php snippet('footer') ?>
