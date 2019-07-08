<?php snippet('header') ?>

      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>

      <?php endif ?>





      <section class="px2 sm-px3 md-px4 py0">
        <div class="clearfix mxn2">
          <div class="sm-col sm-col-12">

    <?php if($articles->count()): ?>
      <?php foreach($articles as $article): ?>

    <div class="col col-12 px2 mb3">
  <div>

    <div class="mb3">
    <a href="<?= $article->url() ?>"><?php snippet('coverimage', $article) ?></a>
    </div>
    <div class="clearfix h4 caps m0">
    <div class="sm-col">
    <h1 class="h4 m0"><a href="<?= $article->url() ?>" class="text-decoration-none"><?= $article->title()->html() ?></a></h1>
  </div>
    <div class="sm-col-right">
      <h2 class="h4 m0"><?= $article->date('F jS, Y') ?></h2>
    </div>
    </div>
    <hr class="mt1" />
    <p class="mb3 h3">
      <?= $article->text()->kirbytext()->excerpt(30, 'words') ?>
      <a href="<?= $article->url() ?>" class="article-more">read more</a>
    </p>

  </div>
</div>

  <?php endforeach ?>
<?php else: ?>
  <p class="h3 mb0">This blog does not contain any articles yet.</p>
<?php endif ?>

</div>
</div>
</section>

<?php snippet('pagination') ?>


<?php snippet('footer') ?>
