
<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
        <?php if($settings['select_layout']=='title_info'): ?>
        <h2 class="block-title color-white text-center"> <?php echo $settings['title']; ?></h2>
        <h5 class="title-caption text-center"> <?php echo $settings['small_title']; ?></h5>
        <?php else: ?>
            <h2 class="block-title color-white text-center"> <?php echo $settings['title']; ?></h2>
        <?php endif; ?>
</div>
