<nav id="pager">
  <ul>
      <?php if($post->hasNextVisible()): ?>
        <li id="next-post">
          <i class="ion-ios-arrow-thin-left"></i> Previous:
          <a href="<?= $post->nextVisible()->url() ?>">
            <?= ucwords($post->nextVisible()->title()->html()) ?>
          </a>
        </li>
      <?php endif ?>

      <?php if($post->hasPrevVisible()): ?>
        <li id="previous-post">
          Next:
          <a href="<?= $post->prevVisible()->url() ?>">
            <?= ucwords($post->prevVisible()->title()->html()) ?>
          </a> <i class="ion-ios-arrow-thin-right"></i>
        </li>
      <?php endif ?>
  </ul>
</nav>
