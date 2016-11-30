<?php snippet('header') ?>

  <div class="row">
  <div class="col-xs-12">
  <section id="description"><?php echo $page->text()->kirbytext() ?></section>
  <?php snippet('archives', array('dates'      => false,
                                  'authors'    => false,
                                  'categories' => true,
                                  'tags'       => false)) ?>
  </div>
  </div>

  <div class="row">
  <div class="col-xs-12">
    <section id="posts" data-page="<?= $page->url() ?>" data-limit="<?= $limit ?>">

      <div class="az-column"></div>
      <div class="az-gutter"></div>

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

    </section>

  </div>
  </div>

  <div class="clock-window">
    <div id="clock-hide"><i class="ion-ios-close-empty"></i></div>
    <time class="clock" data-time="now">
      <i class="hour-hand"></i><i class="separator"></i><i class="minute-hand"></i>
    </time>
  </div>


  <?php echo js('assets/js/packery.pkgd.js') ?>

  <script type="text/javascript">
    $( document ).ready( function() {

      $(window).load(function () {
        // init Packery
        var $container = $('#posts').packery({
          itemSelector: '.item',
          columnWidth: '.az-column',
          gutter: '.az-gutter',
          percentPosition: true,
          transitionDuration: 0
        });
        // layout Packery after each image loads
        $container.imagesLoaded().progress( function() {
        $container.packery();
        });
      });
    });





  </script>

<?php snippet('footer') ?>
