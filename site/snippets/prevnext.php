<section class="px2 sm-px3 md-px4 py0">
  <div class="clearfix mxn2">
    <div class="sm-col sm-col-12 px2">

<?php if($page->hasPrevVisible()): ?>
<a href="<?php echo $page->prevVisible()->url() ?>" class="left text-decoration-none p1 h4 caps bold">&lsaquo; previous project</a>
<?php endif ?>

<?php if($page->hasNextVisible()): ?>
<a href="<?php echo $page->nextVisible()->url() ?>" class="right text-decoration-none p1 h4 caps bold">next project &rsaquo;</a>
<?php endif ?>

</div>
</div>
</section>
