 <?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<hr />
<div id="footer">
	<div id="footer_copy">&copy; <?php echo date('Y'); ?> Wound Care Education Institute</div>

	<div id="footer_links">
		<a href="https://www.wcei.net">Home</a> /
		<a href="https://www.wcei.net/about/about-wcei">About WCEI</a> /
		<a href="https://www.wcei.net/courses">Course Info</a> /
		<a href="https://www.wcei.net/faq">FAQs</a> /
		<a href="https://www.wcei.net/contact-us">Contact Us</a>
		<!-- <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> -->
	</div>
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
</div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($){
        jQuery(document).on('OptinMonsterInit', function(event, data, object) {
            object.setProp('debug', true);
        });
    });
</script>
<?php wp_footer(); ?>


 </body>
</html>
