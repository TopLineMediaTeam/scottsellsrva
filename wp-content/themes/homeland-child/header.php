<?php
	//Header Variables

	$homeland_site_layout = esc_attr( get_option('homeland_site_layout') );
	$homeland_favicon = esc_attr( get_option('homeland_favicon') );
	$homeland_enable_slide_bar = esc_attr( get_option('homeland_enable_slide_bar') );
	$homeland_theme_layout = esc_attr( get_option('homeland_theme_layout') );
	$homeland_sticky_header = esc_attr( get_option('homeland_sticky_header') );
	$homeland_theme_header = esc_attr( get_option('homeland_theme_header') );
	$homeland_disable_preloader = esc_attr( get_option('homeland_disable_preloader') );
	$homeland_hide_header_image = esc_attr( get_option('homeland_hide_header_image') );
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php
	if(empty( $homeland_site_layout )) : ?><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /><?php endif;
?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<?php 
	if(empty( $homeland_favicon )) : ?><link rel="shortcut icon" href="http://themecss.com/img/favicon.ico" /><?php
	else : ?><link rel="shortcut icon" href="<?php echo $homeland_favicon; ?>" /><?php
	endif;
?>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=169397769880403";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body <?php body_class(); ?>>
    
     <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=169397769880403";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<?php if(empty($homeland_disable_preloader)) : ?> <div id="preloader"><div id="status">&nbsp;</div></div> <?php endif; ?>

	<?php
		if(!empty( $homeland_enable_slide_bar )) : ?>
			<!--SLIDING BAR-->
			<div class="top-toggle">
				<div class="sliding-bar">
					<div class="inside clear">
						<div class="header-widgets">
							<?php
								if ( is_active_sidebar( 'homeland_sliding_bar' ) ) : dynamic_sidebar( 'homeland_sliding_bar' );
								else : _e( 'Please add sliding bar widget here...', 'codeex_theme_name' );
								endif;
							?>	
						</div>
					</div>
				</div>
				<a href="#" class="slide-toggle">&nbsp;</a>
			</div><?php
		endif;
	?>
	
	<!--CONTAINER-->
	<?php
		$homeland_theme_class_header = "";
		$homeland_theme_class_header_container = "";
		$homeland_theme_class_hide_header_image = "";

		if($homeland_theme_layout =="Boxed") : 
			$homeland_theme_class_main = "container-boxed";
		elseif($homeland_theme_layout =="Boxed Left") :
			$homeland_theme_class_main = "container-boxed-left";
		else :
			$homeland_theme_class_main = "container";
		endif;

		if(!empty($homeland_sticky_header)) : 
			$homeland_theme_class_header_container = "sticky-header";
			if( $homeland_theme_header == "Header 2" ) : 
				$homeland_theme_class_header = "sticky-header2-container";
			else :
				$homeland_theme_class_header = "sticky-header-container";
			endif;
			if( $homeland_theme_header == "Header 6" ) : 
				$homeland_theme_class_header = "sticky-header-container sticky-header-six";
			endif;
		endif;

		if( $homeland_theme_header == "Header 4" ) : 
			$homeland_theme_class_header = "transparent-header";
			$homeland_theme_class_header_container = "sticky-header";
		endif;

		if(!empty($homeland_hide_header_image)) :
			$homeland_theme_class_hide_header_image = "hidden-header-image";
		endif;
	?>
	<div id="<?php echo $homeland_theme_class_main; ?>" class="<?php echo $homeland_theme_class_header; ?>">
		<header class="<?php echo $homeland_theme_class_header_container; ?> <?php echo $homeland_theme_class_hide_header_image; ?>">		
			<?php
				if( $homeland_theme_header == "Header 2") : ?>					
					<div class="inside clear">
						<?php 
							homeland_theme_logo(); //modify function in "includes/lib/custom-functions.php"...
							homeland_theme_menu(); //modify function in "includes/lib/custom-functions.php"...
						?>				
					</div><?php	
				elseif( $homeland_theme_header == "Header 3") : ?>					
					<div class="inside clear">
						<?php 
							homeland_theme_logo(); //modify function in "includes/lib/custom-functions.php"...
							homeland_theme_menu(); //modify function in "includes/lib/custom-functions.php"...
						?>				
					</div>
					<section class="header-block header-three">
						<div class="inside clear">
							<?php 
								homeland_social_share_header(); //modify function in "includes/lib/custom-functions.php"...
								homeland_call_info_header(); //modify function in "includes/lib/custom-functions.php"...
							?>								
						</div>
					</section><?php	
				elseif( $homeland_theme_header == "Header 4" ) : ?>
					<div class="inside clear">
						<?php 
							homeland_theme_logo(); //modify function in "includes/lib/custom-functions.php"... 
							homeland_theme_menu(); //modify function in "includes/lib/custom-functions.php"...
						?>				
					</div><?php	
				elseif( $homeland_theme_header == "Header 5") : ?>			
					<section class="header-block header-five">
						<div class="inside clear">
							<?php 
								homeland_call_info_header(); //modify function in "includes/lib/custom-functions.php"...
								homeland_social_share_header(); //modify function in "includes/lib/custom-functions.php"...
							?>								
						</div>
					</section>		
					<div class="inside clear">
						<?php 
							homeland_theme_logo(); //modify function in "includes/lib/custom-functions.php"...
							homeland_theme_menu(); //modify function in "includes/lib/custom-functions.php"...
						?>				
					</div><?php	
				elseif( $homeland_theme_header == "Header 6") : ?>
					<div class="header-six">
						<div class="inside clear">
							<?php 
								homeland_call_info_header(); //modify function in "includes/lib/custom-functions.php"...
								homeland_social_share_header(); //modify function in "includes/lib/custom-functions.php"...
							?>								
						</div>
						<?php
							homeland_theme_logo(); //modify function in "includes/lib/custom-functions.php"...
							homeland_theme_menu(); //modify function in "includes/lib/custom-functions.php"...
						?>
					</div><?php	
				else : ?>
					<section class="header-block">
						<div class="inside clear">
							<?php 
								homeland_social_share_header(); //modify function in "includes/lib/custom-functions.php"...
								homeland_call_info_header(); //modify function in "includes/lib/custom-functions.php"...
							?>								
						</div>
					</section>
					<div class="inside clear">
						<?php 
							homeland_theme_logo(); //modify function in "includes/lib/custom-functions.php"... 
							homeland_theme_menu(); //modify function in "includes/lib/custom-functions.php"...
						?>				
					</div><?php	
				endif;
			?>
		</header>

		<!--TITLE-->
		<?php 
			if(empty($homeland_hide_header_image)) : homeland_header_image(); endif; //modify function in "functions.php"...
			homeland_template_page_link(); //modify function in "functions.php"...
			homeland_property_terms(); //modify function in "functions.php"...
		?>

