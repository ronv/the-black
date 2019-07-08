<?php snippet('header') ?>


<section class="px2 sm-px3 md-px4 py0">
  <div class="clearfix mxn2">
    <div class="sm-col sm-col-12">

      <div class="col col-12 px2 mb3">
  <div>

    <div class="mb3">
    <?php snippet('coverimage', $page) ?>
    </div>

    <div class="clearfix h4 caps m0">
    <div class="sm-col">
    <h1 class="h4 m0"><?= $page->title()->html() ?></h1>
  </div>
    <div class="sm-col-right">
      <h2 class="h4 m0"><?= $page->date('F jS, Y') ?></h2>
    </div>
    </div>

    <hr class="mt1" />

    <span class="mb4 h3">
      <?= $page->text()->kirbytext() ?>
    </span>

  </div>
</div>


</div>
</div>
</section>


<?php snippet('footer') ?>
