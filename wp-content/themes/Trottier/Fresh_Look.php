<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Fresh Look
 *
 * @file           Fresh_look.php
 * @package        Trottier 
 * @author         Ian Knauer
 * @copyright      Ian Knauer
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/Trottier/the-challenges.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>


        <div id="content" class="grid col-960">
        <h2 class="post-title" style="font-size: 2em;">A Fresh Look At Energy</h1>
         <p class="show" style="padding-left: 50px;">
           <img src="http://www.ianknauer.net/DSFWork/wordpress/wp-content/uploads/2013/01/forest.jpg" alt="forst" width="577" height="366" class="alignnone size-full wp-image-291" />
        </p>
        
        
        
<?php $this_page_id=$wp_query->post->ID; ?>

    	<?php query_posts(array('showposts' => 2, 'post_parent' => $this_page_id, 'post_type' => 'page', 'order' => 'ASC')); while (have_posts()) { the_post(); ?>

            <div class="subpage-img" style="padding-left: 50px;">

                <?php if ( get_post_meta($post->ID, "post-img", true) ) { ?>

                    <a href="<?php the_permalink(); ?>"></a>

                   <?php the_title(); ?></h3></strong>

                <?php } else { ?>
                               <div id="challenges-text" style="padding-left: 0px;">
                <p style="padding-left: 20px;"> <a href="<?php the_permalink(); ?>"> <strong style="color: #009CCB!important; font-size: 0.8em"><em><h4><?php the_title(); ?></a></strong></em></h4>
                <p class="show" style="margin: 0;"><?php the_excerpt(); ?> <a  style= "float:right; " href="<?php the_permalink(); ?>">Read more</a></p>
                </div>
                
                <hr>

                <?php } ?>
                

            <!-- closes subpage-img -->
            </div>

        <?php } ?>      
        </div><!-- end of #content -->

<?php get_sidebar('right-challenge'); ?>
<?php get_footer(); ?>