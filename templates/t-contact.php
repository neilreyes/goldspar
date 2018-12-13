<?php

/**

 * Template Name: Contact Page Template

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



<?php

	$home_ID = 20;

	$bg_image = get_field('contactpage_herobanner');

	//$contact_details = get_field('c_contact_details');

?>



<section id="banner" style="background-image:url(<?php echo $bg_image['url'];?>);">

	<div class="my-container">

		<div class="content">

			<h1><?php the_field('contactpage_title')?></h1>

			<p><?php the_field('contactpage_description')?></p>

		</div>

	</div>

</section>





<section id="main">

	<div class="my-container">

		<div class="content">

			<div class="introduction">

				<p class="dg-lead"><?php the_field('c_introduction'); ?></p>

			</div>

			<div class="cf-cd d-flex">

				<div class="cc-col col-12 col-md-6">

					<?php echo do_shortcode( get_field('c_form') ) ?>

				</div>

				<div class="cc-col col-12 col-md-6">

					<ul class="cd-entries list-unstyled">

						<?php while( have_rows('c_contact_details') ): the_row();?>

							<?php

								$icon = get_sub_field('icon');

								$text1 = get_sub_field('text_1');

								$text2 = get_sub_field('text_2');

							?>

							<li class="d-flex">

								<img src="<?php echo $icon['url']; ?>">

								<div>

									<?php echo $text1; ?><br/>

									<span class="dg-t-blue"><?php echo $text2; ?></span>

								</div>

							</li>

						<?php endwhile; ?>

					</ul>

				</div>

			</div>

		</div>

	</div>

</section>



<section id="section6">

	<div class="my-container">

		<div class="sec6-left">

			<h2> <?php the_field('sec6_heading',$home_ID); ?> </h2>

			<p> <?php the_field('sec6_content',$home_ID); ?> </p>

			<?php if(get_field('sec6_logo_list',$home_ID)): ?>

			<ul>

				<?php while(has_sub_field('sec6_logo_list',$home_ID)): ?>

					<li> <img src="<?php the_sub_field('logo_image',$home_ID); ?>" /> </li>

				<?php endwhile; ?>

			</ul>

			<?php endif; ?>

		</div>

		<div class="sec6-right">

			<?php if(get_field('sec6_features_list',$home_ID)): ?>

			<ul>

				<?php while(has_sub_field('sec6_features_list',$home_ID)): ?>

					<li> <div class="image-icon-cont"><img src="<?php the_sub_field('icon',$home_ID); ?>" /> </div> <p> <?php the_sub_field('text',$home_ID); ?> </p> </li>

				<?php endwhile; ?>

			</ul>

			<?php endif; ?>

		</div>

	</div>

	<div class="clear"> </div>

</section>



<section id="section7">

	<div class="sec7-left">

				<div class="sec7-testimonial" style=" visibility: hidden;
		    height: 1px;
		    overflow: hidden;">

			<h2 class="sec7-heading"> <?php the_field('sec7_testimonial_heading',$home_ID); ?> </h2>

			<a href="<?php the_field('sec7_button_link',$home_ID); ?>"> <?php the_field('sec7_button_label',$home_ID); ?> </a>

			<div class="sec7-img-cont"> <img src="<?php the_field('sec7_quote_image',$home_ID); ?> " /> </div>

			<?php the_field('sec7_testimonial',$home_ID); ?> 

		</div>

		<div class="clear"> </div>

		<div id="sec-contact"class="sec7-contact">

		<h2 class="sec7-heading"> <?php the_field('sec7_contact_heading',$home_ID); ?> </h2>

		<div class="inner-left">

		<p> <?php the_field('sec7_contact_text',$home_ID); ?> </p>

		<a href="<?php the_field('sec7_contact_buttton_link',$home_ID); ?>"> <?php the_field('sec7_contact_button_label',$home_ID); ?> </a>

		</div>

		<div class="inner-right">

			<?php if(get_field('sec7_contact_list',$home_ID)): ?>

			<ul>

				<?php while(has_sub_field('sec7_contact_list',$home_ID)): ?>

					<li> <img src="<?php the_sub_field('icon',$home_ID); ?>" /> <p> <?php the_sub_field('label',$home_ID); ?> <span> <a href="<?php the_sub_field('contact_link',$home_ID); ?>"><?php the_sub_field('contact',$home_ID); ?> </a> </span> </p></li>

				<?php endwhile; ?>

			</ul>

			<?php endif; ?>

		</div>

		</div>

		<div class="clear"> </div>

	</div>

	<div class="sec7-right" style="background-image: url('<?php the_field('sec7_background_image',$home_ID); ?>');">

		

	</div>

	<div class="clear"> </div>

</section>



<?php get_footer(); ?>