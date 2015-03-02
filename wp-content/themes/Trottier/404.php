<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * News Template Template
 *
 *
 Template Name:  News
Theme Name: Trottier
Theme URI: URI to your theme
Description: Child theme for responsive, for the Trottier Energy Futures
Author: Ian Knauer
Version: 0.0.1
@filesource     wp-content/themes/Trottier/news.php
Template: responsive
Tags: white, black, gray, light, custom-menu, custom-header, custom-background, one-column, two-columns, left-sidebar, right-sidebar, flexible-width, theme-options, threaded-comments, full-width-template, sticky-post, translation-ready
 */
?>
<?php get_header(); ?>

        <div id="content" class="grid col-960">
        
        

            
       
        <h1 ><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
        <h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>">home</a> or Contact us at <a href="mailto:info@trottierenergyfutures.ca">info@trottierenergyfutures.ca</a>  
          
      
        </div><!-- end of #content -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>