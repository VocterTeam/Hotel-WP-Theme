<?php global $redux_opt; ?>
<!-- .content-item -->
<div data-anchor="location" class="content-item section" style="background-image: url(<?php echo $redux_opt['bg_infrastructure']['url']; ?>);">
    <div class="item-container">
        <div class="item-content">
            <h2 class="default-title element-after">
            	<?php foreach( (array) $redux_opt['title_infrastructure'] as $title_item ): ?>
            		<span><?php echo $title_item; ?></span>
        		<?php endforeach; ?>
                <span class="default-title default-title--thin">
                	<?php foreach( (array) $redux_opt['subtitle_infrastructure'] as $title_item ): ?>
	            		<span><?php echo $title_item; ?></span>
	        		<?php endforeach; ?>
            	</span>
            </h2>
            <div class="default-subtitle">
                <p>
                	<?php foreach( (array) $redux_opt['desc_infrastructure'] as $title_item ): ?>
	            		<span><?php echo $title_item; ?></span>
	        		<?php endforeach; ?>
            	</p>
            </div>
        </div>
        <a href="#" class="default-btn" data-popup="popupReview" style="background-color: <?php echo $redux_opt['color_btn_infrastructure']; ?>;">
        	<span class="default-btn__title"><?php echo $redux_opt['text_btn_infrastructure']; ?></span>
        </a>
    </div>
</div>
<!--END:.content-item -->