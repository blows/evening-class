<section id="categories">
  <header>
    <h2>Categories:</h2>
  </header>
  <?php
  $categories = getCategoriesArchive();
  if($categories->count() > 0): ?>
    <ul>
    <?php foreach($categories as $category): ?>
      <li>
        <a href="<?= $site->url() ?><?php echo $category->url() ?>">
          <?php echo ucwords($category->name()) ?>
        </a>
      </li>
    <?php endforeach ?>
    </ul>
  <?php else: ?>
    <p><strong>No categories found.</strong></p>
  <?php endif ?>
</section>