<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page
 *
Theme Name: Trottier
Theme URI: URI to your theme
Description: Child theme for responsive, for the Trottier Energy Futures
Author: Ian Knauer
Version: 0.0.1
Template: responsive
@filesource     wp-content/themes/Trottier/Home.php
Tags: white, black, gray, light, custom-menu, custom-header, custom-background, one-column, two-columns, left-sidebar, right-sidebar, flexible-width, theme-options, threaded-comments, full-width-template, sticky-post, translation-ready
 */
?>

<?php get_header(); ?>

<?php get_sidebar('right-challenge'); ?>

  
   <div id="featured" class="grid col-940">
        <h1 class="economy">Decarbonizing the Canadian Economy</h1>
<p class="show"> <img src="http://www.ianknauer.net/DSFWork/wordpress/wp-content/uploads/2013/01/family-kite-shutterstock.jpg" style="float:left; padding-right: 20px;" width="300px">The Trottier Energy Futures Project (TEFP) is a research and modeling effort to determine how Canada can dramatically reduce its emissions of the greenhouse gas (GHG) emissions that are the primary cause of <a href="http://www.davidsuzuki.org/issues/climate-change/">global climate change</a>.</p>
<p class="show">
Over the last several years, the increased frequency of severe weather disasters and other early signs of warming have drawn attention to climate change as one of the most serious challenges facing humanity. Communities, businesses, and nations around the world are scrambling to adapt. 
</p>
<p class="show">
But over the longer term, the only way to stabilize the climate is to reduce atmospheric concentrations of the greenhouse gases (GHGs), primarily carbon dioxide, that cause climate change. The best scientific evidence points to the need for an 80% reduction in industrialized nations’ GHG emissions by 2050, using 1990 levels as a baseline.
</p>
<p class="show">
Fossil fuel production (oil, natural gas, and coal) accounts for 82% of Canada’s emissions. The energy sector is also a cornerstone of the economy, widely credited with protecting the country from the worst of the global recession. In charting a path to a low-carbon, sustainable energy future, the Trottier Project is modeling a Canadian economy that shows steady economic and population growth, but reduces emissions from 500 megatonnes (million tonnes, or Mt) in 1990 to 100 Mt in 2050. Without a deliberate carbon reduction plan, 2050 emissions would exceed 700 Mt.</p>
<p class="show">
<a href="cutting-greenhouse-gases/">How will we get there?</a><br/>
<a href="a-fresh-look-at-energy/#emissions">Where do Canada’s emissions come from?</a> <br />
<a href="a-fresh-look-at-energy/#demand">Where does energy demand come from?</a>

</p>
   </div>


   <div id="featured" class="grid col-940">
<?php       
query_posts('showposts=1&cat=-27');

// The Loop
while ( have_posts() ) : the_post();
	get_permalink();
	echo ' <div id="featured-image" class="grid col-380" style="float: left; padding-right: 12px;">';  
        echo '<a href="';
	the_permalink();
	echo '">';
		the_post_thumbnail();
		echo '</a>';                                
         echo '</div>';
	echo '<h1 class="economy">';
	echo 'Latest Blog';
	echo '</h1>';
	
	echo '<h1 class="economy" style="font-style: italic;">';
	echo '<a href="';
	the_permalink();
	echo '">';
	the_title();
	echo '</a>';
	echo '</h2>'; 
	echo '<h2 class="featured-subtitle">'; 
	the_author();
	echo '</h2>';
	echo '<p>'; 
	the_excerpt();
	echo '</p>'; 

         
         endwhile;
// Reset Query
wp_reset_query();
?>    
    
   </div>
     <div id="featured2" class="grid col-940" style="width: 25%; min-height: 241px">
      <h1 class="economy" style=" padding-left: 10px!important; padding-right: 10px!important; margin-bottom: 0px!important; padding-bottom: 13px;">News</h1>
      <?php       
query_posts('showposts=1&cat=27');

// The Loop
while ( have_posts() ) : the_post();
	get_permalink();
	echo ' <div id="featured-image" class="grid col-380" style="float: left; padding-right: 12px; margin-top: 0px; margin-left: 10px; margin-right: 10px;">';  
        echo '<a href="';
	the_permalink();
	echo '">';
		the_post_thumbnail();
		echo '</a>';                                
         echo '</div>';
	echo '<p class="news" style="font-style: italic; padding-left: 10px; margin-bottom: 5px;">';
	echo '<a  href="';
	the_permalink();
	echo '">';
	the_title();
	echo '</a>';
	echo '</p>'; 
	

         
         endwhile;
// Reset Query
wp_reset_query();
?>    

     </div>
     
        <div id="featured" class="grid col-940" style="width: 24%; margin-left: 8px; padding-bottom: 10px!important;">
<p class="quote" style="font-style: italic; font-style: italic; padding-left: 10px!important; padding-right: 10px!important; margin-bottom: 0px!important;">"Energy poses big challenges for Canada in the 21st century in terms of supply, environmental sustainability, climate change, and economics. The Canadian Academy of Engineering and the David Suzuki Foundation, two highly respected organizations, bring different but complementary perspectives to the challenge."
</p>
<p class="" style="float:left; padding-left: 10px; font-weight: bold; font-size: 1em; color: #FF8100; font-style: italic; margin-bottom: 10px;">LORNE TROTTIER, <br />FCAE</p>
  </div> 

     <div id="featured" class="grid col-940" style="width: 24%; margin-left: 8px; min-height: 241px; padding-bottom: 10px;">
     <h1 class="economy" style="padding-left: 10px!important; padding-right: 10px!important; margin-bottom: 0px!important;">The Challenges</h1>
      <img src="http://www.ianknauer.net/DSFWork/wordpress/wp-content/uploads/2013/01/daisy_wheel_home.jpg" alt="daisy_wheel" width="100" height="64" class="alignnone size-full wp-image-291" style="padding-left: 60px; padding-top:15px; margin: 0;" />
<p class="quote" style=" font-style: italic; padding-left: 10px!important; padding-right: 10px!important; margin-bottom: 0px!important; padding-bottom: 10px;">The Trottier Energy Futures Project has identified 11 key challenges to be addressed on the road to a sustainable, low-carbon future. <br /><br /><a href="the-challenges"><strong>Find out more</strong></a>
</p>

  
           
  

        
<!-- end of #content-full -->

<?php get_sidebar('right-challenge'); ?>

<?php get_footer(); ?>