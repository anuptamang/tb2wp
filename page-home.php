<?php
/*
  Template Name: Home Page
*/

// Advanced Custom Fields
$post_section_title = get_field('post_section_title');
$another_post_section_title = get_field('another_post_section_title');

get_header();?>
<main id="main">
			<section class="info-slider">
				<div class="slide block-vc">
					<div class="img-holder has-bg d-none d-md-block" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-slide4.jpg);"></div>
					<div class="img-holder has-bg d-md-none" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-slide4-sm.jpg);"></div>
					<div class="info-caption text-white">
						<h1 class="display-1 heading-title font-barlow-semi text-white">10 Corporate</h1>
						<h2 class="display-2 font-barlow-semi text-white">The Bachelor</h2>
						<p class="font-weight-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel dapibus lorem. Aliquam sem magna, sollicitudin faucibus tellus consectetur, gravida dignissim diam. </p>
						<a href="#" class="btn btn-blue">Find Out More</a>
					</div>
				</div>
				<div class="slide block-vc">
					<div class="img-holder has-bg d-none d-md-block" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-slide4.jpg);"></div>
					<div class="img-holder has-bg d-md-none" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-slide4-sm.jpg);"></div>
					<div class="info-caption text-white">
						<h1 class="display-1 heading-title border-red font-barlow-semi text-white">10 speaks</h1>
						<h2 class="display-2 font-barlow-semi text-white">Aliquam sem magna</h2>
						<p class="font-weight-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel dapibus lorem. Aliquam sem magna, sollicitudin faucibus tellus consectetur, gravida dignissim diam. </p>
						<a href="#" class="btn btn-red">Find Out More</a>
					</div>
				</div>
				<div class="slide block-vc">
					<div class="img-holder has-bg d-none d-md-block" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-slide4.jpg);"></div>
					<div class="img-holder has-bg d-md-none" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-slide4-sm.jpg);"></div>
					<div class="info-caption text-white">
						<h1 class="display-1 heading-title border-darkblue font-barlow-semi text-white">10 Corporate</h1>
						<h2 class="display-2 font-barlow-semi text-white">The Bachelor</h2>
						<p class="font-weight-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel dapibus lorem. Aliquam sem magna, sollicitudin faucibus tellus consectetur, gravida dignissim diam. </p>
						<a href="#" class="btn btn-darkblue">Find Out More</a>
					</div>
				</div>
				<div class="slide block-vc">
					<div class="img-holder has-bg d-none d-md-block" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-slide4.jpg);"></div>
					<div class="img-holder has-bg d-md-none" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-slide4-sm.jpg);"></div>
					<div class="info-caption text-white">
						<h1 class="display-1 heading-title border-teal font-barlow-semi text-white">10 Corporate</h1>
						<h2 class="display-2 font-barlow-semi text-white">The Bachelor</h2>
						<p class="font-weight-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel dapibus lorem. Aliquam sem magna, sollicitudin faucibus tellus consectetur, gravida dignissim diam. </p>
						<a href="#" class="btn btn-teal">Find Out More</a>
					</div>
				</div>
			</section>
			<div class="container py-6">
				<div class="post-section mb-5">
					<h2 class="h1 font-weight-normal text-soft-black mb-2"><?php echo $post_section_title; ?></h2>
					<div class="slider post-slider">
          <?php $loop = new WP_Query(array('post_type' => 'info_post', 'orderby'=> 'post_id', 'order' => 'ASC')); ?>
          <?php while($loop->have_posts()) : $loop->the_post(); ?>
              <div class="slide">
                <div class="info-post">
                  <a href="<?php echo get_post_permalink(); ?>" class="media-holder height-sm mb-2">
                  <?php 
                    $image = get_field('info_post_image');
                    if( !empty( $image ) ): ?>
                        <span class="img has-bg" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></span>
                    <?php endif; ?>
                    <span class="badge"><?php echo get_field('media_duration'); ?></span>
                  </a>
                  <h3 class="h4 mb-0"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); ?>
					</div>
				</div>
				<div class="post-section mb-5">
					<h2 class="h1 font-weight-normal text-soft-black mb-2"><?php echo $another_post_section_title; ?></h2>
					<div class="slider post-slider">
          <?php $loop = new WP_Query(array('post_type' => 'info_post', 'orderby'=> 'post_id', 'order' => 'ASC')); ?>
          <?php while($loop->have_posts()) : $loop->the_post(); ?>
              <div class="slide">
                <div class="info-post">
                  <a href="<?php echo get_post_permalink(); ?>" class="media-holder mb-2">
                  <?php 
                    $image = get_field('info_post_image');
                    if( !empty( $image ) ): ?>
                        <span class="img has-bg" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></span>
                    <?php endif; ?>
                    <span class="badge badge-pdf"><i class="fas fa-file-pdf"></i></span>
                  </a>
                  <h3 class="h4 mb-0"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>
									<time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php the_time( 'l j F' ) ?>
                </time>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); ?>
					</div>
				</div>
				<div class="post-section mb-5">
					<h2 class="h1 font-weight-normal text-soft-black mb-2">Tweets</h2>
					<div class="slider tweet-slider">
						<div class="slide">
							<div class="tweet-holder"><img src="<?php bloginfo('template_url'); ?>/images/tweet-placeholder.png" alt="image description"></div>
						</div>
						<div class="slide">
							<div class="tweet-holder"><img src="<?php bloginfo('template_url'); ?>/images/tweet-placeholder.png" alt="image description"></div>
						</div>
						<div class="slide">
							<div class="tweet-holder"><img src="<?php bloginfo('template_url'); ?>/images/tweet-placeholder.png" alt="image description"></div>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php get_footer(); ?>
