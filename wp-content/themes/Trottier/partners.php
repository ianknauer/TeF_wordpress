<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Partners
 *
 * @file           partners.php
 * @package        Trottier 
 * @author         Ian Knauer
 * @copyright      Ian Knauer
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/Trottier/Staff.php
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
     <h1 class="post-title"><?php the_title(); ?></h1>                                
         <div class="post-entry">
              <?php the_content(__('Read more &#8250;', 'responsive')); ?>
               <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->           
 
 
         <?php $i = 2;
   		 $user = get_user_by('id', $i); ?>
   		 <div id="author-meta">
            <div class="partner">
            <div class="partnerName">
	            				David Suzuki Foundation
	            			</div>

             <img src="http://davidsuzuki.org/images/trottier/DSF.jpg">
            <div class="partnerStats">
            	
            					          <div class="partnerJob">
        	<a href="http://www.davidsuzuki.org">www.davidsuzuki.org</a>
		</div> <!-- END .profileJob -->
	</div> <!-- END .profileStats -->
            	<div class="partnerText">            		
            	The David Suzuki Foundation works with government, business, and individuals to conserve our environment by providing science-based education, advocacy, and policy work, and acting as a catalyst for social change. Its mission is to protect the diversity of nature and our quality of life, now and for the future.
            	</div>
            	
</div> <!-- END .profile -->   
</div>

     <?php $i = 1;
     $user = get_user_by('id', $i); ?>
   		 <div id="author-meta">
            <div class="partner">
            <div class="partnerName">
	            				The Canadian Academy of Engineering

	            			</div>
	            			<img src="http://davidsuzuki.org/images/trottier/CAE.jpg">
	            			<div class="partnerStats">
            	
            				
	           <div class="partnerJob">
        	<a href="http://www.acad-eng-gen.ca/">http://www.acad-eng-gen.ca/</a>
		</div> <!-- END .profileJob -->
	</div> <!-- END .profileStats -->

            	<div class="partnerText">            		
            	<p>The Canadian Academy of Engineering is the institution through which Canada's most distinguished and experienced engineers provide strategic advice on matters of critical importance to Canada. The CAE is an independent, self-governing, non-profit organization established in 1987. It is a founding member of the Council of Canadian Academies. The CAE is also an active member of the International Council of Academies of Engineering and Technological Sciences, which includes 26 national bodies around the world.</p>
            	</div>
            	</div> <!-- END .profile -->   
</div>

     <?php $i = 3;
     $user = get_user_by('id', $i); ?>
   		<div id="author-meta">
            <div class="partner">
            	        <div class="partnerName">
	            				Trottier Family Foundation
	            			</div>
	            			<img src="http://www.trottierenergyfutures.ca/images/Trottier.jpg">
	            			 <div class="partnerStats">
	           <div class="partnerJob">
		</div> <!-- END .profileJob -->
	</div> <!-- END .profileStats -->

            	<div class="partnerText">            		
            	The Trottier Family Foundation was established by Lorne Trottier in 2000 to promote science, technology, education, health care, and third-world economic development. Lorne Trottier is the cofounder of Matrox, a world-renowned computer graphics, video, and imaging company headquartered in Montreal.
            	</div>
            	</div> <!-- END .profile -->   
</div>
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