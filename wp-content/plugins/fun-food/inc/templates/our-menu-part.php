<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="tab-menu">
        <div class="slider slider-nav">
            <div class="tab-title-menu">
                <li data-filter="*" class="btn">
                    <h2>OUR MENU</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/daily-specials.png" alt="">

                </li>
            </div>
            <?php $category = get_categories(['taxonomy'=>'product_cat','order'=>'DESC','exclude'=>array(16)]); ?>
            <?php foreach($category as $index => $cat):
            $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
            $image = wp_get_attachment_url( $thumbnail_id );
            ?>
            <div class="tab-title-menu">
                <li data-filter=".<?php echo $cat->slug; ?>" class="btn">
                    <h2><?php echo $cat->name; ?></h2>
                    <p> <img src="<?php echo $image; ?>" alt=""></p>
                </li>
            </div>
            <?php endforeach;  ?>
        </div>
        <div class="slider slider-single">
            <div>
                <?php
                    $args=array(
                        'post_status' => 'publish', 
                        'post_type' => 'product',
                        'order' =>'DESC',
                        'posts_per_page' => '100',
                        'taxonomy'=>'product_cat',
                    );
                    $products=new WP_Query($args);
                    if($products->have_posts()):
                        while($products->have_posts()):
                            $products->the_post();
                            $slugs = [];
                            $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
                            foreach ($product_cats as $product_cat){
                                $slugs[] = $product_cat->slug;
                            }
                ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 <?php echo  implode(' ', $slugs)?>"
                    data-category=" <?php echo  implode(' ', $slugs)?>">
                    <div class="offer-item">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive">
                        <div>
                            <h3><?php the_title(); ?></h3>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <span class="offer-price">$8.5</span>
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
    <!-- end tab-menu -->
</div>