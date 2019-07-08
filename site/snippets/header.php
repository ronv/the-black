  <!DOCTYPE html>
  <html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <meta charset="utf-8">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?php snippet('eu-kirby-social-metatags') ?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="Blog Feed" />
  <?= css('assets/css/basscss.min.css') ?>
  <?= css('assets/css/index.css') ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

  <body class="black container">

  <header class="px2 sm-px3 md-px4 pt4">
    <nav class="clearfix h4 caps m0">
    <div class="sm-col">
    <h1 class="h4 m0"><a href="<?= url() ?>" rel="home" class="text-decoration-none"><?= $site->title()->html() ?></a></h1>
  </div>
    <div class="sm-col-right">
      <h2 class="h4 m0">



            <div class="clearfix">
              <ul class="list-reset m0 p0">
                <?php foreach($pages->visible() as $item): ?>
                <li class="inline-block<?= r($item->isOpen(), ' strike') ?>">
                  <a href="<?= $item->url() ?>" class="inline text-decoration-none"><?= $item->title()->html() ?></a>
                </li>
                <?php endforeach ?>
              </ul>
            </div>





      </h2>
    </div>
    </nav>
    <hr class="mt1" />


  </header>
