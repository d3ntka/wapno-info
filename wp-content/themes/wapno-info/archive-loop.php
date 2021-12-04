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

	<div class="button-group filters-button-group filters__top" data-filter-group="cats">
		<button class="button btn btn-outline-secondary is-checked" data-filter="*"><?php _e("zobacz wszystko", "wapno-info"); ?></button>
		<?php foreach( $categories as $category ) {
				$category = esc_html( $category->name );
				echo '<button class="button btn btn-outline-secondary ' . $category . '" data-filter=".' . $category . '">' . $category .  '</button>';
			}
		?>
	</div>

	<div class="selections__wrap">
		<div class="selections">
			<span>
			<svg xmlns="http://www.w3.org/2000/svg" width="11.017" height="16.325" viewBox="0 0 11.017 16.325">
				<path id="Path_247" data-name="Path 247" d="M1166.459,547.29h-8.424a.536.536,0,0,0-.485.762l2.741,5.863a.535.535,0,0,1,.051.227v7.423a.536.536,0,0,0,.817.455l2.741-1.7a.534.534,0,0,0,.253-.455v-5.724a.542.542,0,0,1,.05-.227l2.741-5.863A.535.535,0,0,0,1166.459,547.29Z" transform="translate(-1156.738 -546.54)" fill="none" stroke="#9fb7c2" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/>
			</svg>
				<?php _e( 'KATEGORIA: ', 'wapno-info' ); ?>
			</span>
			<!-- <?php dropdown_tags(); ?> -->
			<div class="dropdown">
				<button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuTags" data-bs-toggle="dropdown" aria-expanded="false">
				<?php _e("Wybierz", "wapno-info"); ?>
				</button>
				<ul class="dropdown-menu button-group filters-button-group" aria-labelledby="dropdownMenuTags" data-filter-group="tags" id="tag">
					<li><a class="button dropdown-item" href="#" data-filter="*" value="all"><?php _e("Wszystkie", "wapno-info"); ?></a></li>
					<?php 
						foreach ( get_the_tags() as $tag ) {
							echo '<li><a class="button dropdown-item" href="#" data-filter=".' . $tag->name . '" >' . $tag->name . "</a></li>\n";
						}
					?>
				</ul>
			</div>


			<!-- <div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtons" data-bs-toggle="dropdown" aria-expanded="false">Wybierz</button>
				<ul name="tag-group" data-filter-group="tags" id="tag" class="btn button-group filters-button-group" aria-labelledby="dropdownMenuButtons">
				<li><a class="button dropdown-item"  href="#" data-filter="*" value="all" >Wszystkie</a></li>
				<?php 
					foreach ( get_the_tags() as $tag ) {
						echo '<li><a class="button dropdown-item" href="#" data-filter=".' . $tag->name . '" value="' . $tag->name . '">' . $tag->name . "</a></li>\n";
					}
				?>
				</ul>
			</div> -->


		</div>

		<div class="selections">
			<span>
				<svg xmlns="http://www.w3.org/2000/svg" width="15.869" height="16.938" viewBox="0 0 15.869 16.938">
				<g id="Group_211" data-name="Group 211" transform="translate(-1187.599 -547.791)">
					<g id="Group_209" data-name="Group 209" transform="translate(1188.638 548.541)">
					<line id="Line_187" data-name="Line 187" y1="15.438" transform="translate(3.448)" fill="none" stroke="#9fb7c2" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/>
					<path id="Path_248" data-name="Path 248" d="M1188.638,553.8l3.448-5.261,3.448,5.261" transform="translate(-1188.638 -548.541)" fill="none" stroke="#9fb7c2" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
					</g>
					<g id="Group_210" data-name="Group 210" transform="translate(1195.534 550.026)">
					<line id="Line_188" data-name="Line 188" y2="12.468" transform="translate(3.448)" fill="none" stroke="#9fb7c2" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/>
					<path id="Path_249" data-name="Path 249" d="M1200.251,563.179l3.448,5.261,3.448-5.261" transform="translate(-1200.251 -555.972)" fill="none" stroke="#9fb7c2" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
					</g>
				</g>
				</svg>

					<?php _e( 'SORTOWANIE: ', 'wapno-info' ); ?>
			</span>

			<div class="dropdown">
				<button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenu-sorting" data-bs-toggle="dropdown" aria-expanded="false">
					<?php _e("Wybierz", "wapno-info"); ?>
				</button>
				<ul class="dropdown-menu sort-by-button-group" aria-labelledby="dropdownMenu-sorting">
					<li><a class="dropdown-item desc" href="#"><?php _e("Od Najnowszych", "wapno-info"); ?></a></li>
					<li><a class="dropdown-item asc" href="#"><?php _e("Od Najstarszych", "wapno-info"); ?> </a></li>
				</ul>
			</div>



<!-- 
			<select id="sort-direction" class="sort-by-button-group clearfix" >
				<option class="desc">
					<?php _e("Od Najnowszych", "wapno-info"); ?>
				</option>
				<option class="asc">
					<?php _e("Od Najstarszych", "wapno-info"); ?> 
				</option>
			</select> -->
		</div>
	</div>
</div>


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
			echo '<article class="'. $post_categories . ' ' . show_tags() . ' news-blog news-article isotope-item  col-md-6 col-xxl-4" id="'.get_the_ID().'" date="' . $post_date . '">';

			get_template_part('components/news/news-thumbnail');
			echo '</article>';

		endwhile;
	?>
	</div>
<?php
endif;

wp_reset_postdata();

wapno_info_content_nav( 'nav-below' );
