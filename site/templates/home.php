<?php snippet('header') ?>


<section class="px2 sm-px3 md-px4 py0">

  <div class="clearfix mxn2">
    <div class="sm-col sm-col-12 px2">

 <?php snippet('coverimage', $page) ?>


</div>
</div>
</section>

  <section class="px2 sm-px3 md-px4 py3">
    <div class="clearfix mxn2">

      <div class="sm-col sm-col-12 px2">
        <h2 class="sans h4 caps m0"><?= $page->title()->html() ?></h2>
        <hr class="mt1">
        <san class="h3">
          <?= $page->text()->kirbytext() ?>
        </span>
      </div>

    </div>
  </section>



  <?php

  $projects = page('projects')->children()->visible()->limit(4);

  if(isset($limit)) $projects = $projects->limit($limit);

  ?>

  <section class="px2 sm-px3 md-px4 py0">
    <div class="clearfix mxn2">
      <div class="sm-col sm-col-12 px2">
        <h2 class="sans h4 caps m0">Recent projects</h2>
        <hr class="mt1">
</div>

    <?php foreach($projects as $project): ?>

      <div class="col col-6 sm-col-6 md-col-3 lg-col-3 px2 mb3">
          <a href="<?= $project->url() ?>" class="block">
            <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
              <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="fit cover" />
            <?php endif ?>

          </a>
      </div>

    <?php endforeach ?>

  </div>
    </section>






<?php snippet('footer') ?>
