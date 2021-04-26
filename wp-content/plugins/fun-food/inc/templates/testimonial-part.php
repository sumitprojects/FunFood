<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="team-box">
        <div class="row">
            <?php foreach($settings['testimonial_list'] as $index => $test): 
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="sf-team">
                    <div class="thumb">
                        <a href="#"><img src="<?php echo $test['image']['url']; ?>" alt=""></a>
                    </div>
                    <div class="text-col">
                        <h3><?php echo $test['name'] ?></h3>
                        <p><?php echo $test['content'] ?></p>
                        <ul class="team-social">
                        <?php foreach($settings['icon_list'] as $icon): ?>
                            <li><a href="<?php echo $icon['icon_link']['url']; ?>"><i class="<?php echo $icon['icon']; ?>" aria-hidden="true"></i></a></li>
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- end col -->