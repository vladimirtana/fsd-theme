<?php get_header(); ?>
<div class="container-fluid">
    <div class="slider-custom">
		<?php
		echo do_shortcode( '[smartslider3 slider="2"]' );
		?>
    </div>
    <div class="row d-flex m-xl-5 p-xl-5 m-lg-5 p-lg-5 m-md-5 m-sm-1">
        <div class="col-md-12 col-xs-1 col-sm-12 col-lg-6 col-xl-6 h-100 p-xl-5 p-lg-3 p-md-3 p-sm-3 p-xs-2">
            <div class="badge-dark">
                <p class="position-relative text-center my-featured-text">A progressive design. A powerful engine.</p>
            </div>
            <img class="featured-img-2nd-section ml-3 ml-md-0 d-block"
                 src="<?php bloginfo( 'template_url' ); ?>/assets/Images/about-us-section.png">


        </div>
        <div class="col-md-12 col-xs-1 col-sm-12 col-lg-6 col-xl-6 h-100 p-xl-5 p-lg-3 p-md-3 p-sm-3 p-xs-2">
            <h6 class="featured-pre-title mt-4 ml-5">ABOUT Q8</h6>
            <h1 class="featured-title ml-5">Welcome to the 8th dimension. The new Audi Q8</h1>
            <h4 class="headline-1 ml-5 pt-5">With its imposing Singleframe in octagonal design, the Audi Q8 presents the
                new face
                of the Q family.</h4>
            <p class="headline-2 ml-5 pt-4">The radiator grille combines with the forward-mounted spoiler and strongly
                contoured
                air inlets to underline its confident look.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 audi-carousel">
            <div class="offset-1 col-xl-5 my-5 py-5">
                <div class="col-12"><h6 class="font-weight-bold text-danger h6-custom">FEATURED</h6>
                    <h1 class="font-weight-bold text-white">Brand new The Audi RSQ8</h1>
                    <p class="text-muted">The RS Q8 asfnadlgnadjkgnladng lng ljnaegjl anlsdng ladnsg lnl kdnsklg
                        rndklnsad glnskldgn lksngd
                        lkn</p>
                </div>
                <div class="d-audi-carousel-flex col-xl-12">
                    <div class="bg-white-carousel-audi mr-3">
                        <div class="p-4">
                            <h6>POWER OUTPUT</h6>
                            <h1>441kw</h1>
                            <h6>(600 hp)</h6>
                        </div>
                    </div>
                    <div class="bg-white-carousel-audi mr-3">
                        <div class="p-4">
                            <h6>POWER OUTPUT</h6>
                            <h1>441kw</h1>
                            <h6>(600 hp)</h6>
                        </div>
                    </div>
                    <div class="bg-white-carousel-audi mr-3">
                        <div class="p-4">
                            <h6>POWER OUTPUT</h6>
                            <h1>441kw</h1>
                            <h6>(600 hp)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Post Type Section with cars -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-5 py-5">
            <div class="heading-products col-12 text-center"><h1>You might take a look...</h1></div>
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

                        <div class="card-deck col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card shadow bg-white rounded">
								<?php if ( has_post_thumbnail() ) : ?>
                                    <span class="card-img-top my-4"> <center><?php the_post_thumbnail(); ?></center></span>
								<?php endif; ?>
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h6><?php the_field( 'doors' ); ?></h6>
                                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    </div>
                                    <div class="card-text">
                                        <p><?php the_content(); ?></p>
                                        <div class="text-left d-block">
                                            <p class="float-left">Starting from:<br><?php the_field( 'price' ); ?>€</p>
                                            <a href="#" class="btn btn-primary float-right">Buy Now</a>
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

    <div class="row">
        <div class="col-12 audi-carousel-form d-flex">
            <div class="col-6 my-5 py-5">
                <h6 class="font-weight-bold text-danger h6-custom">CONTACT US</h6>
                <h1 class="font-weight-bold text-white">If you have any quqestions don't hesitate to contact us</h1>
            </div>
            <div class="offset-1 col-5">
				<?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>

