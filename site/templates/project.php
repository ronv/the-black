<?php snippet('header') ?>

<section class="px2 sm-px3 md-px4 py0">

  <div class="clearfix mxn2">
    <div class="sm-col sm-col-12 px2">
      <?php
            // Images for the "project" template are sortable. You
            // can change the display by clicking the 'edit' button
            // above the files list in the sidebar.
            foreach($page->images()->sortBy('sort', 'asc') as $image): ?>

                <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" class="fit"/>

            <?php endforeach ?>
</div>
</div>
</section>


<section class="px2 sm-px3 md-px4 py3">
  <div class="clearfix mxn2">
    <div class="sm-col sm-col-12 px2">
      <div class="clearfix">
      <div class="sm-col">
      <h2 class="sans h4 caps m0"><?= $page->title()->html() ?></h2>
      </div>

      <div class="sm-col-right">
        <h2 class="sans h4 caps m0 inline-block">
         YEAR: <?= $page->year() ?>
        </h2>
      </div>

        </div>





      <hr class="mt1">

      <span class="h3">
<?= $page->text()->kirbytext() ?>
      </span>


    </div>
  </div>
</section>




    <?php snippet('prevnext') ?>


<?php snippet('footer') ?>
