<?php
class Testimonial_Elementor extends \Elementor\Widget_Base {


public function get_name() {
    return 'testimonial';
}
public function get_title() {
    return __( 'Testimonial', 'fun-food' );
}
public function get_icon() {
    return 'fas fa-comments-alt';
}
public function get_categories() {
   
    return [ 'fun_food_cat'];
}
protected function _register_controls() {

    $this->start_controls_section(
        'testimonial_section',
        [
            'label' => __( 'Testimonial', 'fun-food' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    $testimonial = new \Elementor\Repeater();
    $testimonial->add_control(
        'image',
        [
            'label' => __( 'Choose Image', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    $testimonial->add_group_control(
        \Elementor\Group_Control_Image_Size::get_type(),
        [
            'name' => 'image',
            'default' => 'thumbnail',
            'separator' => 'none',
        ]
    );
    $testimonial->add_control(
        'name', [
            'label' => __( 'Name', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $testimonial->add_control(
        'title', [
            'label' => __( 'Title', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $testimonial->add_control(
        'content', [
            'label' => __( 'Content', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
        ]
    );
    $this->add_control(
        'testimonial_list', [
            'label' => __( 'Testimonial List' , 'fun-food' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $testimonial->get_controls(),
        ]
            
    );
    $icon = new \Elementor\Repeater();
    $icon->add_control(
        'icon', [
            'label' => __( 'Icon', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $icon->add_control(
        'icon_link',
        [
            'label' => __( 'Link', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::URL,
            'placeholder' => __( 'https://your-link.com', 'fun-food' ),
           
        ]
    );
    $this->add_control(
        'icon_list', [
            'label' => __( 'Icon List' , 'fun-food' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $icon->get_controls(),
        ]
            
    );
    $this->end_controls_section();
}
protected function render() {
       
    $settings = $this->get_settings_for_display(); 
        include 'templates/testimonial-part.php';
}

}