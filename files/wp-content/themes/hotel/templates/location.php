<?php global $redux_opt; ?>
<!-- .content-item -->
<div data-anchor="location" class="content-item section" style="background-image: url(<?php echo $redux_opt['bg_location']['url']; ?>);">
    <div class="item-container">
        <div class="item-content">
            <h2 class="default-title default-title--thin element-after">

                <?php if( !empty($_GET) && is_array($_GET) ): ?>

                    <?php $count = 0; $stop = false; $show = false; ?>
                    <?php $params = $redux_opt['utm_location']; ?>

                    <?php foreach( (array)$params as $val ): ?>

                        <?php  
                        $param        = explode("=", $val);
                        $incoming_arr = $_GET;
                        foreach( (array)$incoming_arr as $inc_k => $inc_v ): ?>

                            <?php if( $inc_k == $param[0] && stristr($inc_v, $param[1]) !== FALSE ): ?>

                                <?php $count_t = 1; ?>
                                <?php foreach( (array) $redux_opt['title_location'] as $title_item ): ?>
                                    <?php if($count_t == 1): ?>
                                        <span><?php echo $param[1]; ?></span>
                                    <?php else: ?>
                                        <span><?php echo $title_item; ?></span>
                                    <?php endif; ?>
                                <?php ++$count_t; endforeach; ?>
                                <?php $stop = true; $show = false; break; ?>

                            <?php else: ?>  
                                <?php $show = true; ?>
                            <?php endif; ?>

                        <?php endforeach; ?>

                        <?php if($stop) break; ?>

                    <?php endforeach; ?>

                    <?php if($show): ?>
                        <?php foreach( (array) $redux_opt['title_location'] as $title_item ): ?>
                            <span><?php echo $title_item; ?></span>
                        <?php endforeach; ?>
                    <?php endif; ?> 

                <?php else: ?>  

                	<?php foreach( (array) $redux_opt['title_location'] as $title_item ): ?>
                		<span><?php echo $title_item; ?></span>
            		<?php endforeach; ?>

                <?php endif; ?>

            </h2>
            <div class="default-subtitle default-subtitle--line-height element-after">
                <p>
                	<?php foreach( (array) $redux_opt['desc_location'] as $desc_item ): ?>
	            		<span><?php echo $desc_item; ?></span>
	        		<?php endforeach; ?>
                </p>
            </div>
            <div class="default-subtitle default-subtitle--diff"><?php echo $redux_opt['status_location']; ?></div>
        </div>
        <a href="#" class="default-btn" data-popup="popupReview" style="background-color: <?php echo $redux_opt['color_btn_location']; ?>;">
        	<span class="default-btn__title"><?php echo $redux_opt['text_btn_location']; ?></span>
        </a>
    </div>
</div>
<!--END:.content-item -->