<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.1
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
    </div><!-- end of #wrapper -->
    <?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div class="push"></div>
        </div>
        
<div id="footer-bottom" class="clearfix">

    <div id="footer-wrapper">
        
        
        	
   
        
        <div class="grid col-540">
		<?php if (has_nav_menu('footer-menu', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'footer-menu',
					'theme_location'  => 'footer-menu')
					); 
				?>
         <?php } ?>
         </div><!-- end of col-540 -->
         
         <div class="grid col-380 fit">
         <?php $options = get_option('responsive_theme_options');
					
            // First let's check if any of this was set
		
                        ?>
         </div><!-- end of col-380 fit -->
         
         </div><!-- end of col-940 -->
                
        <div class="grid col-300 copyright">
            <a href="privacy-policy" style="color: #fff!important">Privacy Policy | <a href="site-map" style="color: #fff!important">Site Map</a>
        </div><!-- end of .copyright -->
        
        <div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>
        
        <div class="grid col-300 fit powered">
            <?php esc_attr_e('&copy;', 'responsive'); ?> <?php _e(date('Y')); ?>
                <?php bloginfo('name'); ?>
            </a>
        </div><!-- end .powered -->
        
    </div><!-- end #footer-wrapper -->
    
</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>