<?php get_header(); ?>
<div class="page-container">
    <main class="main-page">
        <div class="page-content">
            <div class="content-404">
                <h1>
                <?php if ( function_exists ( 'pll_e' ) ){
                    pll_e( 'Voi harmi!' );
                }else{
                    echo 'Voi harmi!';
                } ?></h1>
                <p>
                <?php if ( function_exists ( 'pll_e' ) ){
                    pll_e( 'Hakemaasi sivua ei löytynyt!' );
                }else{
                    echo 'Hakemaasi sivua ei löytynyt!';
                } ?>
                </p>

            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>
