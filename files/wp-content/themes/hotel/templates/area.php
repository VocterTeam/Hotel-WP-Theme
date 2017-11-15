<?php global $redux_opt; ?>
<!-- .content-item -->
<div data-anchor="area" class="content-item section" style="background-image: url(<?php echo $redux_opt['bg_area']['url']; ?>);">
    <div class="item-container">
        <div class="item-content">
            <h2 class="default-title default-title--thin element-after">
            	<?php foreach( (array) $redux_opt['title_area'] as $title_item ): ?>
            		<span><?php echo $title_item; ?></span>
        		<?php endforeach; ?>
                <span class="default-title">
                	<?php foreach( (array) $redux_opt['subtitle_area'] as $subtitle_item ): ?>
	            		<span><?php echo $subtitle_item; ?></span>
	        		<?php endforeach; ?>
            	</span>
            </h2>
            <div class="default-subtitle">
                <p>
                	<?php foreach( (array) $redux_opt['desc_area'] as $desc_item ): ?>
	            		<span><?php echo $desc_item; ?></span>
	        		<?php endforeach; ?>
                </p>
            </div>
        </div>
        <a href="#" class="default-btn" data-popup="popupReview" style="background-color: <?php echo $redux_opt['color_btn_area']; ?>;">
        	<span class="default-btn__title"><?php echo $redux_opt['text_btn_area']; ?></span>
        </a>
    </div>
</div>
<!--END:.content-item -->