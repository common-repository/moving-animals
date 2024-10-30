<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function mapl_install(){
add_option('mapl_speed','150');
add_option('mapl_style','s1');
add_option('mapl_size','12');
add_option('mapl_direction','ltr');
}

function mapl_deactivate(){
delete_option('mapl_speed');
delete_option('mapl_style');
delete_option('mapl_size');
delete_option('mapl_direction');
}