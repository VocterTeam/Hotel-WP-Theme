<?php global $redux_opt; ?>
<!-- site-header -->
<header id="header" class="site-header">
    <div class="header-inner">
        <div class="header-logo">
            <a href="<?php echo site_url(); ?>" class="header-logo__link">
                <img src="<?php echo $redux_opt['logo_header']['url']; ?>" alt="logo" />
            </a>
        </div>

        <?php wp_nav_menu( array(
              'theme_location'  => 'main',
              'fallback_cb'     => '__return_empty_string',
              'container'       => '', 
              'menu_class'      => 'header-nav', 
              'menu_id'         => '', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ) );  ?>

        <!-- <ul id="menu-verhnee-menyu" class="header-nav">
          <li data-menuanchor="location" id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
            <a href="#location">РАСПОЛОЖЕНИЕ</a>
          </li>
          <li data-menuanchor="about" id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
            <a href="#about">О КОМПЛЕКСЕ</a>
          </li>
          <li data-menuanchor="price" id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
            <a href="#price">ПЛАНИРОВКИ И ЦЕНЫ</a>
          </li>
          <li data-menuanchor="footer" id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10">
            <a href="#footer">КОНТАКТЫ ОТДЕЛА ПРОДАЖ</a>
          </li>
        </ul> -->

        <div class="header-contacts">
            <div class="header-contacts__item">
              <a id="call" href="#">
                <?php echo $redux_opt['text_link_header']; ?>
            </a>
          </div>
            <div class="header-contacts__phone">
              <a href="tel:<?php echo $redux_opt['phone_1_header']; ?>">
                <?php echo $redux_opt['phone_2_header']; ?>
              </a>
            </div>
        </div>
        <!-- .toggle-btn -->
        <button type="button" class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- END: .toggle-btn -->
        <!-- .mobile-menu -->
        <div class="mobile-menu">
            <?php wp_nav_menu( array(
                  'theme_location'  => 'main',
                  'fallback_cb'     => '__return_empty_string',
                  'container'       => '', 
                  'menu_class'      => 'header-nav', 
                  'menu_id'         => '', 
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'link_before'     => '',
                  'link_after'      => '',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ) );  ?>
        </div>
        <!--END:.mobile-menu -->
    </div>
</header>
<!-- END:site-header -->