<?php
// Get The Post's Author ID
$authorID = get_the_author_meta('ID');
$authorname = get_the_author_meta('display_name', $authorID);

// Set the image size. Accepts all registered images sizes and array(int, int)
$avatarSize = 'thumbnail';
$imgURL='';


// Get the image URL using the author ID and image size params
if (function_exists('get_wpupa_url'))  
	$imgURL = get_wpupa_url($authorID, ['size' => $avatarSize]);

?>
<div class="news-thumbnail card">
    <?php if ( has_post_thumbnail( ) ) : ?>
        <a class="news-thumbnail__img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
    <?php endif; ?>
    <div class="news-thumbnail__body card-body">

        <div class="d-flex news-thumbnail__meta align-items-center justify-content-between">
            <div class="news-thumbnail__author">
                <?php echo '<img class="news__avatar" src="'. $imgURL .'" alt="'. $authorname .'">'; ?>

                <?php echo get_the_author();?>
            </div>
            <div class="news-thumbnail__date date">
                <?php echo get_the_date( 'd-m-Y '); ?>
            </div>
        </div>
        <div class="news-thumbnail__title">
        
            <?php the_title(); ?>
        </div>

    </div>
</div>
