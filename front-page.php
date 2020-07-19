<?php get_header(); ?>


<div class="container-fluid mw-100 min-vw-100 overflow-hidden">


    <div class="slider-custom">
		<?php
		echo do_shortcode( '[smartslider3 slider="2"]' );
		?>
    </div>



    <div class="row d-flex m-xl-5 p-xl-5 m-lg-5 p-lg-5 m-md-5 m-sm-1" id="about-us">
        <div class="col-md-12 col-xs-1 col-sm-12 col-lg-6 col-xl-6 h-100 p-xl-5 p-lg-3 p-md-3 p-sm-3 p-xs-2">
            <div class="badge-dark">
                <p class="position-relative text-center my-featured-text"><?php the_field('about_us_image_below_text', 'option'); ?></p>
            </div>
            <img class="featured-img-2nd-section ml-3 ml-md-0 d-block"
                 src="<?php the_field('about_us_section_image', 'option'); ?>">


        </div>
        <div class="col-md-12 col-xs-1 col-sm-12 col-lg-6 col-xl-6 h-100 p-xl-5 p-lg-3 p-md-3 p-sm-3 p-xs-2">
            <h6 class="featured-pre-title mt-4 ml-5"><?php the_field('about_us_headline', 'option'); ?></h6>
            <h1 class="featured-title ml-5"><?php the_field('about_us_main_headline', 'option'); ?></h1>
            <h4 class="headline-1 ml-5 pt-5"><?php the_field('about_us_second_headline', 'option'); ?></h4>
            <p class="headline-2 ml-5 pt-4"><?php the_field('about_us_third_headline', 'option'); ?></p>
        </div>
    </div>




    <div class="row">
        <div class="col-12 audi-carousel d-flex" style="background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 13%, rgba(0,212,255,0) 100%), url('<?php the_field('featured_section_image', 'option'); ?>');">
            <div class="col-md-7 col-xl-5 my-5 py-5 offset-1">
                <div class="col-10 col-md-12">
                    <h6 class="h6-custom featured-pre-title"><?php the_field('featured_headline', 'option'); ?></h6>
                    <h1 class="font-weight-bold text-white"><?php the_field('featured_main_headline', 'option'); ?></h1>
                    <p class="text-muted subline-featured"><?php the_field('featured_second_headline', 'option'); ?></p>
                </div>
                <div class="d-audi-carousel-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="bg-white-carousel-audi mr-3 w-100">
                        <div class="p-4">
                            <h6><?php the_field('feature_1_name', 'option'); ?></h6>
                            <h1><?php the_field('feature_1_value', 'option'); ?></h1>
                            <text><?php the_field('feature_1_text', 'option'); ?></text>
                        </div>
                    </div>
                    <div class="bg-white-carousel-audi mr-3 w-100">
                        <div class="p-4">
                            <h6><?php the_field('feature_2_name', 'option'); ?></h6>
                            <h1><?php the_field('feature_2_value', 'option'); ?></h1>
                            <text><?php the_field('feature_2_text', 'option'); ?></text>
                        </div>
                    </div>
                    <div class="bg-white-carousel-audi mr-3 w-100">
                        <div class="p-4">
                            <h6><?php the_field('feature_3_name', 'option'); ?></h6>
                            <h1><?php the_field('feature_3_value', 'option'); ?></h1>
                            <text><?php the_field('feature_3_text', 'option'); ?></text>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Post Type Section with cars -->
    <div class="row" id="products">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-5 py-5">
            <div class="heading-products col-12 text-center"><h1><?php the_field('products_heading', 'option'); ?></h1></div>
			<?php

			$posts = get_posts( array(
				'posts_per_page' => - 1,
				'post_type'      => 'cars'
			) );

			if ( $posts ): ?>

                <div class="row offset-1 py-3">


					<?php foreach ( $posts as $post ):

						setup_postdata( $post );

						?>

                        <div class="card-deck col-10 col-sm-6 col-md-6 col-lg-6 my-2 col-xl-3">
                            <div class="card shadow-sm bg-white rounded">
								<?php if ( has_post_thumbnail() ) : ?>
                                    <span class="card-img-top my-4"> <center><?php the_post_thumbnail(); ?></center></span>
								<?php endif; ?>
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h6><?php the_field( 'doors' ); ?></h6>
                                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    </div>
                                    <div class="card-text my-5">
                                        <p><?php the_content(); ?></p>
                                        <div class="text-left d-block price-start">
                                            <p class="float-left">Starting from:<br><strong class="price-display"><?php the_field( 'price' ); ?> €</strong></p>
                                            <a href="#" class="btn btn-primary float-right my-car-button" style="margin-top:6px;">Buy Now</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

					<?php endforeach; ?>


                </div>

				<?php wp_reset_postdata(); ?>

			<?php endif; ?>
        </div>
    </div>

    <!--last section with contact form-->

    <div class="row" id="contact-us">
        <div class="col-12 audi-carousel-form d-md-flex d-block">
            <div class="offset-md-1 col-12 my-1 py-1 my-md-5 py-md-5 col-sm-12 col-md-5 col-lg-5">
                <h6 class="h6-custom featured-pre-title"><?php the_field('contact_us_headline', 'option'); ?></h6>
                <h1 class="font-weight-bold text-white"><?php the_field('contact_us_main_headline', 'option'); ?></h1>
                <img class="footer-image" src="<?php the_field('contact_us_image', 'option'); ?>">
            </div>
            <div class="col-12 mr-0 col-sm-12 col-md-5 col-lg-5 mr-md-4 my-form-cf7">
				<?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>

