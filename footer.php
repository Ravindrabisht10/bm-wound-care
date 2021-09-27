 <?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<hr />
</div>


<footer class="blog-page-footer">
   <div class="footer-row">
	   <div class="footer-top-nav">
		<div class="footer-logo">
			<a href="<?php echo site_url(); ?>">
				<img src="https://www.wcei.net/MediaLibraries/WCEI/WCEI/Design/WoundCare_Logo_RGB_with_endorser.png"/>
			</a>
		</div>
		<div class="footer-nav-section">
          <div class="footer-nav-items">
			<div class="footer-col">
				<span>Explore blog</span>
				<ul>
				   <li><a href="<?php echo site_url(); ?>/category/specialties/skin-wound-management">Skin and Wound Management</a></li>
				   <li><a href="<?php echo site_url(); ?>/category/specialties/diabetic-wound-management">Diabetic Wound Management</a></li>
				   <li><a href="<?php echo site_url(); ?>/category/specialties/nutrition-wound-management">Nutrition Wound Management</a></li>
				   <li><a href="<?php echo site_url(); ?>/category/specialties/ostomy-management">Ostomy Management</a></li>
				</ul>
			</div>
			<div class="footer-col">
		    	<span>About us</span>
				<ul>
				   <li><a href="">About WECI</a></li>
				   <li><a href="">Wound Care Certificate Course</a></li>
				   <li><a href="https://www.wcei.net/contact-us">Contact</a></li>
				</ul>
			</div>
		  </div>
		</div>
       </div>
	   <hr>
	   <div class="footer-copyright">
		   <span class="copyright">&copy;2021 Wound Care Education Institute</span>
	   </div>
   </div>
</footer>




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
