<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  The Challenges
 *
 * @file           The-Challenges.php
 * @package        Responsive 
 * @author         Ian Knauer
 * @copyright      Ian Knauer
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/Trottier/The_Challenges.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>


        <div id="content" class="grid col-960">
        <h1 class="economy">Decarbonizing the Canadian Economy</h1>
        <p class="show" style="padding-left: 70px;">
        The Trottier Energy Futures Project has identified 11 key challenges to be addressed on the road to a sustainable, low-carbon future. Each of the challenges expands the range of low-carbon solutions and helps build a deeper understanding of how Canadians can get the energy services they want and need, with drastically lower greenhouse gas emissions.
        </p>
        <br /><br />
        
<?php $this_page_id=$wp_query->post->ID; ?>

    	<?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page', 'order' => 'ASC')); while (have_posts()) { the_post(); ?>

            <div class="subpage-img" style="padding-left: 50px;">

                <?php if ( get_post_meta($post->ID, "post-img", true) ) { ?>

                    <a href="<?php the_permalink(); ?>"></a>

                   <?php the_title(); ?></h3></strong>

                <?php } else { ?>

                <p style="padding-left: 20px;"> <a href="<?php the_permalink(); ?>"> <strong style="color: #009CCB!important;"><em><h4><?php the_title(); ?></a></strong></em></h4>
                <p class="show"><?php the_excerpt(); ?></p>
                
                <hr>

                <?php } ?>
                

            <!-- closes subpage-img -->
            </div>

        <?php } ?>      
        </div><!-- end of #content -->

<?php get_sidebar('right-challenge'); ?>
<?php get_footer(); ?>