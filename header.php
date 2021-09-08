<html lang="en">
<head>
  <meta charset=utf-8>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(''); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

<?php get_template_part('template-parts/mobile-header'); ?>
<?php get_template_part('template-parts/desktop-header'); ?>
