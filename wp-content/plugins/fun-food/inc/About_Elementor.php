<?php
class About_Elementor extends \Elementor\Widget_Base {


public function get_name() {
    return 'about';
}
public function get_title() {
    return __( 'About Us', 'fun-food' );
}
public function get_icon() {
    return 'fas fa-info-square';
}
public function get_categories() {
   
    return [ 'fun_food_cat'];
}
protected function _register_controls() {

    $this->start_controls_section(
        'about_section',
        [
            'label' => __( 'About Us', 'fun-food' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    $this->add_control(
        'about_main_title', [
            'label' => __( 'About Main Title', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $this->add_control(
        'about_small_title', [
            'label' => __( 'About Small Title', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $this->add_control(
        'about_details', [
            'label' => __( 'Description', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::WYSIWYG,
            'label_block' => true,
        ]
    );
    $this->add_control(
        'about_main_image',
        [
            'label' => __( 'Choose Image', 'thi-widget' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Image_Size::get_type(),
        [
            'name' => 'about_main_image',
            'default' => 'large',
            'separator' => 'none',
        ]
    );
    $this->add_control(
        'about_thumb_image',
        [
            'label' => __( 'Choose Image', 'thi-widget' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Image_Size::get_type(),
        [
            'name' => 'about_thumb_image',
            'default' => 'thumbnail',
            'separator' => 'none',
        ]
    );
    $this->end_controls_section();
}
protected function render() {
       
    $settings = $this->get_settings_for_display(); 
        include 'templates/about-part.php';
}

}