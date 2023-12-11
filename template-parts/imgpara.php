<?php // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
} ?>

<?php
    $image_right = get_field('right');
    $right = '';
    $left = '';
    if($image_right){
        $right = 'imgpara__grid__item--right';
        $left = 'imgpara__grid__item--left';
    }
    $image_alt = get_field('image_alt');

    echo $image_alt;
    $closer = get_field('closer');
    if($closer){
        $imgpara_grid ='imgpara__grid--closer';
    }else{
        $imgpara_grid = 'imgpara__grid';
    }
    $style='';
    if(get_field('style1')){
        $style = 'imgpara__grid__item--style1';
        $imgpara_grid .= ' imgpara__grid--padding';
    }
    if(get_field('style2')){
        $style = 'imgpara__grid__item--style2';
        $imgpara_grid .= ' imgpara__grid--padding';
    }
    if(get_field('style3')){
        $style = 'imgpara__grid__item--style3';
        $imgpara_grid .= ' imgpara__grid--padding';
    }
?>
<div class="imgpara">
        <div class="imgpara__title">
            <?php esc_html(the_field('title')); ?>
        </div>
        <div class="<?php echo esc_html($imgpara_grid); ?>">
            <div class="imgpara__grid__item imgpara__grid__item--image <?php echo esc_attr($right); ?> <?php echo esc_attr($style); ?>" >
               <img src="<?php esc_html(the_field('image')); ?>" alt="<?php echo esc_attr($image_alt); ?>">
               <?php if(get_field('style1')){ ?>
                <div class="imgpara__grid__item--square1"></div>
               <?php } ?>
               <?php if(get_field('style2')){ ?>
                <div class="imgpara__grid__item--square2"></div>
               <?php } ?>
               <?php if(get_field('style3')){ ?>
                <div class="imgpara__grid__item--square3"></div>
               <?php } ?>
            </div>
            <div class="imgpara__grid__item imgpara__grid__item--paragraph <?php echo esc_html($left); ?>" >
                <?php esc_html(the_field('paragraph')); ?>
            </div>

        </div>
</div>
