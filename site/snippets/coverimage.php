<?php

if ($image = $item->coverimage()->toFile()): ?>
<figure class="">
  <img src="<?php echo $image->url() ?>" alt="" class="fit"/>

  <figcaption class="h5">
    <?php
echo $image->caption()->html() ?>
  </figcaption>

  </figure>

<?php
endif ?>
