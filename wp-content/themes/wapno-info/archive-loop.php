<?php
/**
 * The template for displaying the archive loop.
 */

wapno_info_content_nav( 'nav-above' );





// <?php
function dropdown_tags(){
    echo '<select name="tag-group" data-filter-group="tags" id="tag" class="button-group filters-button-group">';
	echo '<option data-filter="*" class="button" value="all">Wszystkie</option>\n"';
    foreach ( get_the_tags() as $tag ) {
        echo '<option class="button" data-filter=".' . $tag->name . '" value="' . $tag->name . '">' . $tag->name . "</option>\n";
    }
    echo '</select>';
}
?>
<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
?>

<div class="filters">

	<div class="button-group filters-button-group" data-filter-group="cats">
	<button class="button btn btn-outline-primary is-checked" data-filter="*">show all</button>
	<!-- <button class="button" data-filter=".artykuł">artykuł</button>
	<button class="button" data-filter=".prezentacja">prezentacja</button>
	<button class="button" data-filter=".publikacja">publikacja</button>
	<button class="button" data-filter=".wpis">wpis</button>
	<button class="button" data-filter=".wydarzenie">wydarzenie</button> -->
	<?php
		foreach( $categories as $category ) {
			$category = esc_html( $category->name );
			echo '<button class="button btn btn-outline-secondary ' . $category . '" data-filter=".' . $category . '">' . $category .  '</button>';
		}
	?>
	</div>


	<h2><?php _e( 'Tags:', 'textdomain' ); ?></h2>
	<form id="tags-select" class="tags-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		<?php dropdown_tags(); ?>
		<input type="submit" name="submit" value="view" />
	</form>

</div>

<h2>Sort direction</h2>

    <!-- <select id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
        <option><a class="selected" href="#sortAscending=true" data-option-value="true">sort ascending</a>

        </option>
        <option><a href="#sortAscending=false" data-option-value="false">sort descending</a>

        </option>
    </select> -->

    <select id="sort-direction" class="sort-by-button-group clearfix" >
        <option class="desc">
			Od Najnowszych
        </option>
        <option class="asc">
			Od Najstarszych
        </option>
    </select>



<?php
if ( have_posts() ) :
?>
	<div class="row isotope-cont">
	<?php
		while ( have_posts() ) :
			the_post();
			$post_date = get_the_date( 'Ymdhis' );
			// categories
			$cats = array();
			foreach (get_the_category($post_id) as $c) {
			$cat = get_category($c);
			array_push($cats, $cat->name);
			}

			if (sizeOf($cats) > 0) {
				$post_categories = implode(' ', $cats);
			} else {
				$post_categories = 'Not Assigned';
			}
			
			/**
			 * Include the Post-Format-specific template for the content.
			 * If you want to overload this in a child theme then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			// get_template_part( 'content', 'index' ); // Post format: content-index.php
			echo '<article class="'. $post_categories . ' ' . show_tags() . ' news-article isotope-item  col-md-6 col-xxl-4" id="'.get_the_ID().'" date="' . $post_date . '">';

			get_template_part('components/news/news-thumbnail');
			echo '</article>';

		endwhile;
	?>
	</div>
<?php
endif;

wp_reset_postdata();

wapno_info_content_nav( 'nav-below' );
