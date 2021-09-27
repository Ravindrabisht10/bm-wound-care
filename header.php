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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=0.0.1" type="text/css" media="screen" />
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



<style>
body{background-position:center 100px}body #page{border:none!important}body #page #content.widecolumn{margin-top:0}.blog-page-header{background:#f8f8f8}.blog-page-header .header-nav-row{display:flex;max-width:798px;margin:0 auto;justify-content:space-between;align-items:center;padding:0}.blog-page-header .header-nav-row .site-logo a img{max-width:84px}.blog-page-header .header-nav-row .header-nav-items{width:70%}.blog-page-header .header-nav-row .header-nav-items .nav-items{display:flex;justify-content:space-between;align-items:center;margin:0 auto;padding:0;max-width:390px}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item{list-style:none;padding:36px 24px;position:relative;cursor:pointer}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .nav-link{color:#4c4d4fd4;text-transform:uppercase;font-weight:600;font-size:14px}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav{display:none;position:absolute;background:#fff;padding:10px;top:100%;width:230px;box-shadow:0 2px 7px -2px #000;z-index:9;right:0}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav ul{padding:0}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav ul li{list-style:none;text-align:left;padding:4px}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav ul li a{font-size:14px;color:#696a6c;text-decoration:none}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav ul li a:hover{color:maroon}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item:hover .sub-nav{display:block!important}.hero-banner-sec{background:url(https://www.wcei.net/MediaLibraries/WCEI/WCEI/GettyImages-98818446_Edit-2.jpg);background-position:center;background-size:cover;background-repeat:no-repeat;padding:60px 0;position:relative}.hero-banner-sec:before{background:maroon;content:"";height:100%;width:100%;left:0;top:0;z-index:0;position:absolute;opacity:.6}.hero-banner-sec .hero-banner-row{max-width:798px;margin:0 auto;display:flex;z-index:1;position:relative}.hero-banner-sec .hero-banner-row .banner-col{width:65%;text-align:left}.hero-banner-sec .hero-banner-row .banner-col h1{margin:0;padding-top:0;color:#fff;font-size:34px}.hero-banner-sec .hero-banner-row .banner-col p{color:#fff;font-size:16px;line-height:1.4}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories{display:inline-block;position:relative;width:280px}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-btn{display:inline-block;background:#f5e3b5;margin-top:24px;cursor:pointer;width:100%}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-btn span{padding:10px 20px;font-size:16px;display:inline-block}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-btn span:after{content:"+";position:absolute;right:20px;font-size:18px;line-height:1}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog-content{display:none;position:absolute;width:100%;left:0;top:100%}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog{padding:12px;margin:2px 0 0;background:#fff;box-shadow:0 2px 7px -2px #000}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog li{list-style:none;padding:4px}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog li a{font-size:14px;color:#696a6c;text-decoration:none}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog li a:hover{color:maroon}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories:hover .explore-blog-content{display:block}.blog-page-footer{clear:both;background:#485865;margin-bottom:-30px}.blog-page-footer .footer-row .footer-top-nav{display:flex;align-items:flex-start;padding:30px 0;max-width:798px;margin:0 auto}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items{display:flex}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col{text-align:left;padding-left:50px}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col span{text-transform:uppercase;font-size:16px;color:#fff;border-bottom:2px solid #fff;display:block;padding-bottom:10px}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col ul{padding:0}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col ul li{list-style:none;padding:4px 0}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col ul li a{color:#fff;font-size:13px;padding:4px 0;text-decoration:none}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col ul li a:hover{color:maroon}.blog-page-footer .footer-row .footer-copyright{max-width:798px;margin:0 auto}.blog-page-footer .footer-row .footer-copyright span{color:#fff;font-size:12px;padding:10px 0 20px;display:inline-block}.blog-page-footer .footer-row hr{display:block}#sidebar{margin:0!important}

</style>

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
				   <a class="nav-link" href="">Blog</a>
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



<div id="page">

<hr />