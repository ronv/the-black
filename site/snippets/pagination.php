<section class="px2 sm-px3 md-px4 py0">
  <div class="clearfix mxn2">
    <div class="sm-col sm-col-12 px2">
<?php if($articles->pagination()->hasPages()): ?>
<div class="clearfix">

  <?php if($articles->pagination()->hasNextPage()): ?>
  <a class="right text-decoration-none p1 h4 caps bold" href="<?php echo $articles->pagination()->nextPageURL() ?>">older posts &rsaquo;</a>
  <?php endif ?>

  <?php if($articles->pagination()->hasPrevPage()): ?>
  <a class="left text-decoration-none p1 h4 caps bold" href="<?php echo $articles->pagination()->prevPageURL() ?>">&lsaquo; newer posts</a>
  <?php endif ?>

</div>
<?php endif ?>
</div>
</div>
</section>
