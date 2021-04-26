<div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="block-title text-center">
                <?php echo get_the_title(209); ?>
            </h2>
                <div class="blog-box clearfix">
                <?php 
                $args=array(
                    'post_type'         => 'post',
                    'post_status'       => 'publish',
                    'order'             => 'DESC',
                    'posts_per_page'    =>  '6'
                );
                $posts=new WP_Query($args);
                if($posts->have_posts()):
                    while($posts->have_posts()):
                        $posts->the_post();
                ?>
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-block">
                                <div class="blog-img-box">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                    <div class="overlay">
                                        <a href="<?php echo home_url(); ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="blog-dit">
                                    <p><span><?php the_date(); ?></span></p>
                                    <h2><?php the_title(); ?></h2>
                                    <h5>BY <?php the_author(); ?></h5>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                <?php
                    wp_reset_query();
                    endwhile;
                endif;
               ?>
                </div>
                <!-- end blog-box -->

                <div class="blog-btn-v">
                    <a class="hvr-underline-from-center" href="#">View the Blog</a>
                </div>

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>