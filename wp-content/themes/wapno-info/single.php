<?php
/**
 * The Template for displaying all single posts.
 */

get_header();
echo '<div class="padding-cta">';
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'content', 'single' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
endif;

wp_reset_postdata();

$count_posts = wp_count_posts();

if ( $count_posts->publish > '1' ) :
	$next_post = get_next_post();
	$prev_post = get_previous_post();
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-sm-12">


	<div class="news-navigation d-flex align-items-center justify-content-between">
		<?php
			if ( $prev_post ) {
				$prev_title = get_the_title( $prev_post->ID );
		?>
			<div class="pr-3">
				<a class="previous-post" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" title="<?php echo esc_attr( $prev_title ); ?>">
					<span class="arrow">						
						<div class="chevron_btn chevron_btn--left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.295" height="21.901" viewBox="0 0 14.295 21.901">
                                <path id="Path_143" data-name="Path 143" d="M634.556,543.368l10.693,7.271a2.77,2.77,0,0,1,0,4.581l-10.693,7.271" transform="translate(-633.167 -541.979)" fill="none" stroke="#9fb7c2" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" />
                            </svg>
                        </div>
					</span>
					<span class="title"><?php _e("Poprzedni"); ?></span>
					<!-- <span class="title"><?php echo wp_kses_post( $prev_title ); ?></span> -->
				</a>
			</div>
		<?php
			}
			if ( $next_post ) {
				$next_title = get_the_title( $next_post->ID );
		?>
			<div class="pl-3">
				<a class="next-post" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo esc_attr( $next_title ); ?>">
					<!-- <span class="title"><?php echo wp_kses_post( $next_title ); ?></span> -->
					<span class="title"><?php _e("Następny"); ?></span>
					<span class="arrow">
						<div class="chevron_btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.295" height="21.901" viewBox="0 0 14.295 21.901">
                                <path id="Path_143" data-name="Path 143" d="M634.556,543.368l10.693,7.271a2.77,2.77,0,0,1,0,4.581l-10.693,7.271" transform="translate(-633.167 -541.979)" fill="none" stroke="#9fb7c2" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" />
                            </svg>
                        </div>
					</span>
				</a>
			</div>
		<?php
			}
		?>
	</div><!-- /.post-navigation -->
</div>
</div>
	</div>

</div>
<!-- <div class="container--front"> -->
        <div class="container">
            <div class="news__news">
                <div class="news">
                    <div class="news__title">
                        <h2>
                            Zobacz podobne
                        </h2>
                        <div class="subtitle">
							artykuły, wydarzenia, poradniki i prezentacje
                        </div>
                    </div>
                </div>
                <?php get_template_part('components/news/news-archive'); ?>
            </div>
        </div>
    <!-- </div> -->
<?php
endif;

get_footer();
