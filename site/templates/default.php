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
            <div class="clearfix">
            <div class="sm-col">
            <h2 class="sans h4 caps m0"><?= $page->title()->html() ?></h2>
            </div>
</div>

            <hr class="mt1" />


      <div class="h3">
        <?= $page->text()->kirbytext() ?>
      </div>


    </div>
  </div>
    </section>

<?php snippet('footer') ?>
