<div class="news-thumbnail card">
    <?php if ( has_post_thumbnail( ) ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
    <?php endif; ?>
    <div class="news-thumbnail__body card-body">

        <div class="d-flex news-thumbnail__meta justify-content-between">
            <div class="news-thumbnail__author">
                <?php echo get_the_author();?>
            </div>
            <div class="news-thumbnail__date">
                <?php echo get_the_date( 'd-m-Y '); ?>
            </div>
        </div>
        <div class="news-thumbnail__title">
        
            <?php the_title(); ?>
        </div>

    </div>
</div>
