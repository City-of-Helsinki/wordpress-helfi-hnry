<?php
    $picture = esc_attr( get_option( 'site_logo' ) ) ;
?>
<h1>Logo</h1>
<?php settings_errors(); ?>

<div id="logo-picture-preview" class="logo-picture" style="background-image: url(<?php print $picture; ?>);">
</div>

<form method="post" action="options.php" class="johannes-general-form">
    <?php settings_fields( 'mysteerio-settings-group'); ?>
    <?php do_settings_sections( 'mysteerio_theme' ); ?>
    <?php submit_button(); ?>
</form>
