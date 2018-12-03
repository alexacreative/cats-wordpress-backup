<?php
/**
 * Theme: Flat Bootstrap Child
 * 
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package flat-bootstrap-child
 */
?>
	</div><!-- #content -->

	<?#php // Page bottom (before footer) widget area 
	// get_sidebar( 'pagebottom' ); 
	?>

	<?php // Start the footer area ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		
	

	<?php // Check for footer navbar (optional)
	global $xsbf_theme_options; 
	$nav_menu = null; 
	if ( function_exists('has_nav_menu') AND has_nav_menu( 'footer' ) ) {
		$nav_menu = wp_nav_menu( 
			array( 'theme_location' => 'footer',
			'container_div' 		=> 'div', //'nav' or 'div'
			'container_class' 		=> '', //class for <nav> or <div>
			'menu_class' 			=> 'list-inline dividers', //class for <ul>
			'walker' 				=> new wp_bootstrap_navwalker(),
			'fallback_cb'			=> '',
			'echo'					=> false, // we'll output the menu later
			'depth'					=> 1,
			) 
		);
		
	// If not, default one
	} elseif ( $xsbf_theme_options['sample_footer_menu'] ) {
		$nav_menu = '
		<div class="sample-menu-footer-container">
		<ul id="sample-menu-footer" class="list-inline dividers">
		<li id="menu-item-sample-1" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-sample-1"><a class="smoothscroll" title="'
		.__( 'Back to top of page', 'flat-bootstrap' )
		//.'" href="#page"><span class="fa fa-angle-up"></span> '
		.'" href="#page">';
		
		// Load a different up arrow icon, depending on what font icon set is loaded
		if ( wp_style_is( 'font-awesome', 'done' ) ) {
			$nav_menu .= '<span class="fa fa-angle-up"></span> ';
		} else {
			$nav_menu .= '<span class="glyphicon glyphicon-menu-up"></span> ';
		}
		$nav_menu .= __( 'Top', 'flat-bootstrap' )
		.'</a></li>';
		
		$nav_menu .= '<li id="menu-item-sample-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sample-2"><a title="'
		.__( 'Home', 'flat-bootstrap' )
		.'" href="' . get_home_url() . '">'
		.__( 'Home', 'flat-bootstrap' )
		.'</a></li>
		</ul>
		</div>';
	} //endif has_nav_menu()
?>

	<?php // Check for site credits (can be overriden in a child theme)
	$theme = wp_get_theme();
	$site_credits = sprintf( __( '<span class="credits-copyright">&copy; %1$s %2$s. </span><span class="credits-theme">Theme by %3$s.</span>', 'flat-bootstrap' ), 
		date ( 'Y' ),
		'<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>',
		'<a href="' . $theme->get( 'ThemeURI' ) . '" rel="profile" target="_blank">' . $theme->get( 'Author' ) . '</a>'
	);
	$site_credits = apply_filters( 'xsbf_credits', $site_credits );
 	?>
 	<div class="container-fluid" id="footer">
 		<div class="row">
 			<div class="col-md-4">
 				<h4 class="footer-headers">Contact Us</h4>
 				<h4 class="footer-headers">Terms &amp; Conditions</h4>
 				<h4 class="footer-headers">Seattle, WA</h4>
 				<h4 class="footer-headers">(206)456-9870</h4>
 				
 			</div>
 			<div class="col-md-4">
 				
 			</div>
 			<div class="col-md-4">
 				<i class="fab fa-instagram"></i>
 				<i class="fab fa-twitter"></i>
 			</div>
 			
 		</div>
 		<div class="row">
 			<div class="col-md-12">
 				<p class="text-center">&#169; 2018 Pawsitively Perfect | Site By Alexa Heitzenrader</p>
 			</div>
 		</div>
 		<!-- <div class="row footer-row">
 			<div class="col-md-2">
 				<i class="fab fa-instagram"></i>
 				<i class="fab fa-twitter"></i>
 				
 			</div>
 			<div class="col-md-2">
 				<div class="footer-left">
 				<h4 class="footer-headers">Contact Us</h4>
 				<h4 class="footer-headers">Terms &amp; Conditions</h4>
 				</div>
 			</div>
 			<div class="col-md-4">
 				
 			</div>
 			<div class="col-md-4">
 				
 					<p class="footer-right">Seattle, WA</p>
 					<p class="footer-right">(206)456-9870</p>
 					
 				
 			</div>
 		</div> -->
	</div>

	

<?php wp_footer(); ?>

</body>
</html>