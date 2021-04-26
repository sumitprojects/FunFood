<?php
class Product_Menu_Elementor extends \Elementor\Widget_Base {


public function get_name() {
    return 'product_menu';
}
public function get_title() {
    return __( 'Product Menu', 'fun-food' );
}
public function get_icon() {
    return 'fab fa-product-hunt';
}
public function get_categories() {
   
    return [ 'fun_food_cat'];
}
protected function _register_controls() {

    $this->start_controls_section(
        'product_section',
        [
            'label' => __( 'Product Menu', 'fun-food' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    $this->add_control(
        'title', [
            'label' => __( 'Main Title', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $this->add_control(
        'small_title', [
            'label' => __( 'Small Title', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $this->end_controls_section();
}
protected function render() {
       
    $settings = $this->get_settings_for_display(); 
        include 'templates/special-menu-product.php';
}

}