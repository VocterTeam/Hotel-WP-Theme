<?php get_header(); ?>

    <?php //get_template_part('templates/hero-section'); ?>

    <!-- wrapper -->
    <div class="wrapper">

        <!-- site-header -->
        <header id="header" class="site-header">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="#" class="header-logo__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" />
                    </a>
                </div>
                <ul class="header-nav">
                    <li><a href="#location">РАСПОЛОЖЕНИЕ</a></li>
                    <li><a href="#about">О КОМПЛЕКСЕ</a></li>
                    <li><a href="#price">ПЛАНИРОВКИ И ЦЕНЫ</a></li>
                    <li><a href="#contacts">КОНТАКТЫ ОТДЕЛА ПРОДАЖ</a></li>
                </ul>
                <div class="header-contacts">
                    <div class="header-contacts__item"><a href="#">ЗАКАЗАТЬ ЗВОНОК</a></div>
                    <div class="header-contacts__phone"><a href="tel:+78127482683"><span>+7 (812)</span> 748-26-83</a></div>
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
                    <ul class="header-nav">
                        <li><a href="#location">РАСПОЛОЖЕНИЕ</a></li>
                        <li><a href="#about">О КОМПЛЕКСЕ</a></li>
                        <li><a href="#price">ПЛАНИРОВКИ И ЦЕНЫ</a></li>
                        <li><a href="#contacts">КОНТАКТЫ ОТДЕЛА ПРОДАЖ</a></li>
                    </ul>
                </div>
                <!--END:.mobile-menu -->
            </div>
        </header>
        <!-- END:site-header -->


        <!-- .main-content -->
        <div class="main-content">


            <!-- .content-item -->
            <div class="content-item" id="location">
                <div class="item-container">
                    <div class="item-content">
                        <h2 class="default-title default-title--thin element-after"><span>КВАРТИРА</span> <span>С ТЕРРАСОЙ</span> <span>И ВИДОМ </span><span>НА ВОДУ</span></h2>
                        <div class="default-subtitle default-subtitle--line-height element-after">
                            <p><span>Живите в Петербурге уже сейчас!</span> <span>Новый дом с паркингом и закрытой</span> <span>охраняемой территорией</span>
                                <span>Живописные виды на  воду,</span> <span>город и парки.</span></p>
                        </div>
                        <div class="default-subtitle default-subtitle--diff">дом сдан</div>
                    </div>
                    <a href="#" class="default-btn" data-popup="popupReview"><span class="default-btn__title">ЗАПИСАТЬСЯ</span> <span class="default-btn__subtitle">НА ПРОСМОТР</span></a>
                </div>
            </div>
            <!--END:.content-item -->


            <!-- .content-item -->
            <div class="content-item">
                <div class="item-container">
                    <div class="item-content">
                        <h2 class="default-title element-after"><span>ИДЕАЛЬНОЕ</span> <span>МЕСТО</span>
                            <span class="default-title default-title--thin"><span>ДЛЯ СПОКОЙНОЙ</span> <span>И БЕЗОПАСНОЙ</span> <span>ЖИЗНИ</span></span>
                        </h2>
                        <div class="default-subtitle">
                            <p><span>Удобная инфра структура</span> <span>Благоустроенная территория с фонтаном</span> <span>Для прогулок набережная с причалом</span></p>
                        </div>
                    </div>
                    <a href="#" class="default-btn" data-popup="popupReview"><span class="default-btn__title">узнать</span> <span class="default-btn__subtitle">подробности</span></a>
                </div>
            </div>
            <!--END:.content-item -->


            <!-- .content-item -->
            <div class="content-item" id="about">
                <div class="item-container">
                    <div class="item-content">
                        <h2 class="default-title default-title--thin element-after"><span>КОМПЛЕКС</span><span> ИЗ СТЕКЛА</span> <span>И СВЕТА</span>
                            <span class="default-title"><span>ЯРКАЯ</span> <span>АРХИТЕКТУРА</span></span>
                        </h2>
                        <div class="default-subtitle">
                            <p><span>Эксклюзивные решения</span> <span>от дизайнеров с мировым именем</span></p>
                        </div>
                    </div>
                    <a href="#" class="default-btn" data-popup="popupReview"><span class="default-btn__title">ЗАДАТЬ ВОПРОС</span> <span class="default-btn__subtitle">КОНСУЛЬТАНТУ</span></a>
                </div>
            </div>
            <!--END:.content-item -->


            <!-- .content-item -->
            <div class="content-item">
                <div class="item-container">
                    <div class="item-content">
                        <h2 class="default-title default-title--thin element-after"><span>ИДЕАЛЬНОЕ МЕСТО</span> <span>ДЛЯ ЖИЗНИ</span>
                            <span class="default-title"><span>ТИШИНА И ЗЕЛЕНЬ</span> <span>ПАРКОВ</span></span>
                        </h2>
                        <div class="default-subtitle">
                            <p><span>Экологически чистый район</span> <span>Своя обособленная территория</span> <span>Живописные виды</span></p>
                        </div>
                    </div>
                    <a href="#" class="default-btn" data-popup="popupReview"><span class="default-btn__title">ЗАПИСАТЬСЯ</span> <span class="default-btn__subtitle">НА ПРОСМОТР</span></a>
                </div>
            </div>
            <!--END:.content-item -->


            <!-- .content-item -->
            <div class="content-item">
                <div class="item-container">
                    <div class="item-content">
                        <h2 class="default-title element-after"><span>СТИЛЬНАЯ ОТДЕЛКА</span> <span>ИЗ НАТУРАЛЬНЫХ</span> <span>МАТЕРИАЛОВ</span>
                            <span class="default-title default-title--thin"><span>​ЛОББИ</span> <span>С КАМИНОМ</span> <span>И РОЯЛЕМ</span></span>
                        </h2>
                    </div>
                    <a href="#" class="default-btn" data-popup="popupReview"><span class="default-btn__title">ЗАКАЗАТЬ</span> <span class="default-btn__subtitle">ОБРАТНЫЙ ЗВОНОК</span></a>
                </div>
            </div>
            <!--END:.content-item -->


            <!-- .content-item -->
            <div class="content-item" id="price">
                <div class="item-container">
                    <div class="item-content">
                        <h2 class="default-title element-after"><span>КЛЮЧИ</span>
                            <span class="default-title default-title--thin"><span>ЖДУТ</span> <span>ХОЗЯИНА</span></span>
                        </h2>
                        <div class="default-subtitle">
                            <p><span>Дом сдан в эксплуатацию</span> <span>Собственность</span></p>
                        </div>
                        <div class="default-subtitle default-subtitle--small note-element"><span>ВСЕ ФОТОГРАФИИ НАСТОЯЩИЕ</span> <span>РЕАЛЬНЫЙ ОБЪЕКТ</span></div>
                    </div>
                    <a href="#" class="default-btn" data-popup="popupReview"><span class="default-btn__title">ПОЛУЧИТЬ</span> <span class="default-btn__subtitle">ПЛАНИРОВКИ С ЦЕНАМИ</span></a>
                </div>
            </div>
            <!--END:.content-item -->



        </div>
        <!--END:.main-content -->
    </div>
    <!-- END:wrapper -->

<?php get_footer(); ?>