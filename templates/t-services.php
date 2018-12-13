<?php



/**



 * Template Name: Services Page Template



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



	$bg_image = get_field('serv_background_image');



	$cta_bg = get_field('cta_bg');



?>







<section id="banner" style="background-image:url(<?php echo $bg_image['url'];?>);">



	<div class="my-container">



		<div class="content">



			<h1><?php the_field('serv_page_title')?></h1>



			<p><?php the_field('serv_page_description')?></p>



		</div>



	</div>



</section>











<section id="main">



	<div class="my-container">



		<div class="content">



			<div class="serv-wrapper d-flex">



				<ul class="serv-menu list-unstyled col-12 col-sm-2">



					<?php



						$serv_a = 1;



						$serv_b = 1;



						$serv_c = 1;



					?>



					<?php while( have_rows('serv_si') ): the_row(); ?>



						<?php if( $serv_a == 1 ): ?>



							<li class="serv-menu-item active" data-id="<?php echo $serv_a; ?>">



						<?php else: ?>



							<li class="serv-menu-item" data-id="<?php echo $serv_a; ?>">



						<?php endif; ?>







							<?php the_sub_field('title'); ?>



						</li>



					<?php $serv_a++; endwhile; ?>







					<select id="serv-menu-select">



						<?php while( have_rows('serv_si') ): the_row(); ?>



							<option



								value="<?php echo $serv_c; ?>"



								data-count="<?php echo $serv_c;?>"



								>



								<?php the_sub_field('title'); ?>	



							</option>







						<?php $serv_c++; endwhile; ?>



					</select>



				</ul>



				<div class="serv-content col-12 col-sm-10">



					<?php

					$i = 1;

					while( have_rows('serv_si') ): the_row(); ?>



						<?php



							$gallery = get_sub_field('gallery');



							$link = get_sub_field('datasheet');



							$accordion = 'accordion';



						?>



						<?php if( $serv_b == 1 ): ?>



							<div class="serv-content-item active" data-id="<?php echo $serv_b; ?>">



						<?php else: ?>



							<div class="serv-content-item" data-id="<?php echo $serv_b; ?>">



						<?php endif; ?>



							<div class="serv-heading d-flex">



								<h1 class="serv-mi-heading"><?php the_sub_field('title'); ?></h1>



								<?php if( $link ): ?>



									<a href="<?php echo $link['url']; ?>" target="_blank" class="dg-button--inverted">Download datasheet</a>



								<?php endif; ?>



							</div>



							<?php if( $gallery ): ?>



								<div class="serv-carousel swiper-container <?php echo 'swiper-container-' . $i; ?>">



									<div class="swiper-wrapper">



										<?php foreach ( $gallery as $entry ) { ?>



											<a class="swiper-slide" href="<?php echo $entry['url'];?>">



												<img src="<?php echo $entry['sizes']['medium']; ?>">



											</a>



										<?php } ?>



									</div>







									<!-- If we need navigation buttons -->



								    <div class="swiper-button-prev-<?php echo $i; ?>"></div>



								    <div class="swiper-button-next-<?php echo $i; ?>"></div>



								</div>



							<?php endif; ?>







							<div class="serv-content-entry">



								<?php echo wpautop(get_sub_field('content'),false); ?>







								<?php if( have_rows($accordion) ){ ?>



									<div class="acc-entries">



										<?php $accord_index = 1; ?>



										<?php while( have_rows($accordion) ){ the_row(); ?>



											<?php



												$acc_title = get_sub_field('title');



												$acc_body = get_sub_field('information');



											?>



											<div class="serv-accordion-entry" data-index="<?php echo $accord_index; ?>">



												<div class="serv-info-heading serv-info-row"><h3><?php echo $acc_title; ?></h3></div class="serv-info-heading">



												<div class="serv-info-body serv-info-row"><?php echo $acc_body; ?></div>



											</div>



										<?php $accord_index++; }  ?>



									</div>



								<?php } ?>



							</div>







						</div>



					<?php $i++; $serv_b++; endwhile; ?>







					<?php if( get_field('serv_cta') ): ?>



						<div class="serv-cta" style="background-image:url(<?php echo $cta_bg['url']; ?>);">



							<div class="serv-cta-wrapper">



								<?php the_field('serv_cta'); ?>



							</div>



						</div>



					<?php endif; ?>



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