<?php

/**
 * Template Name: About
 * Description: About template
 *
 */

get_header();

get_template_part('components/breadcrumbs/breadcrumbs');
?>

<!-- <div class="products_and_producers"> -->

    <div class="about">

        <div class="container">
            <?php if ($section_title = get_field('section_title')) : ?>
                <h1 class="about_sect--title">
                    <?php echo esc_html($section_title); ?>
                </h1>
            <?php endif; ?>
            <?php if ($section_txt = get_field('section_txt')) : ?>
                <div class="about_sect--txt col-lg-9">
                    <?php echo $section_txt; ?>
                </div>
            <?php endif; ?>
        </div>




        
        
        <div class="producers">
            <div class="container">
                <?php if ($producers_section_title = get_field('producers_section_title')) : ?>
                    <h2 class="big producers__sect--title">
                        <?php echo esc_html($producers_section_title); ?>
                    </h2>
                <?php endif; ?>

                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <?php if (have_rows('producers_rptr')) : ?>
                            <div class="row producer__row">

                                <?php while (have_rows('producers_rptr')) :
                                    the_row();
                                    $producer_logo = get_sub_field('producer_logo');
                                ?>
                                    <div class="col-6 mb-4 producer__col">
                                        <div class="producer">

                                            <?php
                                            if ($producer_logo) : ?>
                                                <div class="producer__img">
                                                    <img src="<?php echo esc_url($producer_logo['url']); ?>" alt="<?php echo esc_attr($producer_logo['alt']); ?>" />
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($producer_txt = get_sub_field('producer_txt')) : ?>
                                                <div class="producer__txt">
                                                    <?php echo $producer_txt; ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php
                                            $link = get_sub_field('producer_link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_blank';
                                            ?>
                                                <a class="producer__btn btn btn-primary button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                <?php endwhile; ?>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


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

<!-- </div> --> <!-- Products -->


<?php
get_footer();
