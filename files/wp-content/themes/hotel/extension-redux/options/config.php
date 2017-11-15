<?php

$redux_opt_name = "redux_opt";

if ( !function_exists( "redux_add_metaboxes" ) ):
    
    function redux_add_metaboxes($metaboxes) {

    /**
     * Windows page add metaboxes
    **/

    $windowsSections[] = array(
        'title'            => __( 'Главный экран', 'zion' ),
        'id'               => 'hero_windows',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'          => 'bg_hero_windows_section',
                'type'        => 'media',
                'library_filter' => array('jpg', 'png'),
                'default'     => array(
                    'url' =>  get_template_directory_uri().'/images/bg1.png'
                ),
                'title'       => __( 'Фоновое изображение', 'zion' ),
                'subtitle'    => __( 'Изображение должно быть формата: "JPG", "PNG"', 'zion' ),
            ),
            array(
                'id'       => 'title_hero_windows_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'desc_hero_windows_section',
                'type'     => 'textarea',
                'title'    => __('Описание', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'cost_hero_windows_section',
                'type'     => 'text',
                'title'    => __('Стоимость', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            )
        )
    );

    $windowsSections[] = array(
        'title'            => __( 'Стоимость', 'zion' ),
        'id'               => 'cost_windows',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_cost_windows_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'            => 'repeator_cost_windows_section',
                'type'          => 'repeater',
                'title'         => __( 'Генератор квартир', 'zion' ),
                'group_values'  => true, 
                'sortable'      => false, 
                'fields'        => array(
                    array(
                        'id'          => 'bg_repeator_cost_windows_section',
                        'type'        => 'media',
                        'library_filter' => array('jpg', 'png'),
                        'default'     => array(
                            'url' =>  get_template_directory_uri().'/images/car-2.jpg'
                        ),
                        'title'       => __( 'Фоновое изображение', 'zion' ),
                        'subtitle'    => __( 'Изображение должно быть формата: "JPG", "PNG"', 'zion' ),
                    ),
                    array(
                        'id'       => 'desc_windows_repeator_cost_windows_section',
                        'type'     => 'textarea',
                        'title'    => __('Описание', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'       => 'cost_windows_repeator_cost_windows_section',
                        'type'     => 'text',
                        'title'    => __('Стоимость', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'       => 'text_repeator_cost_windows_section',
                        'type'     => 'text',
                        'title'    => __('Текст кнопки', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'       => 'link_repeator_cost_windows_section',
                        'type'     => 'text',
                        // 'validate' => 'url',
                        'title'    => __('Ссылка кнопки', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    )
                )
            )
        )
    );

    $windowsSections[] = array(
        'title'            => __( 'Мытье', 'zion' ),
        'id'               => 'wash_windows',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_wash_windows_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'            => 'repeator_wash_windows_section',
                'type'          => 'repeater',
                'title'         => __( 'Генератор квартир', 'zion' ),
                'group_values'  => true, 
                'sortable'      => false, 
                'fields'        => array(
                    array(
                        'id'          => 'bg_repeator_wash_windows_section',
                        'type'        => 'media',
                        'library_filter' => array('jpg', 'png'),
                        'default'     => array(
                            'url' =>  get_template_directory_uri().'/images/okno1.png'
                        ),
                        'title'       => __( 'Изображение', 'zion' ),
                        'subtitle'    => __( 'Изображение должно быть формата: "JPG", "PNG"', 'zion' ),
                    ),
                    array(
                        'id'       => 'desc_windows_repeator_wash_windows_section',
                        'type'     => 'textarea',
                        'title'    => __('Описание', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    )
                )
            )
        )
    );

    $windowsSections[] = array(
        'title'            => __( 'ЧАВО', 'zion' ),
        'id'               => 'faq_windows',
        'icon'             => 'el el-picture',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_faq_windows_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'            => 'repeator_faq_windows_section',
                'type'          => 'repeater',
                'title'         => __( 'Генератор вопросов', 'zion' ),
                'group_values'  => true, 
                'sortable'      => false, 
                'fields'        => array(
                    array(
                        'id'       => 'question_repeator_faq_windows_section',
                        'type'     => 'textarea',
                        'title'    => __('Вопрос', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'       => 'answer_repeator_faq_windows_section',
                        'type'     => 'textarea',
                        'title'    => __('Ответ', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    )
                )
            )
        )
    );

    $windowsSections[] = array(
        'title'            => __( 'Заказ', 'zion' ),
        'id'               => 'order_windows',
        'icon'             => 'el el-picture',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_order_windows_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'desc_order_windows_section',
                'type'     => 'text',
                'title'    => __('Описание', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'          => 'bg_repeator_order_windows_section',
                'type'        => 'media',
                'library_filter' => array('jpg', 'png'),
                'default'     => array(
                    'url' =>  get_template_directory_uri().'/images/bg2.png'
                ),
                'title'       => __( 'Фоновое изображение', 'zion' ),
                'subtitle'    => __( 'Изображение должно быть формата: "JPG", "PNG"', 'zion' ),
            )
        )
    );

    $metaboxes   = array();
    $metaboxes[] = array(
        'id'    => 'windows',
        'title' => __('Настройки шаблона', 'zion'),
        'post_types'    => array('page'),
        'page_template' => array('template-windows.php'),
        //'post_format' => array('image'),
        'position' => 'normal', 
        'priority' => 'high', 
        //'sidebar' => false, 
        'sections' => $windowsSections
    );

    /**
    * Contacts page add metaboxes
    **/
    $repairsSections[] = array(
        'title'            => __( 'Главный экран', 'zion' ),
        'id'               => 'hero_repairs',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'          => 'bg_hero_repairs_section',
                'type'        => 'media',
                'library_filter' => array('jpg', 'png'),
                'default'     => array(
                    'url' =>  get_template_directory_uri().'/images/bg3.png'
                ),
                'title'       => __( 'Фоновое изображение', 'zion' ),
                'subtitle'    => __( 'Изображение должно быть формата: "JPG", "PNG"', 'zion' ),
            ),
            array(
                'id'       => 'title_hero_repairs_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'desc_hero_repairs_section',
                'type'     => 'textarea',
                'title'    => __('Описание', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'cost_hero_repairs_section',
                'type'     => 'text',
                'title'    => __('Стоимость', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            )
        )
    );

    $repairsSections[] = array(
        'title'            => __( 'Как это работает', 'zion' ),
        'id'               => 'hero_how',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_how_repairs_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'desc_how_repairs_section',
                'type'     => 'editor',
                'title'    => __('Описание', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'            => 'repeator_how_repairs_section',
                'type'          => 'repeater',
                'title'         => __( 'Генератор пунктов', 'zion' ),
                'group_values'  => true, 
                'sortable'      => false, 
                'fields'        => array(
                    array(
                        'id'       => 'title_repeator_how_repairs_section',
                        'type'     => 'text',
                        'title'    => __('Заглавие', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'       => 'desc_repeator_how_repairs_section',
                        'type'     => 'textarea',
                        'title'    => __('Описание', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    )
                )
            )
        )
    );

    $repairsSections[] = array(
        'title'            => __( 'Информация', 'zion' ),
        'id'               => 'info_repairs',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'            => 'repeator_info_repairs_section',
                'type'          => 'repeater',
                'title'         => __( 'Генератор пунктов', 'zion' ),
                'group_values'  => true, 
                'sortable'      => false, 
                'fields'        => array(
                    array(
                        'id'       => 'title_repeator_info_repairs_section',
                        'type'     => 'textarea',
                        'title'    => __('Описание', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'       => 'icon_repeator_info_repairs_section',
                        'type'     => 'text',
                        'title'    => __('Иконка', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    )
                )
            )
        )
    );

    $repairsSections[] = array(
        'title'            => __( 'Функции', 'zion' ),
        'id'               => 'repairs',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_repairs_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'            => 'repeator_repairs_section',
                'type'          => 'repeater',
                'title'         => __( 'Генератор функций', 'zion' ),
                'group_values'  => true, 
                'sortable'      => false, 
                'fields'        => array(
                    array(
                        'id'       => 'title_repeator_repairs_section',
                        'type'     => 'text',
                        'title'    => __('Название', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'          => 'bg_repeator_repairs_section',
                        'type'        => 'media',
                        'library_filter' => array('jpg', 'png'),
                        'default'     => array(
                            'url' =>  get_template_directory_uri().'/images/icon1.png'
                        ),
                        'title'       => __( 'Изображение', 'zion' ),
                        'subtitle'    => __( 'Изображение должно быть формата: "JPG", "PNG"', 'zion' ),
                    ),
                    array(
                        'id'       => 'multitext_repeator_repairs_section',
                        'type'     => 'multi_text',
                        'title'    => __( 'Пункты', 'zion' ),
                    )
                )
            )
        )
    );

    $repairsSections[] = array(
        'title'            => __( 'Преимущества', 'zion' ),
        'id'               => 'benefits',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_benefits_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'            => 'repeator_benefits_section',
                'type'          => 'repeater',
                'title'         => __( 'Генератор преимуществ', 'zion' ),
                'group_values'  => true, 
                'sortable'      => false, 
                'fields'        => array(
                    array(
                        'id'       => 'title_repeator_benefits_section',
                        'type'     => 'text',
                        'title'    => __('Название', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'       => 'desc_repeator_benefits_section',
                        'type'     => 'textarea',
                        'title'    => __('Описание', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'       => 'multitext_repeator_benefits_section',
                        'type'     => 'multi_text',
                        'title'    => __( 'Пункты', 'zion' ),
                    )
                )
            )
        )
    );

    $repairsSections[] = array(
        'title'            => __( 'Заказ', 'zion' ),
        'id'               => 'order_repairs',
        'icon'             => 'el el-picture',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_order_repairs_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'desc_order_repairs_section',
                'type'     => 'text',
                'title'    => __('Описание', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'          => 'bg_order_repairs_section',
                'type'        => 'media',
                'library_filter' => array('jpg', 'png'),
                'default'     => array(
                    'url' =>  get_template_directory_uri().'/images/bg4.png'
                ),
                'title'       => __( 'Фоновое изображение', 'zion' ),
                'subtitle'    => __( 'Изображение должно быть формата: "JPG", "PNG"', 'zion' ),
            )
        )
    );

    $metaboxes[] = array(
        'id'            => 'repairs',
        'title'         => __( 'Настройки шаблона', 'zion' ),
        'post_types'    => array( 'page' ),
        'page_template' => array('template-repairs.php'), 
        //'post_format' => array('image'), 
        'position'      => 'normal', 
        'priority'      => 'high', 
        'sections'      => $repairsSections,
    );

    $blogSections[] = array(
        'title'            => __( 'Заказ', 'zion' ),
        'id'               => 'order_blog',
        'icon'             => 'el el-picture',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'title_order_blog_section',
                'type'     => 'text',
                'title'    => __('Название', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'desc_order_blog_section',
                'type'     => 'text',
                'title'    => __('Описание', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            )
        )
    );

    $metaboxes[] = array(
        'id'            => 'blog',
        'title'         => __( 'Настройки шаблона', 'zion' ),
        'post_types'    => array( 'page' ),
        'page_template' => array('template-blog.php'), 
        //'post_format' => array('image'), 
        'position'      => 'normal', 
        'priority'      => 'high', 
        'sections'      => $blogSections,
    );

    $postSections[] = array(
        'title'            => __( 'Иконка', 'zion' ),
        'id'               => 'post_blog',
        'icon'             => 'el el-picture',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'icon_post_blog_section',
                'type'     => 'text',
                'title'    => __('Класс иконки', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            )
        )
    );

    $metaboxes[] = array(
        'id'            => 'post',
        'title'         => __( 'Настройки', 'zion' ),
        'post_types'    => array( 'post' ),
        'position'      => 'side', 
        'priority'      => 'high', 
        'sections'      => $postSections,
    );

    $orderSections[] = array(
        'title'            => __( 'Основное', 'zion' ),
        'id'               => 'main_order',
        'icon'             => 'el el-shopping-cart',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'name_main_order',
                'type'     => 'text',
                'title'    => __('Имя', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'email_main_order',
                'type'     => 'text',
                'title'    => __('Адрес электронной почты', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'phone_main_order',
                'type'     => 'text',
                'title'    => __('Телефон', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'type_main_order',
                'type'     => 'text',
                'title'    => __('Тип уборки', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'subscribe_main_order',
                'type'     => 'button_set',
                'title'    => __('Уборка по подписке', 'zion'),
                'options' => array(
                    '1' => 'Выкл', 
                    '2' => 'Раз в неделю -20%',
                    '3' => 'Раз в 2 недели -10%'
                 ), 
                'default' => '1'
            ),
            array(
                'id'       => 'count_rooms_main_order',
                'type'     => 'text',
                'title'    => __('Количество комнат', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'count_bathrooms_main_order',
                'type'     => 'text',
                'title'    => __('Количество санузлов', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'area_main_order',
                'type'     => 'text',
                'title'    => __('Площадь помещения', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'balcony_main_order',
                'type'     => 'switch',
                'title'    => __('Балкон', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'vacuum_cleaner_main_order',
                'type'     => 'switch',
                'title'    => __('Отсутствие пылесоса', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'cost_main_order',
                'type'     => 'text',
                'title'    => __('Стоимость уборки (рубли)', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'comment_main_order',
                'type'     => 'textarea',
                'title'    => __('Комментарий к заказу', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
        )
    );

    $orderSections[] = array(
        'title'            => __( 'Адрес', 'zion' ),
        'id'               => 'adress_order',
        'icon'             => 'el el-map-marker',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'city_adress_order',
                'type'     => 'text',
                'title'    => __('Город', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'street_adress_order',
                'type'     => 'text',
                'title'    => __('Улица', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'house_adress_order',
                'type'     => 'text',
                'title'    => __('Дом', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'part_adress_order',
                'type'     => 'text',
                'title'    => __('Корпус', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'porch_adress_order',
                'type'     => 'text',
                'title'    => __('Подъезд', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'intercom_adress_order',
                'type'     => 'text',
                'title'    => __('Домофон', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'floor_adress_order',
                'type'     => 'text',
                'title'    => __('Этаж', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'apartment_adress_order',
                'type'     => 'text',
                'title'    => __('Квартира', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'structure_adress_order',
                'type'     => 'text',
                'title'    => __('Строение', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            )
        )
    );

    $orderSections[] = array(
        'title'            => __( 'Время приезда', 'zion' ),
        'id'               => 'time_order',
        'icon'             => 'el el-time',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'date_time_order',
                'type'     => 'text',
                'title'    => __('Дата приезда', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            ),
            array(
                'id'       => 'time_time_order',
                'type'     => 'text',
                'title'    => __('Вемя приезда', 'zion'),
                'placeholder' => __( 'введите ваш текст', 'zion' ),
            )
        )
    );

    $orderSections[] = array(
        'title'            => __( 'Дополнительные опции', 'zion' ),
        'id'               => 'options_order',
        'icon'             => 'el el-cog',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'd_keys_options_order',
                'type'     => 'switch',
                'title'    => __('Доставить ключи', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'p_keys_options_order',
                'type'     => 'switch',
                'title'    => __('Забрать ключи', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'inside_refrigerator_options_order',
                'type'     => 'switch',
                'title'    => __('Внутри холодильника', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'inside_oven_options_order',
                'type'     => 'switch',
                'title'    => __('Внутри духовки', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'inside_kitchen_cabinets_options_order',
                'type'     => 'switch',
                'title'    => __('Внутри кухонных шкафов', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'inside_microwave_options_order',
                'type'     => 'switch',
                'title'    => __('Внутри микроволновки', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'ironing_linen_options_order',
                'type'     => 'switch',
                'title'    => __('Глажка белья', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'washing_windows_options_order',
                'type'     => 'switch',
                'title'    => __('Мытьё окон', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'cleaning_balcony_options_order',
                'type'     => 'switch',
                'title'    => __('Уборка балкона', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'washing_pet_tray_options_order',
                'type'     => 'switch',
                'title'    => __('Мытьё лотка питомца', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'cleaning_chandeliers_options_order',
                'type'     => 'switch',
                'title'    => __('Чистка люстр', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
            array(
                'id'       => 'cleaning_inside_wardrobe_options_order',
                'type'     => 'switch',
                'title'    => __('Уборка внутри гардероба', 'zion'),
                //'options' => array('on', 'off'),
                'default'  => false,
            ),
        )
    );

    $metaboxes[] = array(
        'id'            => 'clean_order',
        'title'         => __( 'Детали заказа', 'zion' ),
        'post_types'    => array( 'clean_order' ),
        'position'      => 'normal', 
        'priority'      => 'high', 
        'sections'      => $orderSections,
    );

    $aboutSections[] = array(
        'title'            => __( 'Дополнительные опции', 'zion' ),
        'id'               => 'about_section',
        'icon'             => 'el el-cog',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'            => 'repeator_about_section',
                'type'          => 'repeater',
                'title'         => __( 'Генератор блоков', 'zion' ),
                'group_values'  => true, 
                'sortable'      => false, 
                'fields'        => array(
                    array(
                        'id'       => 'title_repeator_about_section',
                        'type'     => 'text',
                        'title'    => __('Заглавие', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    ),
                    array(
                        'id'          => 'img_repeator_about_section',
                        'type'        => 'media',
                        'library_filter' => array('jpg', 'png'),
                        'default'     => array(
                            'url' =>  get_template_directory_uri().'/images/img1.png'
                        ),
                        'title'       => __( 'Изображение', 'zion' ),
                        'subtitle'    => __( 'Изображение должно быть формата: "JPG", "PNG"', 'zion' ),
                    ),
                    array(
                        'id'       => 'desc_repeator_about_section',
                        'type'     => 'textarea',
                        'title'    => __('Описание', 'zion'),
                        'placeholder' => __( 'введите ваш текст', 'zion' ),
                    )
                )
            )
        )
    );

    $metaboxes[] = array(
        'id'            => 'about',
        'title'         => __( 'Настройки шаблона', 'zion' ),
        'post_types'    => array( 'page' ),
        'page_template' => array('template-about.php'), 
        'position'      => 'normal', 
        'priority'      => 'high', 
        'sections'      => $aboutSections,
    );

    return $metaboxes;
  }

  add_action('redux/metaboxes/'.$redux_opt_name.'/boxes', 'redux_add_metaboxes');

endif;