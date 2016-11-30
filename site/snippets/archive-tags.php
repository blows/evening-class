<section id="tags">
  <header>
    <h2>Tags:</h2>
  </header>

  <?php $p = kirby()->request()->params()->tag(); ?>
  <?php $tags = getTagsArchive(); if($tags->count() > 0): ?>
  <ul>
  <?php foreach($tags as $tag): ?>
    <li>
      <a <?php ecco($tag == $p, ' class="active"') ?> href="<?= $site->url() ?><?php echo $tag->url() ?>">
        <?php echo ucwords($tag->name()) ?>
      </a>
    </li>
  <?php endforeach ?>
  </ul>
<?php else: ?>
  <p><strong>No tags found.</strong></p>
<?php endif ?>
</section>
