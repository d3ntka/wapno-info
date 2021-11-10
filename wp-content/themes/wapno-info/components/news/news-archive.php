<?php 
// Custom WP query news
$args_news = array(
	'posts_per_page' => 6,
	'nopaging' => true,
	'order' => 'DESC',
);

$news = new WP_Query( $args_news );


if ( $news->have_posts() ) {
    echo '<div class="news-loop row">';
	while ( $news->have_posts() ) {
		$news->the_post();
        echo '<article class="col-md-6 col-xxl-4" id="'.get_the_ID().'">';
        get_template_part('components/news/news-thumbnail');
        
        echo '</article>';
	}
    echo '</div>';

} else {
echo 'Nie było pościków dla Ciebie';
}

wp_reset_postdata();

?>
