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

        <div class="container--front">
            <div class="container">
            <!-- Nasze cele -->
            <div class="row">
                <?php if ( $section_2_title = get_field( 'section_2_title' ) ) : ?>
                    <h2>
                        <?php echo esc_html( $section_2_title ); ?>
                    </h2>
                <?php endif; ?>     
                <?php if ( $section_2_list = get_field( 'section_2_list' ) ) : ?>
                    <?php echo $section_2_list; ?>
                <?php endif; ?>
            </div>

            <?php if ( have_rows( 'teams' ) ) : ?>
                <div class="teams">
                    <?php while ( have_rows( 'teams' ) ) :
                        the_row(); ?>
                        <div class="team">
                            <?php
                            $teams_icon = get_sub_field( 'teams_icon' );
                            if ( $teams_icon ) : ?>
                                <img src="<?php echo esc_url( $teams_icon['url'] ); ?>" alt="<?php echo esc_attr( $teams_icon['alt'] ); ?>" />
                            <?php endif; ?>
        
                            <?php if ( $teams_title = get_sub_field( 'teams_title' ) ) : ?>
                                <h2>
                                    <?php echo esc_html( $teams_title ); ?>
                                </h2>
                            <?php endif; ?>
        
                            <?php if ( $teams_txt = get_sub_field( 'teams_txt' ) ) : ?>
                                <?php echo esc_html( $teams_txt ); ?>
                            <?php endif; ?>
                        </div>
    
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
            <div class="d-flex">
                <?php if ( $associations_title = get_field( 'associations_title' ) ) : ?>
                    <h3>
                        <?php echo esc_html( $associations_title ); ?>
                    </h3>
                <?php endif; ?>
                <?php if ( $associations_txt = get_field( 'associations_txt' ) ) : ?>
                    <?php echo esc_html( $associations_txt ); ?>
                <?php endif; ?>
            </div>

            <?php if ( have_rows( 'associations_international' ) ) : ?>
                <div class="row">
                    <?php while ( have_rows( 'associations_international' ) ) :
                        the_row(); ?>
                        <div class="col-md-6 col-xxl-3">
                            <?php
                            $associations_inter_logo = get_sub_field( 'associations_inter_logo' );
                            if ( $associations_inter_logo ) : ?>
                                <div class="">
                                    <img src="<?php echo esc_url( $associations_inter_logo['url'] ); ?>" alt="<?php echo esc_attr( $associations_inter_logo['alt'] ); ?>" />
                                </div>
                            <?php endif; ?>
                                
                            <?php if ( $associations_inter_txt = get_sub_field( 'associations_inter_txt' ) ) : ?>
                                <div class="">
                                    <?php echo esc_html( $associations_inter_txt ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                            
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>

        
        
        <div class="producers">
            <div class="container">
                <?php if ($producers_section_title = get_field('producers_section_title')) : ?>
                    <h2 class="big producers__sect--title">
                        <?php echo $producers_section_title; ?>
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
        <div class="amonit">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <?php if ( $amonit_title = get_field( 'amonit_title' ) ) : ?>
                            <h2>
                                <?php echo esc_html( $amonit_title ); ?>
                            </h2>
                        <?php endif; ?>
                        <?php if ( $amonit_txt = get_field( 'amonit_txt' ) ) : ?>
                            <?php echo $amonit_txt; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <?php if ( $history_title = get_field( 'history_title' ) ) : ?>
            <?php echo esc_html( $history_title ); ?>
        <?php endif; ?>
        <?php if ( $history_txt = get_field( 'history_txt' ) ) : ?>
            <?php echo $history_txt; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'history_rptr' ) ) : ?>
            <?php while ( have_rows( 'history_rptr' ) ) :
                the_row(); ?>
                
                <?php if ( $history_rptr_title = get_sub_field( 'history_rptr_title' ) ) : ?>
                    <?php echo esc_html( $history_rptr_title ); ?>
                <?php endif; ?>

                <?php if ( $history_rptr_txt = get_sub_field( 'history_rptr_txt' ) ) : ?>
                    <?php echo $history_rptr_txt; ?>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>

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
