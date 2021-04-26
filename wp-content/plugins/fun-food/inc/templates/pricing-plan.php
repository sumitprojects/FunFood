<div class="panel-pricing-in">
   <?php foreach($settings['pricing_plan'] as $price): ?>
    <div class="col-md-4 col-sm-4 text-center">
        <div class="panel panel-pricing">
            <div class="panel-heading">
                <div class="pric-icon">
                    <img src="<?php echo $price['image']['url'] ?>" alt="" />
                </div>
                <h3><?php echo $price['title'] ?></h3>
            </div>
            <div class="panel-body text-center">
                <p><strong><?php echo $price['price'] ?>/<span><?php echo $price['per_m_y'] ?></span></strong></p>
            </div>
            <ul class="list-group text-center">
               <?php echo $price['list_product'] ?>
            </ul>
            <div class="panel-footer">
                <a class="btn btn-lg btn-block hvr-underline-from-center" href="<?php echo $price[''] ?>"><?php echo $price['btn_text'] ?></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    
</div>