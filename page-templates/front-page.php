<?php
/**
* Custom front-page.php template
*
* Displays the homepage of the portfolio site
*
* */

// get the options
$slider_category = reactor_option('frontpage_slider_category', ''); ?>

<?php get_header(); ?>

	<div id="primary" class="site-content">
    
    	<?php reactor_content_before(); ?>
  
        <div class="row">
          	<div class="<?php reactor_columns( 12 ); ?>">

            </div><!-- .columns -->
        </div><!-- .row -->
  
        <div id="content" role="main">
        	<div class="row">        
                <div class="<?php reactor_columns(); ?>">
                
                
                </div><!-- .columns -->

            </div><!-- .row -->
        </div><!-- #content -->
        
        
        
	</div><!-- #primary -->


