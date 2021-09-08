<?php get_header();


?>
<main class="main-page">
    <div class="page-container">
            <?php if ( have_posts() ) { ?>
                <ul class="search-results">
                    <?php while ( have_posts() ) { the_post(); ?>
                        <li class="search-result">
                        <h3><a href="<?php echo esc_url(get_permalink()); ?>">
                                <?php the_title();  ?>
                                </a></h3>
                            <div class="search-result__image">
                                <?php  the_post_thumbnail('medium') ?>
                            </div>
                            <div class="search-result__content">

                                <div class="h-readmore"> <a href="<?php the_permalink(); ?>">
                                <?php if ( function_exists ( 'pll_e' ) ){
                                pll_e( 'Lue lisää' );
                                }else{
                                    echo 'Lue lisää';
                                } ?>

                                </a></div>
                            </div>

                        </li>
                        <hr>
                    <?php } ?>
                </ul>
            <?php echo paginate_links(); ?>
            <?php } ?>

    </div>
</main>
<?php get_footer(); ?>
