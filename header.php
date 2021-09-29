<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="2RkWF1kVGhTiShs1rhZ_MRqoYBbG7Rc4nG966o-B5nc" />
<meta name="test-the-pipeline" content="test" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=0.0.2" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<style type="text/css" media="screen">
<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background-color: #fff; }
<?php } ?>
</style>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3SDC9S');</script>
<!-- End Google Tag Manager -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3SDC9S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php if(!is_single()) : ?>
    <style>
		body{
			background: white !important;
		}
	</style>
<?php endif; ?>	

<header class="blog-page-header">
	<div class="header-nav-row">
       <div class="site-logo">
		   <a href="<?php echo site_url(); ?>">
			   <img src="https://www.wcei.net/MediaLibraries/WCEI/WCEI/Design/WoundCare_Logo_RGB_with_endorser.png"/>
		   </a>
	   </div>
	   <div class="header-nav-items">
		   <ul class="nav-items">
		       <li class="nav-item"><a class="nav-link" href="https://www.wcei.net/courses">Courses</a></li>
		       <li class="nav-item">
				   <a class="nav-link" href="">Blog <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></a>
				   <div class="sub-nav">
					<ul class="sub-nav-items">
					  <li><a href="<?php echo site_url(); ?>/category/specialties/skin-wound-management">Skin and Wound Management</a></li>
					  <li><a href="<?php echo site_url(); ?>/category/specialties/diabetic-wound-management">Diabetic Wound Management</a></li>
					  <li><a href="<?php echo site_url(); ?>/category/specialties/nutrition-wound-management">Nutrition Wound Management</a></li>
					  <li><a href="<?php echo site_url(); ?>/category/specialties/ostomy-management">Ostomy Management</a></li>
                    </ul>  
				   </div>
			   </li>
		       <li class="nav-item"><a class="nav-link" href="">Resources</a></li>
			   <li class="nav-item"><a class="nav-link" href="https://www.wcei.net/contact-us">Contact</a></li>
		   </div>
	   </div>
    </div>	
</header>

<?php if (is_home()) : ?> 

<div class="hero-banner-sec">
	<div class="hero-banner-row">
		<div class="banner-col">
			<h1>Join our Blog Community</h1>
			<p>Read our blogs to grow your nursing practice. You'll get career and education tips, plus trending news.</p>
			<div class="explore-blog-categories">
			<div class="explore-btn"><span>Explore Blog Categories</span></div>
			<div class="explore-blog-content">
				<ul class="explore-blog">
					<li><a href="<?php echo site_url(); ?>/category/specialties/skin-wound-management">Skin and Wound Management</a></li>
					<li><a href="<?php echo site_url(); ?>/category/specialties/diabetic-wound-management">Diabetic Wound Management</a></li>
					<li><a href="<?php echo site_url(); ?>/category/specialties/nutrition-wound-management">Nutrition Wound Management</a></li>
					<li><a href="<?php echo site_url(); ?>/category/specialties/ostomy-management">Ostomy Management</a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>	

<?php endif; ?>

<div id="page">

<hr />