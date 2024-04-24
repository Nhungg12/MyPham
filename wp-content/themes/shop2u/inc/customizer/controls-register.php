<?php
function shop2u_customizer_register_controls( $wp_customize ){
	get_template_part('/inc/customizer/custom-controls/control-alpha-color');
	get_template_part('/inc/customizer/custom-controls/control-category');
	get_template_part('/inc/customizer/custom-controls/control-editor-custom');
	get_template_part('/inc/customizer/custom-controls/control-misc');
	get_template_part('/inc/customizer/custom-controls/control-primary-colors');
	get_template_part('/inc/customizer/custom-controls/control-repeater');
	get_template_part('/inc/customizer/custom-controls/control-section-plus');
	get_template_part('/inc/customizer/custom-controls/control-textarea-custom');
	get_template_part('/inc/customizer/custom-controls/control-theme-support');
	get_template_part('/inc/customizer/custom-controls/control-reorder');
	get_template_part('/inc/customizer/custom-controls/customizer-select-multiple/class/control-select-multiple');
	$wp_customize->register_control_type( 'Shop2u_Multiselect_Control' );
	get_template_part('/inc/customizer/custom-controls/customizer-range/class/control-range');
	$wp_customize->register_control_type( 'Shop2u_Range_Control' );
	get_template_part('/inc/customizer/custom-controls/iconpicker-control/control-icon-picker');
}
add_action('customize_register','shop2u_customizer_register_controls');