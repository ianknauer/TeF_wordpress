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
<?php
    if ( get_query_var('paged') )
	    $paged = get_query_var('paged');
	elseif ( get_query_var('page') ) 
	    $paged = get_query_var('page');
	else 
		$paged = 1;
		query_posts("post_type=post&paged=$paged&cat=27"); 
?> 
     
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" class="posttitle" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
                
                <div class="post-meta">
                <?php 
                    printf( __( '<span class="%1$s">Posted on</span> %2$s', 'responsive' ),'meta-prep meta-prep-author',
		            sprintf( '%3$s',
			            get_permalink(),
			            esc_attr( get_the_time() ),
			            get_the_date()
		            ),
		            sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			            get_author_posts_url( get_the_author_meta( 'ID' ) ),
			        sprintf( esc_attr__( 'View all posts by %s', 'responsive' ), get_the_author() ),
			            get_the_author()
		                )
			        );
		        ?>
                </div><!-- end of .post-meta -->
                
                <div class="post-entry">
                    <?php if ( has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>
                        </a>
                    <?php endif; ?>
                    <?php the_excerpt(); ?>
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->
                
                          

                      
            </div><!-- end of #post-<?php the_ID(); ?> -->
            <hr></hr>
            
        <?php endwhile; ?> 
       <?php else : ?>

        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
        <h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>"><?php _e( '&larr; Home', 'responsive' ); ?></a> <?php _e( 'or search for the page you were looking for', 'responsive' ); ?></h6>
        <?php get_search_form(); ?>
        
<?php endif; ?>  
      
        </div><!-- end of #content -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>