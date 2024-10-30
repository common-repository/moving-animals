<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function mapl_admin_table_style(){
wp_enqueue_style( 'tableStyle', plugins_url('css/ts.css',__FILE__) ); 
}
add_action( 'admin_enqueue_scripts', 'mapl_admin_table_style' );
function mapl_menu(){
add_menu_page('Moving Animals','Moving Animals','manage_options','maplmenu','mapl_settings_page',plugins_url('imgs/animalicon.png',__FILE__));
}
function mapl_settings_page(){
?>
<h2 style="text-align:center; font-weight:bold;"><img width="5%;" src="<?php echo plugins_url('imgs/animalimg.png',__FILE__); ?>"/><br>Moving Animals</h2>
<form method="post" action="options.php">
<?php
wp_nonce_field('update-options');
settings_fields('mapl_settings_group');
?>
<div style="width:98.5%;">
<table  class="widefat" style="width:100% !important;">
<thead>
<tr>
<th colspan="6">
<span style=" font-size:16px;">Moving Animals Settings</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Speed
</th>
<!--[if lte IE 9]>
<td >
<input type="radio" name="mapl_speed" value="250" <?php if(get_option('mapl_speed')=='250') echo 'checked';  ?> > <label for="mapl_speed">Slow</label>  </td>
<td ><input type="radio" name="mapl_speed" value="150" <?php if(get_option('mapl_speed')=='150') echo 'checked';  ?> > <label for="mapl_speed">Normal</label></td>
<td ><input type="radio" name="mapl_speed" value="50" <?php if(get_option('mapl_speed')=='50') echo 'checked';  ?> > <label for="mapl_speed">Fast</label>
</td>
<td></td>
<![endif]-->
<!--[if !IE]> -->
<td colspan="4">
Fast <input style="width:30%;" type="range" name="mapl_speed" value="<?php echo get_option('mapl_speed'); ?>" min="20" max="300" step="5" /> Slow  </td> 
<!-- <![endif]-->
</tr>
<tr >
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Style
</th>
<td >
<input type="radio" name="mapl_style" value="s1" <?php if(get_option('mapl_style')=='s1') echo 'checked';  ?> > Wolf </td>
<td ><input type="radio" name="mapl_style" value="s2" <?php if(get_option('mapl_style')=='s2') echo 'checked';  ?> > Falcon </td>
<td ><input type="radio" name="mapl_style" value="s3" <?php if(get_option('mapl_style')=='s3') echo 'checked';  ?> > cheetah </td>
<td ><input type="radio" name="mapl_style" value="s4" <?php if(get_option('mapl_style')=='s4') echo 'checked';  ?> > Horse </td>
<td ><input type="radio" name="mapl_style" value="s5" <?php if(get_option('mapl_style')=='s5') echo 'checked';  ?> > Pholidota </td>
</tr>
<tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Size
</th>
<!--[if lte IE 9]>
<td style="border-bottom-width:1px !important;">
<input type="radio" name="mapl_size" value="9" <?php if(get_option('mapl_size')=='9') echo 'checked';  ?> > Small </td>
<td><input type="radio" name="mapl_size" value="12" <?php if(get_option('mapl_size')=='12') echo 'checked';  ?> > Normal </td>
<td><input type="radio" name="mapl_size" value="18" <?php if(get_option('mapl_size')=='18') echo 'checked';  ?> > Big  
</td>
<td></td>
<![endif]-->
<!--[if !IE]> -->
<td colspan="4">
Small <input style="width:30%;" type="range" name="mapl_size" value="<?php echo get_option('mapl_size'); ?>" min="8" max="20" step="0.1" /> Big  </td> 
<!-- <![endif]-->

</tr>
<tr>
<th scope="row" style="border-bottom-width:0px !important; width:125px;">
Direction
</th>
<td style="border-bottom-width:0px !important;">
<input type="radio" name="mapl_direction" value="rtl" <?php if(get_option('mapl_direction')=='rtl') echo 'checked';  ?> > Right To Left  </td>
<td><input type="radio" name="mapl_direction" value="ltr" <?php if(get_option('mapl_direction')=='ltr') echo 'checked';  ?> > Left To Right 
</td>
<td></td>
<td></td>
</tr>
</tbody>
<tfoot>
<tr>
<th colspan="6" >
<input type="submit" class="button-primary"  value="Save Changes">
</th>
</tr>
</tfoot>
</table>
</div>
<?php
}