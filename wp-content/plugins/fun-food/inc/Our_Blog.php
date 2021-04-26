<?php
class Our_Blog extends \Elementor\Widget_Base {


public function get_name() {
    return 'our_blog';
}
public function get_title() {
    return __( 'Post', 'fun-food' );
}
public function get_icon() {
    return 'fa fa-cubes';
}
public function get_categories() {
   
    return [ 'fun_food_cat'];
}
protected function _register_controls() {

    $this->start_controls_section(
        'our_blog_section',
        [
            'label' => __( 'Post', 'fun-food' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    $this->end_controls_section();
}
protected function render() {
       
    $settings = $this->get_settings_for_display(); 
        include 'templates/our-blog.php';
}

}