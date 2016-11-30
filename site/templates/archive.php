<?php snippet( 'header') ?>

<div class="row">
<div class="col-xs-12">
<?php snippet('archives', array('dates'      => false,
                                'authors'    => false,
                                'categories' => true,
                                'tags'       => false)) ?>
</div>
</div>

<div class="row">
<div class="col-xs-12">
<section id="posts">

    <div class="az-column"></div>
    <div class="az-gutter"></div>

<!--<header>
  <h1>Archive<? e(isset($archiveTitle), $archiveTitle) ?>:</h1>
</header>-->

<?php if($posts->count()): ?>

<?php foreach($posts as $post): ?>
  <article class="item">
      <header>
        <h2>
          <?php echo ucwords($post->category()->text()) ?>
        </h2>
        <h1>
          <a href="<?= getPostUrl($post) ?>">
            <?= $post->title()->html() ?>
          </a>
        </h1>
      </header>
          <a href="<?= getPostUrl($post) ?>">
      <div id="coverimage"><?= getCoverImage($post) ?></div>
          </a>

      <?php snippet('post-footer', array('post'       => $post,
                                         'author'     => true,
                                         'category'   => false)) ?>
        </a>
  </article>
<?php endforeach ?>


<?php else: ?>

  <?= $page->noposts()->kirbytext() ?>

<?php endif ?>

</section>

<?php snippet('nav-pagination') ?>

</div>
</div>

<?php echo js('assets/js/packery.pkgd.js') ?>

<script type="text/javascript">
  $( document ).ready( function() {

$(window).load(function () {
                var $container = $('#posts');
                // initialize
                $container.packery({
                  itemSelector: '.item',
                  columnWidth: '.az-column',
                  gutter: '.az-gutter',
                  percentPosition: true
                });
            });
  });
</script>

<?php snippet( 'footer') ?>
