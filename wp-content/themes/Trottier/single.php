<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        Trottier 
 * @author         Ian Knauer 
 * @copyright      Ian Knauer
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/Trottier/single.php
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="content" class="grid col-960">
             
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
        <?php $options = get_option('responsive_theme_options'); ?>
		          
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                           <h1 class="post-title"><?php the_title(); ?></h1> 
                 <?php 
                    printf( __( '<span class="%1$s"></span> %2$s', 'responsive' ),'meta-prep meta-prep-author',
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
		     	   <?php if (! in_category('27')) : ?>                 
          
                 <?php if ( has_post_thumbnail()) : ?>
                      
                    <?php the_post_thumbnail('home-thumbnail'); ?>
                        
                        <?php the_post_thumbnail_caption(); ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    

                                
                <div class="post-entry">
                    <?php the_content(__('Read more &#8250;', 'responsive')); ?>
                    
                    
                    <?php if (! in_category('27')) : ?>
                    
                    
                                       <?php if ( get_the_author_meta('description') != '' ) : ?>
                    
                    <div id="author-meta">
                       <div class="profile">
	<div class="profileText">
		<?php the_author_meta('description'); ?>
	</div> <!-- END .profileText -->
	<div class="profileStats">
		<?php if (function_exists('get_avatar')) { echo userphoto_the_author_thumbnail(); }?>
		<div class="profileName">
			<?php the_author_posts_link(); ?> 
		</div> <!-- END .profileName -->
		<div class="profileJob">
		<!-- twitter follow hide 
<div class="follow">Follow <?php the_author_meta('first_name'); ?> on <a href="http://www.twitter.com/<?php the_author_meta('twitter'); ?>" title="Twitter name: <?php the_author_meta('twitter'); ?>">Twitter</a></div>-->
		</div> <!-- END .profileJob -->
	</div> <!-- END .profileStats -->
</div> <!-- END .profile -->   
                    </div>                 
                    <?php endif; // no description, no author's meta ?>
 
              <?php endif; ?>
                
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->                
                <div class="post-meta">
               				</div><!-- end of .post-meta -->              
	                   
	                   <?php if (! in_category('27')) : ?>                  
                    	<div id="metaHideContainer">
                    	<div class="hider">
	                    	<a href="#" title="show and hide comments">Comments &darr;</a>
	                    </div>  
                    	
	                    <div id="metaHide">
               
			<?php comments_template( '', true ); ?>
			</div><!-- END #metaHide -->
</div><!-- END #metaHideContainer--> 
 <?php endif; ?>
            
        <?php endwhile; ?> 
	    <?php else : ?>

        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
        <h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>"><?php _e( '&larr; Home', 'responsive' ); ?></a> <?php _e( 'or search for the page you were looking for', 'responsive' ); ?></h6>
        <?php get_search_form(); ?>

<?php endif; ?>  
<?php if ($options['breadcrumb'] == 0): ?>
		<?php echo responsive_breadcrumb_lists(); ?>
        <?php endif; ?> 

      
        </div><!-- end of #content -->

<?php get_sidebar('right-blog'); ?>
 <?php if (! in_category('27')) : ?> 
 <?php get_sidebar('right-half'); ?>
  <?php endif; ?> 
 <?php get_footer(); ?>