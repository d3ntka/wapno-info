<?php

/**
 * Template Name: Products
 * Description: Products template
 *
 */

get_header();

get_template_part('components/breadcrumbs/breadcrumbs');
?>



<div class="products">

<?php if ( $products_section_title = get_field( 'products_section_title' ) ) : ?>
	<h1>
        <?php echo esc_html( $products_section_title ); ?>
    </h1>
<?php endif; ?>




<div class="container--front">
    <div class="container">
        <div class="products__news">
            <div class="news">
                <div class="news__title">
                    <h2>
                        Wiedza i wiadomości
                    </h2>
                    <div class="subtitle">
                        którą uwielbiamy się dzielić
                    </div>
                </div>
            </div>
            <?php get_template_part('components/news/news-archive'); ?>
            <div class="news__more">
                Zobacz więcej
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35.21" height="35" viewBox="0 0 35.21 35">
                        <g id="Group_25" data-name="Group 25" transform="translate(-307.321 -407.358)">
                            <line id="Line_26" data-name="Line 26" x2="35.21" transform="translate(307.321 425.111)" fill="none" stroke="#272924" stroke-miterlimit="10" stroke-width="2.5"></line>
                            <line id="Line_28" data-name="Line 28" y1="35" transform="translate(325.198 407.358)" fill="none" stroke="#272924" stroke-miterlimit="10" stroke-width="2.5"></line>
                        </g>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</div>

</div><!-- Products -->


<?php
get_footer();
