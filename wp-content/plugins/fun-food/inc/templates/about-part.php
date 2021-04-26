<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s"
        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
        <h2 class="block-title"><?php echo $settings['about_main_title']; ?></h2>
        <h3> <?php echo $settings['about_small_title']; ?></h3>
       <?php echo $settings['about_details'];  ?>
    </div>
</div>
<!-- end col -->
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s"
        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="about-images">
            <img class="about-main" src="<?php echo $settings['about_main_image']['url'];  ?>" alt="About Main Image">
            <img class="about-inset" src="<?php echo $settings['about_thumb_image']['url'];  ?>" alt="About Inset Image">
        </div>
    </div>
</div>