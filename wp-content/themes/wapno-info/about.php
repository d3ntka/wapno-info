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
        <div class="about__header">
            <?php if ($section_title = get_field('section_title')) : ?>
                <h1 class="about_sect--title pb3">
                    <?php echo esc_html($section_title); ?>
                </h1>
            <?php endif; ?>
            <?php if ($section_txt = get_field('section_txt')) : ?>
                <div class="about_sect--txt col-lg-8">
                    <p>
                        <?php echo $section_txt; ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="container--front">
        <div class="goals__bg">
            <div class="container">
                <!-- Nasze cele -->
                <div class="row goals">
                    <?php if ($section_2_title = get_field('section_2_title')) : ?>
                        <div class="col-md-6">
                            <h2 class="big">
                                <?php echo $section_2_title; ?>
                            </h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($section_2_list = get_field('section_2_list')) : ?>
                        <div class="col-md-6 styled-list">
                            <?php echo $section_2_list; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container">

            <?php if (have_rows('teams')) : ?>
                <div class="row justify-content-md-between teams">
                    <?php while (have_rows('teams')) :
                        the_row(); ?>
                        <div class="col-md-5 teams__cont">
                            <?php
                            $teams_icon = get_sub_field('teams_icon');
                            if ($teams_icon) : ?>
                                <img class="teams__icon" src="<?php echo esc_url($teams_icon['url']); ?>" alt="<?php echo esc_attr($teams_icon['alt']); ?>" />
                            <?php endif; ?>

                            <?php if ($teams_title = get_sub_field('teams_title')) : ?>
                                <h2 class="big pb3">
                                    <?php echo $teams_title; ?>
                                </h2>
                            <?php endif; ?>

                            <?php if ($teams_txt = get_sub_field('teams_txt')) : ?>
                                <p>
                                    <?php echo esc_html($teams_txt); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <div class="inter row align-items-center">
                <?php if ($associations_title = get_field('associations_title')) : ?>
                    <div class="col-md-6">
                        <h3>
                            <?php echo esc_html($associations_title); ?>
                        </h3>
                    </div>
                <?php endif; ?>
                <?php if ($associations_txt = get_field('associations_txt')) : ?>
                    <div class="col-md-6">
                        <p>
                            <?php echo esc_html($associations_txt); ?>
                        </p>
                    </div>
                <?php endif; ?>

                <?php if (have_rows('associations_international')) : ?>
                    <div class="row inter__associations">
                        <?php while (have_rows('associations_international')) :
                            the_row(); ?>
                            <div class="col-md-6 col-xxl-3 inter__associations--cont">
                                <?php
                                $associations_inter_logo = get_sub_field('associations_inter_logo');
                                if ($associations_inter_logo) : ?>
                                    <div class="">
                                        <img src="<?php echo esc_url($associations_inter_logo['url']); ?>" alt="<?php echo esc_attr($associations_inter_logo['alt']); ?>" />
                                    </div>
                                <?php endif; ?>

                                <?php if ($associations_inter_txt = get_sub_field('associations_inter_txt')) : ?>
                                    <div class="inter__associations--txt">
                                        <p>
                                            <?php echo esc_html($associations_inter_txt); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>



    <div class="producers">
        <div class="container">
            <div class="row align-items-center justify-content-xl-end">
                <?php if ($producers_section_title = get_field('producers_section_title')) : ?>
                    <div class="col-xl-6 col-xxl-5 me-auto">
                        <h2 class="big producers__sect--title">
                            <?php echo $producers_section_title; ?>
                        </h2>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('producers_rptr')) : ?>
                    <?php while (have_rows('producers_rptr')) :
                        the_row();
                        $producer_logo = get_sub_field('producer_logo');
                    ?>
                        <div class="col-6 col-sm-5 col-md-auto col-xxl-2 producer__col">
                            <div class="producer">
                                <?php
                                if ($producer_logo) : ?>
                                    <div class="producer__img">
                                        <img src="<?php echo esc_url($producer_logo['url']); ?>" alt="<?php echo esc_attr($producer_logo['alt']); ?>" />
                                    </div>
                                <?php endif; ?>

                                <?php if ($producer_txt = get_sub_field('producer_txt')) : ?>
                                    <div class="producer__txt">
                                    <p>
                                        <?php echo $producer_txt; ?>
                                    </p>    
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <div class="container--front">
        <!-- AMONIT -->
        <div class="amonit">
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-7">
                        <?php if ($amonit_title = get_field('amonit_title')) : ?>
                            <h2 class="big pb3">
                                <?php echo esc_html($amonit_title); ?>
                            </h2>
                        <?php endif; ?>
                        <?php if ($amonit_txt = get_field('amonit_txt')) : ?>
                            <p>
                                <?php echo $amonit_txt; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container history">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <?php if ($history_title = get_field('history_title')) : ?>
                        <h2 class="big">
                            <?php echo $history_title; ?>
                        </h2>
                    <?php endif; ?>
                </div>
                <div class="col-lg-5">
                    <?php if ($history_txt = get_field('history_txt')) : ?>
                        <p>
                            <?php echo $history_txt; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (have_rows('history_rptr')) : ?>
                <div class="row history__eras">
                    <?php while (have_rows('history_rptr')) :
                        the_row(); ?>
                        <div class="col-lg-4">
                            <div class="history__eras--cont">
                                <?php if ($history_rptr_title = get_sub_field('history_rptr_title')) : ?>
                                    <div class="history__eras--title">
                                        <h3>
                                            <?php echo esc_html($history_rptr_title); ?>
                                        </h3>
                                    </div>
                                <?php endif; ?>

                                <?php if ($history_rptr_txt = get_sub_field('history_rptr_txt')) : ?>
                                    <div class="history__eras--txt pe-md-5 me-md-5">
                                    <p>
                                        <?php echo $history_rptr_txt; ?>
                                    </p>    
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="container">
                <?php
                $link = get_field('page_footer_link');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a class="button__aux" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <div class="d-flex align-items-center">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52.643" height="49.725" viewBox="0 0 52.643 49.725">
                                <g id="Group_100" data-name="Group 100" transform="translate(-415.654 -303.017)">
                                    <g id="Group_28" data-name="Group 28" transform="translate(438.013 324.216)">
                                        <circle id="Ellipse_9" data-name="Ellipse 9" cx="8.454" cy="8.454" r="8.454" transform="translate(0 0)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5" />
                                        <path id="Path_31" data-name="Path 31" d="M453.791,338.664a5.467,5.467,0,0,1,7.732,0" transform="translate(-449.203 -334.076)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5" />
                                        <g id="Group_27" data-name="Group 27" transform="translate(11.166 11.167)">
                                            <path id="Rectangle_32" data-name="Rectangle 32" d="M0,0H3.093a0,0,0,0,1,0,0V10.105a1.547,1.547,0,0,1-1.547,1.547h0A1.547,1.547,0,0,1,0,10.105V0A0,0,0,0,1,0,0Z" transform="translate(3.646 5.833) rotate(-45)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5" />
                                            <path id="Path_32" data-name="Path 32" d="M468.638,348.815l1.094,1.093a1.341,1.341,0,0,1,0,1.9l-3.5,3.5a1.34,1.34,0,0,1-1.9,0l-1.094-1.094" transform="translate(-463.242 -348.815)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5" />
                                        </g>
                                    </g>
                                    <path id="Path_33" data-name="Path 33" d="M467.1,340.6l-3.837-12.95-4.242-2.158,6.4-5.311v-2.6l-5.755-9.353H435.733v-3.6l-7.484,1.918-1.918,3.837-9.352,1.679,1.679,24.221,6,3.6,1.2,3.6h8.393l4.8,7.674,5.276-2.4,11.077.719v2.158" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5" />
                                </g>
                            </svg>
                        </i>
                        <span>
                            <?php echo esc_html($link_title); ?>
                        </span>
                    </div>
                    <div class="d-flex align-items-center color-white button"><?php _e("Czytaj"); ?>
                        <div class="chevron_btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.295" height="21.901" viewBox="0 0 14.295 21.901">
                                <path id="Path_143" data-name="Path 143" d="M634.556,543.368l10.693,7.271a2.77,2.77,0,0,1,0,4.581l-10.693,7.271" transform="translate(-633.167 -541.979)" fill="none" stroke="#9fb7c2" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($page_footer_txt = get_field('page_footer_txt')) : ?>
        <div class="container">
            <div class="about__footer">
                <p>
                    <?php echo $page_footer_txt; ?>
                </p>
            </div>
        </div>
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
                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="news__more">
                    Zobacz więcej
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35.21" height="35" viewBox="0 0 35.21 35">
                            <g id="Group_25" data-name="Group 25" transform="translate(-307.321 -407.358)">
                                <line id="Line_26" data-name="Line 26" x2="35.21" transform="translate(307.321 425.111)" fill="none" stroke="" stroke-miterlimit="10" stroke-width="2.5"></line>
                                <line id="Line_28" data-name="Line 28" y1="35" transform="translate(325.198 407.358)" fill="none" stroke="" stroke-miterlimit="10" stroke-width="2.5"></line>
                            </g>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>

</div>

<!-- </div> -->
<!-- Products -->


<?php
get_footer();
