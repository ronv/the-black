<footer>
<section class="px2 sm-px3 md-px4 pb4">
  <div class="clearfix mxn2">
    <div class="sm-col sm-col-12 px2">
        <hr class="mb1 mt1">
      <div class="clearfix">
      <div class="sm-col">
      <h2 class="sans h4 caps m0"><?php

// Parse Kirbytext to support dynamic year,
// but remove all HTML like paragraph tags:

echo html::decode($site->copyright()->kirbytext())
?></h2>
      </div>

        </div>



    </div>
  </div>
</section>
</footer>

<?php

if (!$site->googleanalytics()->empty()): ?>
<!-- Google Analytics-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?php
	echo $site->googleanalytics() ?>', 'auto');
ga('send', 'pageview');
</script>
<?php
endif ?>

<?php echo js('assets/js/jquery.min.js') ?>
<?php echo js('assets/js/jquery.fitvids.js') ?>
<script>
  $(document).ready(function(){

    // Target your .container, .wrapper, .post, etc.

    $("section").fitVids();
  });
</script>


</body>
</html>
