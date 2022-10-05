<?php get_header() ?>
<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-6 hero-left">
		    <h1 class="display-4 mb-5"><?php echo esc_html(get_theme_mod('resto_cus_home_sett', __('We Love <br>Delicious Foods!','resto'))) ?></h1>
		    <div class="mb-2">
		    	<a class="btn btn-primary btn-shadow btn-lg" href="#" role="button">Explore Menu</a>
			    <a class="btn btn-icon btn-lg" href="https://player.vimeo.com/video/33110953" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true">
			    	<span class="lnr lnr-film-play"></span>
			    	Play Video
			    </a>
		    </div>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			Fast Delivery
		    		</h5>
		    	</li>
		    	<li class="border-right">
		    		<span class="lnr lnr-leaf"></span>
		    		<h5>
		    			Fresh Food
		    		</h5>
		    	</li>
		    	<li class="">
		    		<span class="lnr lnr-bubble"></span>
		    		<h5>
		    			24/<?php echo esc_html(get_theme_mod('resto_support_time_sett',7)) ?> Support
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			    <div class="item">
				<?php
				 $image_id_1 = get_theme_mod('slider_image_1');
				 if(!$image_id_1 == ''){
					echo wp_get_attachment_image($image_id_1,'slider-size','',array(
						'class' => 'img-fluid',
					 ));

				 }else{
					?>
					<img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/hero-2.jpg'?>" alt="">
					<?php
				 }
				 
				  ?>
			    	
			    </div>
			    <div class="item">
				<?php
				 $image_id_2 = get_theme_mod('slider_image_2'); 
				 if(!$image_id_2 == ''){
					echo wp_get_attachment_image($image_id_2,'slider-size','',array(
						'class' => 'img-fluid',
					 ));

				 }else{
					?>
					<img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/hero-2.jpg'?>" alt="">

					<?php
				 }
				 
				 
				  ?>
			    </div>
			    <div class="item">
				<?php
				 $image_id_3 = get_theme_mod('slider_image_2'); 
				 if(!$image_id_3 == ''){
					echo wp_get_attachment_image($image_id_3,'slider-size','',array(
						'class' => 'img-fluid',
					 ));
				 }else{
					?>
					<img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/hero-1.jpg'?>" alt="">
					<?php
				 }
				 
				  ?>
			    </div>
			</div>
	    </div>
	</div>
  </div>
</div>		
<!-- Welcome Section -->
<?php echo esc_html(get_template_part('template-parts/about'))?>
<!-- End of Welcome Section -->		
<!-- Special Dishes Section -->
<?php echo esc_html(get_template_part('template-parts/dishes'))?>
<!-- End of Special Dishes Section -->	
<!-- Menu Section -->
<?php echo esc_html(get_template_part('template-parts/menu'))?>
<!-- End of menu Section -->		
<!-- Testimonial Section-->
<?php echo esc_html(get_template_part('template-parts/testimony'))?>
<!-- End of Testimonial Section-->	
	<!-- Team Section -->
    <?php echo esc_html(get_template_part('template-parts/team'))?>
<!-- End of Team Section -->	
	<!-- Reservation Section -->
    <?php echo esc_html(get_template_part('template-parts/reservation'))?>
<!-- End of Reservation Section -->		
<?php get_footer()?>