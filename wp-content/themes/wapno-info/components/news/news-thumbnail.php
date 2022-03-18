<?php
// Get The Post's Author ID
$authorID = get_the_author_meta('ID');
$authorname = get_the_author_meta('display_name', $authorID);
$post_tags = get_the_tags();
$thumbnail_img = get_the_post_thumbnail_url(get_the_ID(), 'large');

// Set the image size. Accepts all registered images sizes and array(int, int)
$avatarSize = 'thumbnail';
$imgURL = '';


$category = get_the_category();
$post_cat = $category[0]->cat_name;
$term_id = $category[0]->term_id;
$cat_color = get_term_meta($term_id, 'cc_color', true);
$cat_icon = z_taxonomy_image_url($term_id);


$global_icon_pdf = get_field('global_icon_pdf', 'options');

$files_rows = get_field('files');
if ($files_rows){
    $files_first_row = $files_rows[0];
    $files_object = $files_first_row['file_object'];
    $file_url = $files_object['url'];
};

if (get_the_content()) {
    $post_url = get_the_permalink();
} else {
    $post_url = $file_url;
}

// Get the image URL using the author ID and image size params
if (function_exists('get_wpupa_url')) {
    $imgURL = get_wpupa_url($authorID, ['size' => $avatarSize]);
};
?>
<!-- ----------------------------------------------------------------------------------- -->

<a class="news-thumbnail card" href="<?=$post_url?>" title="<?php the_title_attribute(); ?>">
    <?php if (has_post_thumbnail()) : ?>

        <div class="news-thumbnail__img" style="--background:url('<?= $thumbnail_img; ?>');">

        <?php else :

        echo '<div class="news-thumbnail__img" style="--background:url(' . $thumbnail_img . '); border: 4px solid' . $cat_color . '">';

    endif; ?>

        <div class="news-thumbnail__tags">
            <!-- <div class=""> -->
            <?php
            if ($post_tags) {
                foreach ($post_tags as $tag) {
                    echo '<div>' . $tag->name . '</div>';
                }
            }
            ?>
            <!-- </div> -->
        </div>
        <div class="news-thumbnail__cats">
            <!-- <div class=""> -->
            <?php

            echo '<div class="news-thumbnail__cats--wrap" style="background-color:' . $cat_color . '" >';
            ?>
            <img class="icon-bktowht" src="<?php echo $cat_icon; ?>" />
            <!-- <div class="news-thumbnail__cats--name"><?php echo $post_cat; ?></div> -->
        </div>
        <!-- </div> -->
        </div>
        <?php if (has_post_thumbnail()) : ?>

            <?php the_post_thumbnail('large'); ?>

        <?php else : ?>


            <div class="news-thumbnail__cats--icon">
                <?php
                if (get_the_content()) {
                ?>
                    <div class="icon" style="--cat-color:<?= $cat_color ?>;--cat-icon:url('<?= $cat_icon ?>')"></div>
                <?php
                } else {
                ?>
                    <div class="icon" style="--cat-color:<?= $cat_color ?>;--cat-icon:url('<?= $global_icon_pdf['url'] ?>')"></div>
                <?php
                }
                ?>
            </div>


        <?php endif; ?>
        </div>
        <div class="news-thumbnail__body card-body">

            <div class="d-flex news-thumbnail__meta align-items-center justify-content-between">
                <div class="news-thumbnail__author">
                    <?php echo '<img class="news__avatar" src="' . $imgURL . '" alt="' . $authorname . '">'; ?>

                    <?php echo get_the_author(); ?>
                </div>
                <div class="news-thumbnail__date date">
                    <?php echo get_the_date('d-m-Y '); ?>
                </div>
            </div>
            <div class="news-thumbnail__title">
                <?php the_title(); ?>
            </div>
            <div class="news-thumbnail__expand">
                <div class="news-thumbnail__excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <div class="news-thumbnail__see-more">
                    <span>
                        <?php _e("Zobacz więcej", 'wapno-info'); ?>
                    </span>
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.685" height="14.496" viewBox="0 0 9.685 14.496">
                            <g id="Group_259" data-name="Group 259" transform="translate(1.389 1.389)">
                                <path id="Path_143" data-name="Path 143" d="M634.556,543.368l6.553,4.455a1.7,1.7,0,0,1,0,2.807l-6.553,4.455" transform="translate(-634.556 -543.368)" fill="none" stroke="#272924" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" />
                            </g>
                        </svg>
                    </i>
                </div>
            </div>
        </div>
</a>