<?php



/**



 * Template Name: Homepage Template



 *



 * This is the template that displays all pages by default.



 * Please note that this is the WordPress construct of pages and that



 * other "pages" on your WordPress site will use a different template.



 *



 * @package WordPress



 * @subpackage Twenty_Sixteen



 * @since Twenty Sixteen 1.0



 */







get_header(); ?>







<section id="banner" style="background-image:url(<?php the_field('background_image')?>);">



	<div class="my-container">



		<div class="content">



			<h1><?php the_field('banner_title')?></h1>



			<p><?php the_field('sub_title')?></p>



			<a href="<?php the_field('button_link')?>"><?php the_field('button_label')?></a>



		</div>



	</div>



</section>



<section id="section2">



	<div class="my-container">



		<h2><?php the_field('title2')?></h2>



		<p><?php the_field('content2')?></p>



	</div>



</section>



<div id="hp-sec3" class="my-anchor"> </div>



<section id="section3" class="serv-row serv-row--left-c">



	<div class="left">



		<div class="section-content">



			<div class="number"><?php the_field('number3')?></div>



			<div class="text-content">



			<h2><?php the_field('title3')?></h2>



			<p><?php the_field('content3')?></p>



			<a href="<?php the_field('button_link3')?>"><?php the_field('button_label3')?></a>



			</div>



		</div>



	</div>



		<div class="right" style="background-image: url('<?php the_field('image3')?>');">



		</div>



<div class="clear"></div>



</section>







<div id="hp-sec4" class="my-anchor" > </div>



<section id="section4" class="serv-row">



	<div class="left" style="background-image: url('<?php the_field('image4')?>');">



	</div>



	<div class="right">



		<div class="section-content">



			<div class="number"><?php the_field('number4')?></div>



			<div class="text-content">



			<h2><?php the_field('title4')?></h2>



			<p><?php the_field('content4')?></p>



			<a href="<?php the_field('button_link4')?>"><?php the_field('button_label4')?></a>



			</div>



		</div>



</div>



<div class="clear"></div>



</section>







<div id="hp-sec5" class="my-anchor"> </div>



<section id="section5" class="serv-row serv-row--left-c">



	<div class="left">



		<div class="section-content">



			<div class="number"><?php the_field('number5')?></div>



			<div class="text-content">



			<h2><?php the_field('title5')?></h2>



			<p><?php the_field('content5')?></p>



			<a href="<?php the_field('button_link5')?>"><?php the_field('button_label5')?></a>



			</div>



		</div>



	</div>



		<div class="right" style="background-image: url('<?php the_field('image5')?>');">



		</div>



<div class="clear"></div>



</section>







<div id="hp-sec-hidden" class="my-anchor"> </div>



<section id="section4" class="sec-hidden">



	<div class="left" style="background-image: url('<?php the_field('image_pole_hidden')?>');">



	</div>



	<div class="right">



		<div class="section-content">



			<div class="number"><?php the_field('number_pole_hidden')?></div>



			<div class="text-content">



			<h2><?php the_field('title_pole_hidden')?></h2>



			<p><?php the_field('contentpole_hidden')?></p>



			<a href="<?php the_field('button_pole_link_hidden')?>"><?php the_field('button_pole_hidden')?></a>



			</div>



		</div>



</div>



<div class="clear"></div>



</section>







<section id="section6">

	<div class="my-container">



		<div class="sec6-left">



			<h2> <?php the_field('sec6_heading'); ?> </h2>



			<p> <?php the_field('sec6_content'); ?> </p>



			<?php if(get_field('sec6_logo_list')): ?>



			<ul>



				<?php while(has_sub_field('sec6_logo_list')): ?>



					<li> <img src="<?php the_sub_field('logo_image'); ?>" /> </li>



				<?php endwhile; ?>



			</ul>



			<?php endif; ?>



		</div>



		<div class="sec6-right">



			<?php if(get_field('sec6_features_list')): ?>



			<ul>



				<?php while(has_sub_field('sec6_features_list')): ?>



					<li> <div class="image-icon-cont"><img src="<?php the_sub_field('icon'); ?>" /> </div> <p> <?php the_sub_field('text'); ?> </p> </li>



				<?php endwhile; ?>



			</ul>



			<?php endif; ?>



		</div>



	</div>



	<div class="clear"> </div>



</section>







<section id="section7" style=" ">



	<div class="sec7-left">



		<div class="sec7-testimonial" style=" visibility: hidden;
    height: 1px;
    overflow: hidden;">



			<h2 class="sec7-heading"> <?php the_field('sec7_testimonial_heading'); ?> </h2>



			<a href="<?php the_field('sec7_button_link'); ?>"> <?php the_field('sec7_button_label'); ?> </a>



			<div class="sec7-img-cont"> <img src="<?php the_field('sec7_quote_image'); ?> " /> </div>



			<?php the_field('sec7_testimonial'); ?> 



		</div>



		<div class="clear"> </div>



		<div id="sec-contact"class="sec7-contact">



		<h2 class="sec7-heading"> <?php the_field('sec7_contact_heading'); ?> </h2>



		<div class="inner-left">



		<p> <?php the_field('sec7_contact_text'); ?> </p>



		<a href="<?php the_field('sec7_contact_buttton_link'); ?>"> <?php the_field('sec7_contact_button_label'); ?> </a>



		</div>



		<div class="inner-right">



			<?php if(get_field('sec7_contact_list')): ?>



			<ul>



				<?php while(has_sub_field('sec7_contact_list')): ?>



					<li> <img src="<?php the_sub_field('icon'); ?>" /> <p> <?php the_sub_field('label'); ?> <span> <a href="<?php the_sub_field('contact_link'); ?>"><?php the_sub_field('contact'); ?> </a> </span> </p></li>



				<?php endwhile; ?>



			</ul>



			<?php endif; ?>



		</div>



		</div>



		<div class="clear"> </div>



	</div>



	<div class="sec7-right" style="background-image: url('<?php the_field('sec7_background_image'); ?>');">



		



	</div>



	<div class="clear"> </div>



</section>



<?php get_footer(); ?>