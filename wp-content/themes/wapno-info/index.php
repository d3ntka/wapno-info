<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();


$page_id = get_option( 'page_for_posts' );

?>
<div class="breadcrumbs__wrap">
    <div class="container breadcrumbs">
        <a href="" class="breadcrumbs__home">
            <!-- <div class="breadcrumbs__home--icon"> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="12.962" height="14.139" viewBox="0 0 12.962 14.139">
                    <g id="Group_124" data-name="Group 124" transform="translate(-700.287 -542.5)">
                        <path id="Path_144" data-name="Path 144" d="M700.787,556.138v-7.331a1.971,1.971,0,0,1,.63-1.444l4.012-3.719a1.968,1.968,0,0,1,2.676,0l4.013,3.719a1.971,1.971,0,0,1,.63,1.444v7.331" fill="none" stroke="#6b6b6b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                        <path id="Path_145" data-name="Path 145" d="M706.428,559.214v-3.5a1.973,1.973,0,0,1,1.974-1.974h0a1.973,1.973,0,0,1,1.974,1.974v3.5" transform="translate(-1.634 -3.076)" fill="none" stroke="#6b6b6b" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                    </g>
                </svg>
            <!-- </div> -->
            <?php _e('Strona główna'); ?>
        </a>
        <div class="chevron">></div>
        <div class="current"><?php _e("Wiedza i wiadomości", "wapno-info") ?></div>
    </div>
</div>

<div class="container archive-blog">
	<h1>
		<?php _e("Wiedza i wiadomości", "wapno-info") ?>
	</h1>
	<div class="row padding-cta mt-5">
		<div class="col-md-12">
			<?php
				echo apply_filters( 'the_content', get_post_field( 'post_content', $page_id ) );
	
				edit_post_link( __( 'Edit', 'wapno-info' ), '<span class="edit-link">', '</span>', $page_id );
			?>
		</div><!-- /.col -->
		<div class="col-md-12">
			<?php
				get_template_part( 'archive', 'loop' );
			?>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div>
<?php
get_footer();
