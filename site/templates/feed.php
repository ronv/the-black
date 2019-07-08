<?php
$feedPage = $page->page()->or('blog');
echo page($feedPage)->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description(),
  'link'        => $feedPage,
));
