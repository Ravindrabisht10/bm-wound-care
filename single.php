<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>
            <p class="grey">Published on <?php echo get_the_date(); ?> by <?php the_author(); ?></p>
			<div class="entry">
                <?php
                // post featured image
                if (has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                <?php endif;

                // post content
				the_content('<p class="serif">Read the rest of this entry &raquo;</p>');

				// post CTA (set custom field option in post using the key)
                if (get_post_meta($post->ID, 'cta_option_1')) :
                    echo get_post_meta($post->ID, 'cta_option_1', true);
                elseif (get_post_meta($post->ID, 'cta_option_2')) :
                    echo get_post_meta($post->ID, 'cta_option_2', true);
                elseif (get_post_meta($post->ID, 'cta_option_3')) :
                    echo get_post_meta($post->ID, 'cta_option_3', true);
                elseif (get_post_meta($post->ID, 'cta_option_4')) :
                    echo get_post_meta($post->ID, 'cta_option_4', true);
                elseif (get_post_meta($post->ID, 'cta_option_5')) :
                    echo get_post_meta($post->ID, 'cta_option_5', true);
                endif;

                // post author card

                // check if WP User Avatar is active
                $pluginList = get_option( 'active_plugins' );
                $WPUserPlugin = 'wp-user-avatar/wp-user-avatar.php';
                if (in_array( $WPUserPlugin , $pluginList )) :
                    // capture author info
                    $author_ID = get_the_author_meta('ID');
                    $author_name = get_the_author_meta('display_name');
                    $author_photo = get_wp_user_avatar(get_the_author_meta($author_ID));
                    $author_description = get_the_author_meta('description');
                    ?>
                    <div class="author-card">
                        <div class="author-image">
                            <?php echo $author_photo; ?>
                        </div>
                        <div class="author-bio">
                            <h3><?php echo $author_name; ?></h3>
                            <p><?php echo $author_description; ?></p>
                        </div>
                    </div>
                <?php endif;

                // Facebook comments shortcode
                $FBCommentsPlugin = 'facebook-comment-by-vivacity/fb-comments.php';
                if (in_array( $FBCommentsPlugin , $pluginList )) :
                    echo do_shortcode('[vivafbcomment]');
                endif;

                // post social links
                $post_ID = get_the_id();
                $social_args = array(
                    'buttons' => 'facebook,linkedin,twitter',
                    'id' => $post_ID,
                );

                if (function_exists('social_warfare')) :
                    social_warfare( $social_args );
                endif;

                // post pagination
                wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
				the_tags( '<p>Tags: ', ', ', '</p>');

				?>



			</div>
            <ul id="widgetized-signup-form">
            <?php 	/* Widgetized sidebar, if you have the plugin installed. */
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
            <?php endif; ?>
            </ul>

		</div>



	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
