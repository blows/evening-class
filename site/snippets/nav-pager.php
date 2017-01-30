<nav id="pager">
  <ul>
      <?php if($post->hasNextVisible()): ?>
        <li id="next-post">
          <a href="<?= $post->nextVisible()->url() ?>">
            <i class="ion-ios-arrow-thin-left"></i> Previous
            <!-- <?= ucwords($post->nextVisible()->title()->html()) ?> -->
          </a>
        </li>
      <?php endif ?>

      <?php if($post->hasPrevVisible()): ?>
        <li id="previous-post">
          <a href="<?= $post->prevVisible()->url() ?>">
            <!-- <?= ucwords($post->prevVisible()->title()->html()) ?> -->
          Next <i class="ion-ios-arrow-thin-right"></i>
          </a>
        </li>
      <?php endif ?>
  </ul>
</nav>
