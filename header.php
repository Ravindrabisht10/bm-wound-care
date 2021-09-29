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
	body{font-family:roboto,sans-serif;background-position:center 70px}body #page{border:none!important}body #page #content.widecolumn{margin-top:0}body #page h1{font-family:roboto,sans-serif}body #page .widecolumn .entry p{color:#403a3a;font-family:roboto,sans-serif}body #page .widecolumn .entry p strong{font-size:18px;line-height:1.4}body #page .widecolumn .entry h2{font-family:roboto,sans-serif}body #page p.greyr{color:#403a3a;font-family:roboto,sans-serif;line-height:1.4}body #page h2,body #page h3{font-family:roboto,sans-serif;text-align:left;line-height:1.3}body #page .featured-image{margin-bottom:15px}body blockquote{border-left:5px solid #920e1b}.blog-page-header{background:#f8f8f8;position:sticky;z-index:9;top:0;box-shadow:0 0 10px -6px #000}.blog-page-header .header-nav-row{display:flex;max-width:798px;margin:0 auto;justify-content:space-between;align-items:center;padding:0}.blog-page-header .header-nav-row .site-logo a img{max-width:84px}.blog-page-header .header-nav-row .header-nav-items{width:70%}.blog-page-header .header-nav-row .header-nav-items .nav-items{display:flex;justify-content:space-between;align-items:center;margin:0;padding:0;max-width:470px;margin-left:auto}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item{list-style:none;padding:36px 20px;position:relative;cursor:pointer}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .nav-link{color:#4c4d4fd4;text-transform:uppercase;font-weight:600;font-size:14px;text-decoration:none}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .nav-link svg{width:12px;vertical-align:middle}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .nav-link:hover{color:#920e1b}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav{display:none;position:absolute;background:#fff;padding:10px;top:100%;width:230px;box-shadow:0 2px 7px -2px #000;z-index:9;right:0}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav ul{padding:0}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav ul li{list-style:none;text-align:left;padding:4px}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav ul li a{font-size:14px;color:#696a6c;text-decoration:none}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item .sub-nav ul li a:hover{color:#920e1b}.blog-page-header .header-nav-row .header-nav-items .nav-items .nav-item:hover .sub-nav{display:block!important}.hero-banner-sec{background:url(https://www.wcei.net/MediaLibraries/WCEI/WCEI/GettyImages-98818446_Edit-2.jpg);background-position:center;background-size:cover;background-repeat:no-repeat;padding:60px 0;position:relative}.hero-banner-sec:before{background:maroon;content:"";height:100%;width:100%;left:0;top:0;z-index:0;position:absolute;opacity:.6}.hero-banner-sec .hero-banner-row{max-width:798px;margin:0 auto;display:flex;z-index:1;position:relative}.hero-banner-sec .hero-banner-row .banner-col{width:65%;text-align:left}.hero-banner-sec .hero-banner-row .banner-col h1{margin:0;padding-top:0;color:#fff;font-size:34px}.hero-banner-sec .hero-banner-row .banner-col p{color:#fff;font-size:16px;line-height:1.4}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories{display:inline-block;position:relative;width:280px}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-btn{display:inline-block;background:#f5e3b5;margin-top:24px;cursor:pointer;width:100%}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-btn span{padding:10px 20px;font-size:16px;display:inline-block}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-btn span:after{content:"+";position:absolute;right:20px;font-size:18px;line-height:1}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog-content{display:none;position:absolute;width:100%;left:0;top:100%}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog{padding:12px;margin:2px 0 0;background:#fff;box-shadow:0 2px 7px -2px #000}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog li{list-style:none;padding:4px}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog li a{font-size:14px;color:#696a6c;text-decoration:none}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories .explore-blog li a:hover{color:maroon}.hero-banner-sec .hero-banner-row .banner-col .explore-blog-categories:hover .explore-blog-content{display:block}.blog-page-footer{clear:both;background:#485865;margin-bottom:-30px}.blog-page-footer .footer-row .footer-top-nav{display:flex;align-items:flex-start;padding:30px 0;max-width:798px;margin:0 auto}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items{display:flex}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col{text-align:left;padding-left:50px}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col span{text-transform:uppercase;font-size:16px;color:#fff;border-bottom:2px solid #fff;display:block;padding-bottom:10px}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col ul{padding:0}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col ul li{list-style:none;padding:4px 0}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col ul li a{color:#fff;font-size:13px;padding:4px 0;text-decoration:none}.blog-page-footer .footer-row .footer-top-nav .footer-nav-items .footer-col ul li a:hover{color:maroon}.blog-page-footer .footer-row .footer-copyright{max-width:798px;margin:0 auto}.blog-page-footer .footer-row .footer-copyright span{color:#fff;font-size:12px;padding:10px 0 20px;display:inline-block}.blog-page-footer .footer-row hr{display:block}#sidebar{margin:0!important}.related-post{margin:40px 0}.related-post .related-post-row h1{color:#920e1b;text-transform:uppercase;margin:0;padding:0;padding-bottom:20px;border-bottom:1px solid #920e1b;font-size:22px;font-family:roboto,sans-serif}.related-post .related-post-row .related-post-grid{padding:0;margin:30px 0 0;display:flex;justify-content:space-between;gap:40px}.related-post .related-post-row .related-post-grid .related-post-col{width:50%;margin:0;border-radius:4px;background:#f9f9f9;box-shadow:0 2px 8px -5px #000;position:relative}.related-post .related-post-row .related-post-grid .related-post-col:before{content:none}.related-post .related-post-row .related-post-grid .related-post-col .related-img img{height:100%;width:100%;display:block;border-radius:4px 4px 0 0}.related-post .related-post-row .related-post-grid .related-post-col .related-post-body{padding:20px}.related-post .related-post-row .related-post-grid .related-post-col .related-post-body .post-content{font-weight:600;margin:0 0 20px;line-height:1.4;padding-bottom:40px}.related-post .related-post-row .related-post-grid .related-post-col .related-post-body .read-post{display:inline-block;margin:0 0 20px 0;font-weight:600;color:#920e1b;position:absolute;bottom:0}.related-post .related-post-row .related-post-grid .related-post-col .related-post-body .read-post svg{width:12px;vertical-align:middle;background:#920e1b;border-radius:100px;display:inline-flex;height:12px;color:#fff;justify-content:center;padding-left:1px}#widgetized-signup-form>li{padding:30px 20px!important;background:#f5e3b4;border-radius:0;margin:40px 0 20px;border:none}#widgetized-signup-form>li .widgettitle{margin-top:0;line-height:1.3;font-family:roboto,sans-serif;margin-bottom:30px;text-align:center}#widgetized-signup-form>li .optin-form-wrapper form{display:flex;flex-wrap:wrap;font-family:roboto,sans-serif}#widgetized-signup-form>li .optin-form-wrapper form .mktoFormRow{width:50%}#widgetized-signup-form>li .optin-form-wrapper form .mktoFormRow .mktoFormCol{margin:0 10px;float:none}#widgetized-signup-form>li .optin-form-wrapper form .mktoFormRow .mktoFieldWrap{float:none}#widgetized-signup-form>li .optin-form-wrapper form .mktoFormRow .mktoFieldWrap .mktoLabel{margin-left:-10px!important}#widgetized-signup-form>li .optin-form-wrapper form .mktoFormRow .mktoFieldWrap select{height:34px}#widgetized-signup-form>li .optin-form-wrapper form .mktoFormRow input{border:none;margin-top:3px;padding-left:8px}#widgetized-signup-form>li .optin-form-wrapper form .mktoFormRow:nth-child(2n+2) .mktoFormCol{margin-left:0}#widgetized-signup-form>li .optin-form-wrapper form .mktoFormRow:nth-child(2n+1) .mktoFormCol{margin-right:0}#widgetized-signup-form>li .optin-form-wrapper form .mktoButtonRow{margin:0 21px 0 0;width:calc(50% - 10px)}#widgetized-signup-form>li .optin-form-wrapper+p{font-size:12px!important;line-height:1.4!important;margin-top:20px}.blog-category-page .blog-categoy-title{text-align:left;font-size:30px;font-family:roboto,sans-serif;border-bottom:4px solid #920e1b;padding-bottom:16px}.blog-category-page .post-thumbnail{margin-top:10px}.blog-category-page .post-thumbnail img{width:100%;height:100%}.blog-category-page .more-link span{font-weight:700}#sidebar .widget_search .widgettitle{text-align:center}#sidebar .widget_search input[type=text]{border:1px solid #000;padding:3px!important}#sidebar .widget_search #searchsubmit{background:maroon;border:none;padding:4px 10px;border-radius:0;color:#fff;cu
</style>

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