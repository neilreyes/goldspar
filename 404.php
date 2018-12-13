<?php
get_header(); ?>


<section id="section7" style=" ">
    <div class="my-container" style="text-align: left; padding-top: 80px">
        <h1 class="page-title" style="margin: 0; font-size: 42px;"><?php _e( 'Oops! That page can’t be found.
					          ', 'twentysixteen' ); ?></h1>
					          <p style="font-size: 22px;"><?php _e( 'It looks like nothing was found at this location.', 'twentysixteen' ); ?></p>
        
    </div>


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



		<h2 class="sec7-heading"> <?php the_field('sec7_contact_heading',20); ?> </h2>



		<div class="inner-left">



		<p> <?php the_field('sec7_contact_text',20); ?> </p>



		<a href="<?php the_field('sec7_contact_buttton_link',20); ?>"> <?php the_field('sec7_contact_button_label',20); ?> </a>



		</div>



		<div class="inner-right">



			<?php if(get_field('sec7_contact_list',20)): ?>



			<ul>



				<?php while(has_sub_field('sec7_contact_list',20)): ?>



					<li> <img src="<?php the_sub_field('icon',20); ?>" /> <p> <?php the_sub_field('label',20); ?> <span> <a href="<?php the_sub_field('contact_link',20); ?>"><?php the_sub_field('contact',20); ?> </a> </span> </p></li>



				<?php endwhile; ?>



			</ul>



			<?php endif; ?>



		</div>



		</div>



		<div class="clear"> </div>



	</div>



	<div class="sec7-right" style="background-image: url('<?php the_field('sec7_background_image',20); ?>');">



		



	</div>



	<div class="clear"> </div>



</section>



<?php get_footer(); ?>