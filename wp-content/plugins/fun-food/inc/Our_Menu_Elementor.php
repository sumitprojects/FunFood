<?php
class Our_Menu_Elementor extends \Elementor\Widget_Base {


public function get_name() {
    return 'our_menu';
}
public function get_title() {
    return __( 'Our Menu', 'fun-food' );
}
public function get_icon() {
    return 'fa fa-star';
}
public function get_categories() {
   
    return [ 'fun_food_cat'];
}
protected function _register_controls() {

    $this->start_controls_section(
        'our_menu_section',
        [
            'label' => __( 'stuff', 'fun-food' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    

    $this->end_controls_section();
}
protected function render() {
       
    $settings = $this->get_settings_for_display(); 
        include 'templates/our-menu-part.php';
}

}