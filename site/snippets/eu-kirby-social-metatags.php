<?php
/**
 * EU-KIRBY-SOCIAL-METATAGS
 *
 * Kirby snippet that passes FB-/
 * OpenGraph-, TwitterCard- and
 * Google+/Schema.org compatible
 * meta data to the header – the
 * focus is the "article"-type
 *
 * @version   0.1b
 * @author    error:undefined design <http://error-undefined.de>
 * @link      https://github.com/errorundefined/eu-kirby-countdays
 * @license   MIT <http://opensource.org/licenses/MIT>
 *
 * FIELD REQUIREMENTS
 *
 * $site->title()
 * $page->title()
 * $site->description() ---> site's meta description
 * $page->description() ---> page's meta description
 * $page->text() ---> page's main text content, used to generate fallback for meta description
 * $page->featuredimage() ---> page's featured image
 * $site->featuredimage() ---> site's featured image, used as fallback
 * $site->twitter() ---> publishers's twitter handle
 * $page->twitter_author() ---> authors's twitter handle
 * $site->facebook_admin() ---> facebook admin ID
 *
 * if any of the above is missing the
 * snippet should still work, only
 * with less meta tags output
 */

// GET SITE TITLE
$site_title = $site->title()->html();

// GET PAGE TITLE
$page_title = $site_title . ' &mdash; ' . $page->title()->html();

// GET PAGE URL
$page_url = $page->url();

// GET PAGE'S ROOT
if ($page->depth() > 1) {
	$page_root = $page->parents()->last()->title();
} else {
	$page_root = false;
}

// GET PAGE DESCRIPTION
if($page->description()->exits() && !$page->description()->isEmpty() ){
	$description = $page->description()->html();
} elseif($page->text()->exits() && !$page->text()->isEmpty() ) {
	$description = $page->text()->excerpt(400);
} else {
	$description = $site->description()->html();
}

// CHECK IF PAGE OR SITE HAS A FEATURED IMAGE, AND IF SO, GET IT
if($page->featuredimage() != ""){
	$image = $page->featuredimage()->toFile();
	if($image->dimension()->portrait()){
		$image = $image->crop(880, 550);
	}
	$featuredimage = $image->url();
	$featured_width = $image->width();
	$featured_height = $image->height();
} elseif($site->featuredimage() != ""){
	$image = $site->featuredimage()->toFile();
	if($image->dimension()->portrait()){
		$image = $image->crop(880, 550);
	}
	$featuredimage = $image->url();
	$featured_width = $image->width();
	$featured_height = $image->height();
} else {
	$featuredimage = false;
}

// GET PAGE'S PUBLICATION DATE (OR FALLS BACK TO MODIFIED DATE)
if($page->date() != ""){
	$pub_date = $page->date('c');
	$mod_date = $page->modified('c');
} else {
	$pub_date = $page->modified('c');
	$mod_date = false;
}

// GET THE SITE'S TWITTER HANDLE
if($site->twitter() != ""){
	$twitter_publisher = $site->twitter();
} else {
	$twitter_publisher = false;
}

// GET THE AUTHORS'S TWITTER HANDLE +
// FALL BACK TO SITE'S TWITTER HANDLE
if($page->twitter_author() != ""){
	$twitter_author = $page->twitter_author();
} elseif($site->twitter() != ""){
	$twitter_author = $site->twitter();
} else {
	$twitter_author = false;
}

// GET THE SITE'S FACEBOOK THINGY
if($site->facebook() != ""){
	$facebook_publisher = $site->facebook();
} else {
	$facebook_publisher = false;
}

// GET THE AUTHORS'S FACEBOOK THINGY +
// FALL BACK TO SITE'S FACEBOOK THINGY
if($page->facebook_author() != ""){
	$facebook_author = $page->facebook_author();
} elseif($site->facebook() != ""){
	$facebook_author = $site->facebook();
} else {
	$facebook_author = false;
}

// GET FACEBOOK ADMIN ID
if($site->facebook_admin() != ""){
	$facebook_admin = $site->facebook_admin();
} else {
	$facebook_admin = false;
}

// USED TO SHORTEN STUFF
// TWITTER MAX. DESCRIPTION LENGTH: 200
// FACEBOOK MAX. DESCRIPTION LENGTH: 300/110 (USE 300)
function shorten($string,$length=155,$append="&hellip;") {
	$string = trim($string);
	if(strlen($string) > $length) {
		$string = wordwrap($string, $length);
		$string = explode("\n", $string, 2);
		$string = $string[0] . $append;
	}
	return $string;
}
?>

<!-- Schema.org Data -->
<meta itemprop="name" content="<?php echo $page_title ?>">
<meta itemprop="description" content="<?php echo $description ?>">
<?php if($featuredimage): ?>
<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" style="display:none">
	<img itemprop="image" src="<?php echo $featuredimage ?>">
	<meta itemprop="url" content="<?php echo $featuredimage ?>">
	<meta itemprop="width" content="<?php echo $featured_width ?>">
	<meta itemprop="height" content="<?php echo $featured_height ?>">
</div>
<?php endif ?>

<!-- Open Graph Data -->
<meta property="og:site_name" content="<?php echo $site_title ?>" />
<?php if($page_title): ?><meta property="og:title" content="<?php echo $page_title ?>" />
<?php endif ?>
<meta property="og:description" content="<?php echo shorten($description, 300) ?>" />
<?php if($page_url): ?><meta property="og:url" content="<?php echo $page_url ?>" />
<?php endif ?>
<?php if($featuredimage): ?><meta property="og:image" content="<?php echo $featuredimage ?>">
<?php endif ?>
<meta property="og:type" content="article" />
<meta property="article:published_time" content="<?php echo $pub_date ?>" />
<?php if($mod_date): ?><meta property="article:modified_time" content="<?php echo $mod_date ?>" />
<meta property="og:updated_time" content="<?php echo $mod_date ?>" />
<?php endif ?>
<?php if($page_root): ?><meta property="article:section" content="<?php echo $page_root ?>" />
<?php endif ?>
<meta property="article:tag" content="Article Tag" />
<?php if($facebook_publisher): ?><meta property="article:publisher" content="<?php echo $facebook_publisher ?>" />
<?php endif ?>
<?php if($facebook_author): ?><meta property="article:author" content="<?php echo $facebook_author ?>" />
<?php endif ?>
<?php if($facebook_admin): ?>
<meta property="fb:admins" content="<?php echo $facebook_admin ?>" />
<?php endif ?>

<!-- Twitter Card Data -->
<?php if($featuredimage): ?><meta name="twitter:card" content="summary_large_image">
<?php else: ?><meta name="twitter:card" content="summary">
<?php endif ?>
<?php if($twitter_publisher): ?><meta name="twitter:site" content="@<?php echo $twitter_publisher ?>">
<?php endif ?>
<?php if($twitter_author): ?><meta name="twitter:creator" content="@<?php echo $twitter_author ?>">
<?php endif ?>
<?php if($page_title): ?><meta name="twitter:title" content="<?php echo $page_title ?>">
<?php endif ?>
<meta name="twitter:description" content="<?php echo shorten($description, 200) ?>">
<?php if($featuredimage): ?><meta name="twitter:image" content="<?php echo $featuredimage ?>">
<?php endif ?>
