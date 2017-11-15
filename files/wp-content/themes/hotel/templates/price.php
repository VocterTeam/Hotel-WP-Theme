<?php global $redux_opt; ?>
<!-- .content-item -->
<div data-anchor="price" class="content-item section" style="background-image: url(<?php echo $redux_opt['bg_price']['url']; ?>);">
    <div class="item-container">
        <div class="item-content">
            <h2 class="default-title element-after">
            	<?php foreach( (array) $redux_opt['title_price'] as $title_item ): ?>
            		<span><?php echo $title_item; ?></span>
        		<?php endforeach; ?>
                <span class="default-title default-title--thin">
                	<?php foreach( (array) $redux_opt['subtitle_price'] as $subtitle_item ): ?>
	            		<span><?php echo $subtitle_item; ?></span>
	        		<?php endforeach; ?>
            	</span>
            </h2>
            <div class="default-subtitle">
                <p>
                	<?php foreach( (array) $redux_opt['desc_price'] as $desc_item ): ?>
	            		<span><?php echo $desc_item; ?></span>
	        		<?php endforeach; ?>
            	</p>
            </div>
            <div class="default-subtitle default-subtitle--small note-element">
            	<?php foreach( (array) $redux_opt['info_price'] as $info_item ): ?>
            		<span><?php echo $info_item; ?></span>
        		<?php endforeach; ?>
            </div>
        </div>
        <a href="#" class="default-btn" data-popup="popupReview" style="background-color: <?php echo $redux_opt['color_btn_price']; ?>;">
        	<span class="default-btn__title"><?php echo $redux_opt['text_btn_price']; ?></span>
        </a>
    </div>
</div>
<!--END:.content-item -->