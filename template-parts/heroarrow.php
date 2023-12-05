<?php // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
} ?>

<div class="page-container">
<div class="heroarrow" style="background-color:<?php esc_html(the_field('color'));?>" aria-hidden="true">
<img src="<?php esc_html(the_field('arrow')); ?>" alt="">
</div>
</div>