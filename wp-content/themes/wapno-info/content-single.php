<?php

/**
 * The template for displaying content in the single.php template.
 *
 */

?>

<?php
get_template_part('components/breadcrumbs/breadcrumbs');
?>
<div class="news-single">
	<div class="container">
		<div class="row">
		<?php
		if (has_post_thumbnail()) :
			echo '<div class="col-12 news-thumb">' . '<img src=' . get_the_post_thumbnail_url(get_the_ID(), 'full') . '></div>';
		endif;
		?>

		</div>
	</div>
	<div class="container--front">
		<div class="container">
	
		<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="header">
						<h3 class="title"><?php the_title(); ?></h3>
						<?php
						if ('post' === get_post_type()) :
						?>
							<div class="meta">
								<?php echo get_the_author(); ?>

								<?php echo get_the_date('d-m-Y '); ?>

							</div><!-- /.entry-meta -->
						<?php
						endif;
						?>
					</header><!-- /.entry-header -->
					<div class="content">
						<?php


						the_content();

						wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'wapno-info') . '</span>', 'after' => '</div>'));
						?>
					</div><!-- /.entry-content -->

					<?php
					edit_post_link(__('Edit', 'wapno-info'), '<span class="edit-link">', '</span>');
					?>

					
				</article><!-- /#post-<?php the_ID(); ?> -->
			</div>
		</div>
	</div>
	</div>
</div>
