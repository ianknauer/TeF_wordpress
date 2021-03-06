<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  The Challenge
 *
 * @file           Challenge.php
 * @package        Responsive 
 * @author         Ian Knauer
 * @copyright      Ian Knauer
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/Trottier/Challenge.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="content-full" class="grid col-940">
        
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
        <?php $options = get_option('responsive_theme_options'); ?>
		
        
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="post-title" style="font-size: 2em;"><?php the_title(); ?></h1>                                
                <div class="post-entry">
                    <?php the_content(__('Read more &#8250;', 'responsive')); ?>
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->           
                            
           <?php if ($options['breadcrumb'] == 0): ?>
		<?php echo responsive_breadcrumb_lists(); ?>
        <?php endif; ?>
            </div><!-- end of #post-<?php the_ID(); ?> -->         
        <?php endwhile; ?> 
        
       

	    <?php else : ?>

        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
        <h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>"><?php _e( '&larr; Home', 'responsive' ); ?></a> <?php _e( 'or search for the page you were looking for', 'responsive' ); ?></h6>
        <?php get_search_form(); ?>

<?php endif; ?>       
</div><!-- end of #content-full -->

<?php get_sidebar('right-challenge'); ?>
<?php get_footer(); ?>