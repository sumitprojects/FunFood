<?php
    $args=array(
        'post_status' => 'publish', 
        'post_type' => 'product',
        'order' =>'DESC',
        'posts_per_page' => '10',
        
    );
    $products=new WP_Query($args);
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="special-box">
        <div id="owl-demo">
            <?php 
            if($products->have_posts()):
                while($products->have_posts()):
                    $products->the_post();
            ?>
            <div class="item item-type-zoom">
                <a href="#" class="item-hover">
                    <div class="item-info">
                        <div class="headline">
                            <?php the_title(); ?>
                            <div class="line"></div>
                            <div class="dit-line"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                </a>
                <div class="item-img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="sp-menu">
                </div>
            </div>
            <?php
        wp_reset_query();
endwhile;
endif;
        ?>
        </div>
    </div>
</div>