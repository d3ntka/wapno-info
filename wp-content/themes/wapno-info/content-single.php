<?php

/**
 * The template for displaying content in the single.php template.
 *
 */


// Get The Post's Author ID
$authorID = get_the_author_meta('ID');
$authorname = get_the_author_meta('display_name', $authorID);
$post_tags = get_the_tags();
$category = get_the_category();
$post_cat = $category[0]->cat_name;
$term_id = $category[0]->term_id;
$cat_color = get_term_meta($term_id, 'cc_color', true);

// Set the image size. Accepts all registered images sizes and array(int, int)
$avatarSize = 'thumbnail';
$imgURL='';

// Get the image URL using the author ID and image size params
if (function_exists('get_wpupa_url'))  
	$imgURL = get_wpupa_url($authorID, ['size' => $avatarSize]);




?>

<?php
get_template_part('components/breadcrumbs/breadcrumbs');
?>
<div class="news-single">
	<div class="container news-single__cont-img">
		<div class="row">
			<div class="col-12">
				<div class="news-thumb">
				<?php
				if (has_post_thumbnail()) :
					$cover_img = get_the_post_thumbnail_url(get_the_ID(), 'full');
					echo '<div class="cover-photo" style="background-image:url(' . $cover_img . ')"></div>';
				endif;
				?>
				<div class="news-thumb__taxonomy">
					<div class="news-thumb__cats--wrap" style="background-color: <?=$cat_color;?>">
						<img class="icon-bktowht" src="<?php echo z_taxonomy_image_url($term_id); ?>"/>
						<div class="news-thumb__cats--name"><?php echo $post_cat; ?></div>
					</div>
					
					<div class="news-thumb__tags">
                    <?php
                    if ( $post_tags ) {
                        foreach( $post_tags as $tag ) {
                        echo '<div>' . $tag->name . '</div>'; 
                        }
                    }
                    ?>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container--front news-single__content">
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
								
								<?php 
								echo '<img class="news__avatar" src="'. $imgURL .'" alt="'. $authorname .'">';


								echo get_the_author() . ' ' . get_the_date('d-m-Y '); 
								?>

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
