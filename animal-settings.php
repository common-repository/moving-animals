<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function mapl_settings(){
register_setting('mapl_settings_group','mapl_speed');
register_setting('mapl_settings_group','mapl_style');
register_setting('mapl_settings_group','mapl_size');
register_setting('mapl_settings_group','mapl_direction');
}

function mapl_register_settings(){
register_setting('mapl_settings_group','mapl_speed');
register_setting('mapl_settings_group','mapl_style');
register_setting('mapl_settings_group','mapl_size');
register_setting('mapl_settings_group','mapl_direction');
}

register_activation_hook(__FILE__,'mapl_install');
register_deactivation_hook(__FILE__,'mapl_deactivate');
add_action('wp_footer','mapl_footer');
add_action('admin_menu','mapl_menu');
add_action('admin_init','mapl_settings');