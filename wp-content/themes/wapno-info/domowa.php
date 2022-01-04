<?php

/**
 * Template Name: Home
 * Description: home template
 *
 */

get_header();


$section_1_title = get_field( 'section_1_title' );
$section_1_txt = get_field( 'section_1_txt' );
$link = get_field( 'section_1_link' );
$map_link = get_field( 'home_map_link' );



?>
<div class="home">
	<div class="container--front">
		<div class="container">
			<div class="row home__hero">
				<div class="col-md-4 col-xl-4 order-1 order-xl-0 home__hero--intro">
				<?php if ( $section_1_title ) : ?>
					<h1>
						<?php echo $section_1_title; ?>
					</h1>
				<?php endif; ?>
				<?php if ( $section_1_txt ) : ?>
					<div class="home__hero--txt">
						<?php echo $section_1_txt; ?>
					</div>
				<?php endif; ?>

				<?php
				if ( $link ) :
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="color-primary home__hero--link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $link_title; ?> 
						<!-- <span> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="39.855" height="10.794" viewBox="0 0 39.855 10.794">
								<g id="Group_25" data-name="Group 25" transform="translate(-307.321 -419.714)">
									<line id="Line_26" data-name="Line 26" x2="35.21" transform="translate(307.321 425.111)" fill="none" stroke="" stroke-miterlimit="10" stroke-width="2.5"/>
									<path id="Path_30" data-name="Path 30" d="M334.415,420.858l9.659,4.253-9.659,4.253" fill="none" stroke="" stroke-miterlimit="10" stroke-width="2.5"/>
								</g>
							</svg>
						<!-- </span> -->
					</a>
				<?php endif; ?>

				</div>
				<div class="col-xl-8 order-0 order-xl-1 home__carousel">
					<div id="carousel" class="carousel slide" data-bs-ride="carousel">
						
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_1.png" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_2.png" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_3.png" class="d-block w-100" alt="...">
							</div>
						</div>
						<div class="carousel-nav">
							<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Poprzedni</span>
							</button>
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>
							<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Następny</span>
							</button>
						</div>

					</div>
				</div>
			</div>
			<div class="row home__cats--row">
				<div class="col-md-8 col-lg-10">
					<div class="row home__cats--wrap">
						<?php if ( have_rows( 'home_cats_rptr' ) ) : ?>
							<?php while ( have_rows( 'home_cats_rptr' ) ) :
								the_row(); ?>
								<div class="home__cats">
									<i>
										<?php
										$home_cat_icon = get_sub_field( 'home_cat_icon' );
										if ( $home_cat_icon ) : ?>
											<img src="<?php echo esc_url( $home_cat_icon['url'] ); ?>" alt="<?php echo esc_attr( $home_cat_icon['alt'] ); ?>" />
										<?php endif; ?>
									</i>
									<span>
										<?php if ( $home_cat_txt = get_sub_field( 'home_cat_txt' ) ) : ?>
											<?php echo $home_cat_txt; ?>
										<?php endif; ?>
									</span>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-8 col-sm-5 col-md-4 col-lg-2">
				<?php
					if ( $map_link ) :
						$map_link_url = $map_link['url'];
						$map_link_title = $map_link['title'];
						$map_link_target = $map_link['target'] ? $map_link['target'] : '_self';
						?>
					<a class="col home__cats home__find" href="<?php echo esc_url( $map_link_url ); ?>" target="<?php echo esc_attr( $map_link_target ); ?>">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="74.395" height="71.963" viewBox="0 0 74.395 71.963">
								<g id="Group_336" data-name="Group 336" transform="translate(-1310.627 -209.619)">
									<g id="Group_335" data-name="Group 335">
										<circle id="Ellipse_37" data-name="Ellipse 37" cx="14.364" cy="14.364" r="14.364" transform="translate(1332.891 230.264)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" />
									</g>
									<path id="Path_326" data-name="Path 326" d="M1383.1,258.309l-3.863-13.038-6.095-3.1,9.2-7.63V230.8l-8.269-13.437h-34.382V212.2l-10.752,2.756-2.756,5.513-13.437,2.412,2.412,34.8,8.613,5.168,1.723,5.168h12.059l6.891,11.025,7.58-3.445,9.782.635" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" />
									<line id="Line_214" data-name="Line 214" x2="10.168" y2="10.168" transform="translate(1359.203 256.576)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
								</g>
							</svg>
						</i>
						<span>
							<?php echo $map_link_title; ?>
						</span>
					</a>
				<?php endif; ?>

				</div>
			</div>
			<div class="home__news">
				<div class="news">
					<div class="news__title">
						<h2>
							Wiedza i wiadomości
						</h2>
						<div class="subtitle">
							którą uwielbiamy się dzielić
						</div>
					</div>
				</div>
				<?php get_template_part('components/news/news-archive'); ?>
				<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="news__more">
					<?php _e("Zobacz więcej"); ?>
					<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="35.21" height="35" viewBox="0 0 35.21 35">
							<g id="Group_25" data-name="Group 25" transform="translate(-307.321 -407.358)">
								<line id="Line_26" data-name="Line 26" x2="35.21" transform="translate(307.321 425.111)" fill="none" stroke="" stroke-miterlimit="10" stroke-width="2.5"></line>
								<line id="Line_28" data-name="Line 28" y1="35" transform="translate(325.198 407.358)" fill="none" stroke="" stroke-miterlimit="10" stroke-width="2.5"></line>
							</g>
						</svg>
					</span>
				</a>
			</div>
			<div class="products">
				<div class="products__title">
					<?php if ($products_title = get_field('products_title')) : ?>
						<h2>
							<?php echo esc_html($products_title); ?>
						</h2>
					<?php endif; ?>
					<?php if ($products_subtitle = get_field('products_subtitle')) : ?>
						<div class="subtitle">
							<?php echo esc_html($products_subtitle); ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ( have_rows( 'products_buttons' ) ) : ?>
					<div class="row">
						<?php while ( have_rows( 'products_buttons' ) ) :
							the_row(); ?>
								<div class="col-6 col-md-4 col-xxl-2">
									<?php
									$products_button_icon = get_sub_field( 'products_button_icon' );
									$products_button_icon_url = $products_button_icon['url'];
									$link = get_sub_field( 'products_button' );
									if ( $link ) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<div class="products__button" style="background-image: url(<?=$products_button_icon_url?>)">
												<span><?php echo $link_title; ?></span>
											</div>
										</a>
									<?php endif; ?>
								</div>
						<?php endwhile; ?>
					</div>
					<?php
					$link = get_field( 'products_aux_button' );
					if ( $link ) :
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button__aux" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php if ( $products_aux_button_title = get_field( 'products_aux_button_title' ) ) : ?>
							<div class="d-flex align-items-center">
								<i>
									<svg xmlns="http://www.w3.org/2000/svg" width="52.643" height="49.725" viewBox="0 0 52.643 49.725">
										<g id="Group_100" data-name="Group 100" transform="translate(-415.654 -303.017)">
											<g id="Group_28" data-name="Group 28" transform="translate(438.013 324.216)">
											<circle id="Ellipse_9" data-name="Ellipse 9" cx="8.454" cy="8.454" r="8.454" transform="translate(0 0)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
											<path id="Path_31" data-name="Path 31" d="M453.791,338.664a5.467,5.467,0,0,1,7.732,0" transform="translate(-449.203 -334.076)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
											<g id="Group_27" data-name="Group 27" transform="translate(11.166 11.167)">
												<path id="Rectangle_32" data-name="Rectangle 32" d="M0,0H3.093a0,0,0,0,1,0,0V10.105a1.547,1.547,0,0,1-1.547,1.547h0A1.547,1.547,0,0,1,0,10.105V0A0,0,0,0,1,0,0Z" transform="translate(3.646 5.833) rotate(-45)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
												<path id="Path_32" data-name="Path 32" d="M468.638,348.815l1.094,1.093a1.341,1.341,0,0,1,0,1.9l-3.5,3.5a1.34,1.34,0,0,1-1.9,0l-1.094-1.094" transform="translate(-463.242 -348.815)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
											</g>
											</g>
											<path id="Path_33" data-name="Path 33" d="M467.1,340.6l-3.837-12.95-4.242-2.158,6.4-5.311v-2.6l-5.755-9.353H435.733v-3.6l-7.484,1.918-1.918,3.837-9.352,1.679,1.679,24.221,6,3.6,1.2,3.6h8.393l4.8,7.674,5.276-2.4,11.077.719v2.158" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
										</g>
									</svg>
								</i>
								<span>
									<?php echo esc_html( $products_aux_button_title ); ?>
								</span>
							</div>
						<?php endif; ?>
						
							<div class="d-flex align-items-center color-white" ><?php echo esc_html( $link_title ); ?>
							<div class="chevron_btn">
								<svg xmlns="http://www.w3.org/2000/svg" width="14.295" height="21.901" viewBox="0 0 14.295 21.901">
									<path id="Path_143" data-name="Path 143" d="M634.556,543.368l10.693,7.271a2.77,2.77,0,0,1,0,4.581l-10.693,7.271" transform="translate(-633.167 -541.979)" fill="none" stroke="" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
								</svg>
							</div>
							</div>

					</a>
					<?php endif; ?>
				<?php endif; ?>
			</div>


		</div><!-- container -->
	</div><!-- container--front -->
</div><!-- home -->


<?php
get_footer();
