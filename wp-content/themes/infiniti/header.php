<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package infiniti
 */
global $post;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0" />
	<title><?php echo get_bloginfo( 'name' )." ".get_bloginfo('description'); ?></title>
	<meta name="google-site-verification" content="oPjrIiO6Jxjc7z7CjObPGJRq96mrbuUmn1DuPuVO0jY" />

    <meta property="og:url" content="http://canadaundiscovered.infiniti.ca/"/> 
    <meta property="og:title" content="INFINITI & OASIS Present Canada Undiscovered!"/>
    <meta property="og:site_name" content="INFINITI & OASIS Present Canada Undiscovered!"/>
    <meta property="og:description" content="The Infiniti #CanadaUndiscovered gives you the chance to see awesome spots Canada offers that aren't on the postcards!"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="<?php echo get_bloginfo('template_url').'/CU_FB_Share.jpg' ?>"/>
    <meta property="og:locale" content="en_us"/>

	<?php wp_head(); ?>
	<?php 
		if(strtolower ($post->post_title) == "contest"){?>
	<?php	}
	?>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '904625116233059',
				xfbml      : true,
				version    : 'v2.1'
				});
			};

			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
</script>
	<div id="page" class="hfeed site">
		

		<div id="masthead" class="site-header" role="banner">
			<div class="mob_nav_header clearfix">
				<div class="ham_nav"><img src="<?php echo get_stylesheet_directory_uri().'/images/mob_menu_hamburger.png'; ?>" alt="mobile hamburger button"></div>
				<div class="mob_brand"><a href="<?php echo  get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/images/mob_site_branding.png'; ?>" alt="Infiniti and Oasis present Canada Undescovered!"></a></div>
			</div>
			<div id="mobile_nav" class="mobile_nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				<div id="infiniti_link">
					<div class="top_level">
						<a href="http://www.infiniti.ca/en/" target="_blank">Explore the infiniti model range</a>
					</div>
				</div>
				<?php get_template_part( "navigation", "social_channels" ); ?>
			</div>
		</div>

		<div id="content" class="site-content">
			<ul class="social_share">
		      <li id="facebook" class="socialBtns"></li>
		      <li class="socialBtns twitter"><a id="twitter" target="_blank" href="https://twitter.com/intent/tweet?url=http://canadaundiscovered.infiniti.ca/&amp;text=Canada’s+hidden+gems+are+some+of+the+most+spectacular+spots+in+the+world.&amp;hashtags=CanadaUndiscovered,CanadaUndiscovered"></a></li>
		    </ul>
