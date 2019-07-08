
<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>
<section class="px2 sm-px3 md-px4 py0">
  <div class="clearfix mxn2">
    <div class="sm-col sm-col-12">
  <?php foreach($projects as $project): ?>

    <div class="col col-6 sm-col-4 md-col-3 lg-col-2 px2 mb3">

        <a href="<?= $project->url() ?>" class="block">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="fit" />
          <?php endif ?>
          </a>
          </div>

  <?php endforeach ?>

</div>
</div>
</section>
