<?php
class Pricing_Plan_Elementor extends \Elementor\Widget_Base {


public function get_name() {
    return 'pricing-plan';
}
public function get_title() {
    return __( 'Pricing Catelog', 'fun-food' );
}
public function get_icon() {
    return 'fas fa-album-collection';
}
public function get_categories() {
   
    return [ 'fun_food_cat'];
}
protected function _register_controls() {

    $this->start_controls_section(
        'pricing_catelog_section',
        [
            'label' => __( 'Pricing Catelog', 'fun-food' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    $price_plan = new \Elementor\Repeater();
    $price_plan->add_control(
        'image',
        [
            'label' => __( 'Choose Image', 'thi-widget' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    $price_plan->add_group_control(
        \Elementor\Group_Control_Image_Size::get_type(),
        [
            'name' => 'image',
            'default' => 'thumbnail',
            'separator' => 'none',
        ]
    );
    $price_plan->add_control(
        'title', [
            'label' => __( 'About Main Title', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $price_plan->add_control(
        'price', [
            'label' => __( 'Price', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $price_plan->add_control(
        'per_m_y', [
            'label' => __( 'Per Month/Year', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $price_plan->add_control(
        'list_product', [
            'label' => __( 'List Product', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::WYSIWYG,
            'label_block' => true,
        ]
    );
    $price_plan->add_control(
        'btn_text', [
            'label' => __( 'Button Title', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
        ]
    );
    $this->add_control(
        'pricing_plan',
        [
            'label' => __( 'Pricing List', 'fun-food' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $price_plan->get_controls(),
            'default' => [
                [
                    'title' => __( 'Title #1', 'fun-food' ),
                ],
                [
                    'title' => __( 'Title #2', 'fun-food' ),
                ],
            ],
            'title_field' => '{{{ title }}}',
        ]
    );
    $this->end_controls_section();
}
protected function render() {
       
    $settings = $this->get_settings_for_display(); 
        include 'templates/pricing-plan.php';
}

}