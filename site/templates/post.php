<?php snippet('header') ?>

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
  <section id="post">

  <article>
    <div class="row">
    <!--<div class="col-sm-6">
      <?= getCoverImage($post) ?>
    </div>-->

<div class="col-sm-6">
    <div id="slider" class="carousel" data-ride="carousel">
    <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php $n=0; foreach($post->images()->sortBy('sort', 'asc') as $image): $n++; ?>
            <div class="item <?php if($n==1) echo 'active' ?>">
                <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>" class="img-responsive" />
            </div>
            <?php endforeach ?>
        </div>
    <!-- Controls -->
        <a class="left carousel-control" data-slide="next" href="#slider" role="button">
        </a>
        <a class="right carousel-control" data-slide="next" href="#slider" role="button">
        </a>
    </div>

    <!-- Indicators -->
    <div class="carousel-indicators-numbers"></div>
</div>



    <div class="col-sm-6">
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

        <?= $post->text()->kirbytext() ?>

      <?php snippet('post-footer', array('post'       => $post,
                                         'author'     => true,
                                         'avatar'     => false,
                                         'tags'       => true,
                                         'categories' => false)) ?>


    </div>
    </div>

    <?= snippet('nav-pager') ?>



  </article>


  </section>
</div>
</div>

<script>
var totalItems = $('.item').length;
var currentIndex = $('div.active').index() + 1;
$('.carousel-indicators-numbers').html(''+currentIndex+'/'+totalItems+'');

$(document).ready(function() {
$('#slider').carousel({
   interval: false
  })

$('#slider').on('slid.bs.carousel', function() {
    currentIndex = $('div.active').index() + 1;
   $('.carousel-indicators-numbers').html(''+currentIndex+'/'+totalItems+'');
});
    });
</script>

<?php snippet('footer') ?>
