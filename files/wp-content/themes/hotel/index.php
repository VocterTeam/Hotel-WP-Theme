<?php get_header(); ?>

    <!-- wrapper -->
    <div class="wrapper">

        <?php get_template_part('templates/nav-menu'); ?>

        <!-- .main-content -->
        <div class="main-content" id="fullpage">

            <?php  
            global $redux_opt;
            $layout = $redux_opt['homepage_manager']['enabled'];
             
            if ($layout): 

                foreach ($layout as $key=>$value) {
             
                    switch($key) {
                 
                        case 'location': get_template_part("templates/location");
                        break;
                 
                        case 'infrastructure': get_template_part("templates/infrastructure");
                        break;
                 
                        case 'about': get_template_part("templates/about");
                        break;
                 
                        case 'area': get_template_part("templates/area");    
                        break;  

                        case 'furnish': get_template_part("templates/furnish"); 
                        break; 

                        case 'price': get_template_part("templates/price");   
                        break; 
                 
                    }
                 
                }
             
            endif; ?>

            <!-- site-footer -->
            <div data-anchor="footer" class="section">
              <!-- .content-item -->
                <div class="content-item content-item--footer" id="contacts" style="background-image: url(<?php echo $redux_opt['bg_footer']['url']; ?>);">
                    <div class="item-container">
                        <div class="item-content">
                            <h2 class="default-title default-title--thin element-after">
                              <?php foreach( (array) $redux_opt['title_footer'] as $title_item ): ?>
                                  <span><?php echo $title_item; ?></span>
                              <?php endforeach; ?>
                            </h2>
                            <h2 class="default-title">
                              <a href="tel:<?php echo $redux_opt['phone_1_footer']; ?>">
                                <?php echo $redux_opt['phone_2_footer']; ?>
                              </a>
                            </h2>
                            <div class="default-subtitle">
                                <p>
                                  <?php foreach( (array) $redux_opt['desc_footer'] as $desc_item ): ?>
                                      <span><?php echo $desc_item; ?></span>
                                  <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                        <a href="#" class="default-btn" data-popup="popupReview" style="background-color: <?php echo $redux_opt['color_btn_footer']; ?>;">
                          <!-- <span class="default-btn__title">ЗАПИСАТЬСЯ</span> 
                          <span class="default-btn__subtitle">НА ПРОСМОТР</span> -->
                          <span class="default-btn__title"><?php echo $redux_opt['text_btn_footer']; ?></span>
                        </a>
                    </div>
                </div>
                <!--END:.content-item -->
            </div>
               
        </div>
        <!--END:.main-content -->
    
    </div>
    <!-- END:wrapper -->

<?php get_footer(); ?>
