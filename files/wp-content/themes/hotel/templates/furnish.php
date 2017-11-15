<?php global $redux_opt; ?>
<!-- .content-item -->
<div data-anchor="furnish" class="content-item section" style="background-image: url(<?php echo $redux_opt['bg_furnish']['url']; ?>);">
    <div class="item-container">
        <div class="item-content">
            <h2 class="default-title element-after">
            	<?php foreach( (array) $redux_opt['title_furnish'] as $title_item ): ?>
            		<span><?php echo $title_item; ?></span>
        		<?php endforeach; ?>
                <span class="default-title default-title--thin">
                	<?php foreach( (array) $redux_opt['subtitle_furnish'] as $subtitle_item ): ?>
	            		<span><?php echo $subtitle_item; ?></span>
	        		<?php endforeach; ?>
                </span>
            </h2>
            <?php if( !empty($redux_opt['desc_furnish']) ): ?>
            <div class="default-subtitle default-subtitle--line-height element-after">
                <p>
                	<?php foreach( (array) $redux_opt['desc_furnish'] as $desc_item ): ?>
	            		<span><?php echo $desc_item; ?></span>
	        		<?php endforeach; ?>
                </p>
            </div>
        	<?php endif; ?>
        </div>
        <a href="#" class="default-btn" data-popup="popupReview" style="background-color: <?php echo $redux_opt['color_btn_furnish']; ?>;">
        	<span class="default-btn__title"><?php echo $redux_opt['text_btn_furnish']; ?></span>
        </a>
    </div>
</div>
<!--END:.content-item -->