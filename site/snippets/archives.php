<?php
if(!isset($dates))      $dates      = false;
if(!isset($authors))    $authors    = false;
if(!isset($tags))       $tags       = false;
if(!isset($categories)) $categories = false;
if(!isset($class))      $class      = false;
?>

<section id="archives" <?php if($class) echo 'class="' . $class . '"' ?>>

  <?php if($categories) snippet('archive-categories') ?>

  <?php if($tags) snippet('archive-tags') ?>

  <?php if($dates) snippet('archive-dates') ?>

  <?php if($authors) snippet('archive-authors') ?>

</section>
