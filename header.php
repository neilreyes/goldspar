<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".sec-hidden").addClass("sec-show");
		 $(".show-btn").addClass("btn-hide");
    });
});
</script>

<script language="javascript" type="text/javascript">
window.onscroll = function() {myFunction()};
function myFunction() {
	var topHeader = document.querySelector('#top-header');
	var scrollPoint = topHeader.offsetHeight;

    if (document.body.scrollTop > scrollPoint || document.documentElement.scrollTop > scrollPoint) {
        document.body.classList.add("fixedit");
    } else {
        document.body.classList.remove("fixedit");
    }

    return scrollPoint;
}
</script>

</head>

<body <?php body_class(); ?>>
<header id="header">
  <div id="top-header">
		<div class="my-container">
			<ul>
				<li><a href="mailto:<?php the_field('email','option')?>"><i class="fa fa-envelope-o"></i> <?php the_field('email','option')?></a></li>
				<li><a href="tel:<?php the_field('contact_number','option')?>"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>
 <?php the_field('contact_label','option')?></a></li>
			</ul>
			<div class="clear"></div>
		</div>
  </div>
  <div id="main-header">
	<div class="my-container">
		<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('logo','option')?>"></a>
		</div>	
		<div class="main-menu">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
						</nav><!-- .main-navigation -->
<div class="btn-request"><a href="<?php the_field('button_link','option')?>"><?php the_field('button_label','option')?></a></div>
	
						<?php endif; ?>

		</div>
<div class="clear"></div>
</div>
  </div>	
</header>