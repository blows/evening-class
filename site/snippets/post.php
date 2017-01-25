<?php $dimensions = $post->image()->dimensions(); ?>
<article class="item" width="<?php echo $dimensions->width(); ?>" height="<?php echo $dimensions->height(); ?>">
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
