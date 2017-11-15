<?php global $redux_opt; ?>
<!-- .content-item -->
<!-- <div data-anchor="about" class="content-item section" id="about" style="background-image: url(<?php echo $redux_opt['bg_about']['url']; ?>);"> -->
<div data-anchor="about" class="content-item section" style="background-image: url(<?php echo $redux_opt['bg_about']['url']; ?>);">
    <div class="item-container">
        <div class="item-content">
            <h2 class="default-title default-title--thin element-after">
            	<?php foreach( (array) $redux_opt['title_about'] as $title_item ): ?>
            		<span><?php echo $title_item; ?></span>
        		<?php endforeach; ?>

                <span class="default-title">
                	<?php foreach( (array) $redux_opt['subtitle_about'] as $title_item ): ?>
	            		<span><?php echo $title_item; ?></span>
	        		<?php endforeach; ?>
                </span>
            </h2>
            <div class="default-subtitle">
                <p>
                	<?php foreach( (array) $redux_opt['desc_about'] as $title_item ): ?>
	            		<span><?php echo $title_item; ?></span>
	        		<?php endforeach; ?>
                </p>
            </div>
        </div>
        <a href="#" class="default-btn" data-popup="popupReview" style="background-color: <?php echo $redux_opt['color_btn_about']; ?>;">
        	<!-- <span class="default-btn__title">ЗАДАТЬ ВОПРОС</span> 
        	<span class="default-btn__subtitle">КОНСУЛЬТАНТУ</span> -->
        	<span class="default-btn__title"><?php echo $redux_opt['text_btn_about']; ?></span>
        </a>
    </div>
</div>
<!--END:.content-item -->