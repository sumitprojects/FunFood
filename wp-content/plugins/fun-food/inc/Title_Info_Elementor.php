<?php
class Title_Info_Elementor extends \Elementor\Widget_Base {


public function get_name() {
    return 'title_info';
}
public function get_title() {
    return __( 'Title And Info', 'fun-food' );
}
public function get_icon() {
    return 'fas fa-heading';
}
public function get_categories() {
   
    return [ 'fun_food_cat'];
}
protected function _register_controls() {

    $this->start_controls_section(
        'title_info_section',
        [
            'label' => __( 'Title & SmallInfo', 'fun-food' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    $this->add_control(
        'select_layout',
        [
            'label' => __( 'Select Layout', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'title_info',
            'options' => [
                'title'  => __( 'Title', 'fun-food' ),
                'title_info' => __( 'Title & Info', 'fun-food' ),
            ],
        ]
    );
    $this->add_control(
        'title', [
            'label' => __( 'Heading', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $this->add_control(
        'small_title', [
            'label' => __( 'Description', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
        ]
    );
    
    
    $this->end_controls_section();
}
protected function render() {
       
    $settings = $this->get_settings_for_display(); 
        include 'templates/title-info-part.php';
}

}