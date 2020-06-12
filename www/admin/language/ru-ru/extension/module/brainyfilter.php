<?php
/**
 * Brainy Filter Pro 5.1.3 oc3.x / oc3x.ru 
 * Copyright 2016-2018 ПЕРЕВОД / oc3x.ru
 * License: Commercial. Reselling of this software or its derivatives is not allowed. You may use this software for one website ONLY including all its subdomains if the top level domain belongs to you and all subdomains are parts of the same OpenCart store. 
*/ 

$_['heading_title']                         = 'Умный фильтр Про'; 
$_['bf_signature']	                        = "Умный фильтр Про 5.1.3 oc3.x. Created by <a href=\"https://oc3x.ru/\">OC3X.RU</a> &copy; 2016-" . date('Y'); 
$_['button_save_n_close']                   = 'Сохранить и закрыть'; 

// Top Menu
$_['top_menu_basic_settings']               = 'Базовые настройки<span class="help">Настройки, используемые всеми экземплярами</span>';
$_['top_menu_module_instances']             = 'Экземпляры модуля<span class="help">Макеты и настройки</span>';
$_['top_menu_add_new_instance']             = 'Добавить новый экземпляр'; 

// Tabs
$_['tab_embedding']                         = 'Встраивание';
$_['tab_attributes_display']                = 'Отображение блоков фильтров';
$_['tab_filter_layout_view']                = 'Вид макета фильтра';
$_['tab_data_submission']                   = 'Представление данных';
$_['tab_attributes']                        = 'Атрибуты';
$_['tab_options']                           = 'Опции';
$_['tab_filters']                           = 'Фильтры';
$_['tab_categories']                        = 'Категории';
$_['tab_responsive_view']                   = 'Адаптивный вид';
$_['tab_style']                             = 'Тема';
$_['tab_attr_values']                       = 'Порядок значений';
$_['tab_global_settings']                   = 'Глобальные настройки'; 
$_['tab_help']                              = 'Помощь'; 

// Containers for Filter Embedding
$_['embedding_header']                      = 'Контейнеры для встраивания фильтров';
$_['embedding_warning']                     = 'Эти настройки имеют решающее значение для работы фильтра.';
$_['embedding_container_selector']          = '<b>Контейнер списка товаров</b><span class="help">CSS-селектор элемента DOM, который содержит список товаров <b>только</b></span>';
$_['embedding_paginator_selector']          = '<b>Панель пагинации</b><span class="help">CSS-селектор панели нумерации</span>';
$_['embedding_description']                 = 'Эти параметры используются фильтром для встраивания результирующего списка товаров на странице товаров. Если эти настройки неверны, фильтр не сможет отобразить отфильтрованный список. Фильтр может автоматически определять настройки для многих популярных команд, но иногда это может потребоваться сделать вручную, описав CSS-селекторы для контейнера списка товаров и контейнера панели разбиения на страницы.'; 
$_['entry_cron_secret_key']                 = '<b>Секретный ключ CRON</b><span class="help">Ключ используется для защиты доступа CRON от несанкционированных запросов. Обратите внимание, что точка доступа недоступна, если поле пустое.<br> CRON URL будет:</span>';

// Filter Blocks Display
$_['filter_blocks_header']                  = 'Отображение блоков фильтров';
$_['filter_blocks_descr']                   = 'Выберите предпочтительные блоки, которые вы хотите видеть в макете фильтра. <br/><b>Порядок сортировки</b> блоков изменяется путем перетаскивания строк';
$_['filter_search']                         = 'Фильтр ключевых слов';
$_['filter_price']                          = 'Ценовой фильтр';
$_['filter_category']                       = 'Фильтр категорий';
$_['filter_manufacturer']                   = 'Фильтр производителей'; 
$_['filter_stock_status']                   = 'Фильтр на складе ';
$_['filter_attribute']                      = 'Фильтр атрибутов';
$_['filter_filter']                         = 'Фильтры OpenCart';
$_['filter_option']                         = 'Фильтр опций';
$_['filter_rating']                         = 'Фильтр рейтинга'; 

// Filter Layout View
$_['layout_header']                         = 'Вид макета фильтра';
$_['layout_show_attr_groups']               = 'Показать группы атрибутов';
$_['layout_product_count']                  = 'Включить счетчик товаров';
$_['layout_hide_empty_attr']                = 'Скрыть пустые значения атрибутов<span class="help">Примечание: эта функция доступна только в том случае, если включена настройка количества товаров.</span>';
$_['layout_sliding']                        = 'Ограничить количество атрибутов, отображаемых по умолчанию';
$_['layout_sliding_num_to_show']            = 'Количество отображаемых атрибутов';
$_['layout_sliding_min']                    = 'Минимальное количество скрытых атрибутов';
$_['layout_height_limit']                   = 'Ограничение блоков в высоту';
$_['layout_max_height_limit']               = 'Максимальная высота'; 

// Data Submission
$_['submission_header']                     = 'Представление данных';
$_['submission_descr']                      = 'Параметры, определяющие, какое действие требуется для применения настроек фильтра к текущему списку товаров.';
$_['submission_type_default']               = '<b>Использовать по умолчанию</b><span class="help">Будет использоваться настройка из базовых настроек</span>';
$_['submission_type_button']                = '<b>Нажать кнопку «Применить»</b>';
$_['submission_type_auto']                  = '<b>Любое изменение настроек фильтра</b> <span class="help">Примените фильтр, как только пользователь изменит какие-либо настройки фильтра.</span>';
$_['submission_delay']                      = '<b>Изменение нескольких настроек фильтра</b> <span class="help">Примените фильтр, как только пользователь перестанет изменять настройки. Остановка означает отсутствие действий в течение определенного заданного периода времени.</span>';
$_['submission_time_in_sec']                = 'Время в миллисекундах'; 
$_['submission_hide_panel']                 = '<b>Постепенное затухание панели фильтров во время запросов</b>';
$_['submission_button_fixed']               = 'Поместите кнопку внизу';
$_['submission_button_float']               = 'Используйте плавающую кнопку'; 

// Attributes
$_['attributes_header']                     = 'Атрибуты';
$_['attributes_group_setting']              = '<b>Настройки по умолчанию для всех атрибутов</b><span class="help">Эти параметры применяются ко всем имеющимся у вас атрибутам товара. Используйте форму ниже, чтобы редактировать настройки для каждого отдельного атрибута</span>';
$_['attributes_custom_set_descr']           = 'Этот раздел позволяет переопределить настройки атрибутов по умолчанию (см. выше) для выбранных атрибутов. Пожалуйста, используйте форму слева, чтобы выбрать атрибуты, которые вы хотите изменить, а затем измените их настройки в таблице ниже.';
$_['attributes_individual_set']             = 'Настройки отдельных атрибутов';
$_['btn_select_attribute']                  = 'Выберите атрибут';
$_['autocomplete_hint']                     = 'Начните вводить имя атрибута, который вы хотите изменить, щелкните его имя, а затем нажмите кнопку “%s” '; 

// Options
$_['options_header']                        = 'Опции';
$_['options_group_setting']                 = '<b>Настройки по умолчанию для всех опций</b><span class="help">Эти параметры применяются ко всем имеющимся у вас опциям товара. Используйте форму ниже, чтобы редактировать настройки для каждой отдельной опции</span>';
$_['options_custom_set_descr']              = 'Этот раздел позволяет переопределить настройки опций по умолчанию (см. выше) для выбранных опций. Пожалуйста, используйте форму слева, чтобы выбрать опции, которые вы хотите изменить, а затем измените их настройки в таблице ниже.';
$_['options_individual_set']                = 'Индивидуальные настройки опций';
$_['options_view_mode']                     = 'Режим просмотра';
$_['options_view_mode_label']               = 'Показывать только стикеры';
$_['options_view_mode_image']               = 'Показывать только изображения';
$_['options_view_mode_image_and_label']     = 'Показать стикеры и изображения';
$_['btn_select_option']                     = 'Выберите опцию'; 

// Filters
$_['filters_header']                        = 'Фильтры';
$_['filters_group_setting']                 = '<b>Настройки по умолчанию для всех фильтров</b><span class="help">Эти настройки применяются ко всем имеющимся у вас фильтрам товаров. Используйте форму ниже, чтобы редактировать настройки для каждого отдельного атрибута</span>';
$_['filters_custom_set_descr']              = 'Этот раздел позволяет переопределить настройки фильтра по умолчанию (см. выше) для выбранных фильтров. Пожалуйста, используйте форму слева, чтобы выбрать фильтры, которые вы хотите изменить, а затем измените их настройки в таблице ниже.';
$_['filters_individual_set']                = 'Индивидуальные настройки фильтров';
$_['btn_select_filter']                     = 'Выберите фильтр'; 

// Categories 
$_['categories_header']                     = 'Выберите категории, для которых необходимо включить фильтр';
$_['categories_info']                       = 'Переместите категории между списками включено и отключено. Текущие параметры экземпляра будут применяться только к категориям, включенным. Текущий экземпляр фильтра не будет отображаться для отключенных категорий.';
$_['categories_move_selected']              = 'Переместить<br>выбранный';
$_['categories_filter_descr']               = 'Начните вводить, чтобы отфильтровать список категорий ниже';
$_['categories_list_of_enabled']            = 'Категории для <i>включить</i> текущего экземпляра фильтра';
$_['categories_list_of_disabled']           = 'Категории для <i>отключить</i> текущего экземпляра фильтра';
$_['categories_select_all']                 = 'Выбрать все';
$_['categories_unselect_all']               = 'Снять все';
$_['categories_filter_hint']                = 'Введите тип для фильтрации категорий по ключевому слову';

// Responsive Behaviour
$_['responsive_header']                     = 'Адаптивный вид';
$_['responsive_mode_enable']                = 'Показать фильтр во всплывающем окне в адаптивном режиме';
$_['responsive_max_width']                  = 'Максимальная ширина всплывающего окна фильтра<span class="help">Установите это значение равным нулю, чтобы развернуть всплывающее окно фильтра на всю ширину экрана</span>';
$_['responsive_max_screen_width']           = 'Ширина экрана, при которой фильтр перемещается во всплывающее окно<span class="help">Это должна быть ширина, на которой ваша адаптивная тема переключается на мобильную версию</span>';
$_['responsive_position']                   = 'Позиция';
$_['responsive_offset']                     = 'Смещение сверху';
$_['responsive_collapse_sections']          = 'Свернуть разделы атрибутов'; 

// Theme
$_['theme_block_header']                    = 'Хедер блока';
$_['theme_text']                            = 'Текст';
$_['theme_title']                           = 'Заголовок';
$_['theme_border']                          = 'Рамка';
$_['theme_background']                      = 'Фон';
$_['theme_price_slider']                    = 'Слайдер цен';
$_['theme_show_btn_color']                  = 'Цвет кнопки Показать фильтр';
$_['theme_reset_btn_color']                 = 'Цвет кнопки сброса';
$_['theme_product_quantity']                = 'Количество товара';
$_['theme_group_block_header']              = 'Хедер группового блока';
$_['theme_slider_handle_border']            = 'Рамка ручки ползунка';
$_['theme_responsive_popup_view']           = 'Адаптивный вид Всплывающего Окна';
$_['theme_active_area_background']          = 'Фон активной области';
$_['theme_slider_handle_background']        = 'Фон ручки слайдера'; 

// Values Ordering
$_['ordering_header']                       = 'Порядок значений атрибутов';
$_['ordering_filter_hint']                  = 'Введите тип для фильтрации атрибутов по ключевому слову';
$_['ordering_descr']                        = 'Выберите атрибут, значения которого вы хотите упорядочить, с помощью поля ввода ниже. Изменение порядка сортировки в списке значений появилось путем перетаскивания строк. После того, как все значения будут отсортированы, нажмите кнопку с галочкой, чтобы сохранить изменения.';
$_['ordering_note']                         = 'Примечание. На этой странице можно упорядочить <b>Только значения атрибутов.</b> Упорядочение значений опций и фильтров можно выполнить с помощью стандартных инструментов Opencart';
$_['ordering_language']                     = 'Язык';

// Global Settings
$_['global_header']                         = 'Глобальные настройки';
$_['global_settings_descr']                 = 'Эти настройки применяются ко всем экземплярам модуля и не могут быть переопределены';
$_['global_hide_empty_stock']               = '<b>Скрыть товары на складе</b><span class="help">Позволяет фильтру учитывать состояние запасов по каждой опции товара</span>';
$_['global_enable_multiple_attributes']     = '<b>Включить несколько значений атрибута</b><span class="help">Включение этой опции заставляет модуль воспринимать значения атрибута не как единичные значения, а как набор значений, разделенных указанным разделителем.</span>';
$_['global_multiple_attr_separator']        = '(без пробелов, пожалуйста)';
$_['global_separator']                      = 'Разделитель';
$_['global_in_stock_status_id']             = '<b>В наличии на складе</b><span class="help">Установить значение по умолчанию в статусе товара, выбранного при редактировании товара.</span>';
$_['global_subcats_fix']                    = '<b>Показать товары из подкатегорий в родительских категориях</b><span class="help">Этот параметр позволяет отображать товары из дочерних категорий в соответствующих родительских категориях и показывает фильтр для них. По умолчанию OpenCart требует добавления каждого товара как в дочернюю, так и в родительскую категорию вручную.</span>'; 
$_['global_postponed_count']                = 'Отложенный подсчет итогов<span class="help">Осуществляет подсчет итогов в отдельном запросе к серверу. Это может увеличить скорость загрузки страницы.</span>';

// Help
$_['help_about']                            = 'О модуле';
$_['help_faq_n_trouleshooting']             = 'Часто задаваемые вопросы и устранение неполадок';
$_['help_about_content']                    = '<p>Brainy Filter Pro 5.1.3 OC3-это модуль для OpenCart для фильтрации товаров в интернет-магазине. Это самое продуманное и симпатичное расширение такого рода.</p>' .'<h2>Бесплатная поддержка</h2>' .'<p>Наша команда делает все возможное, чтобы модуль был свободен от ошибок и с ним было легко работать. Если вы обнаружите ошибку в коде модуля, мы исправим ее бесплатно. Мы также можем установить модуль и внести некоторые изменения в вашу тему, чтобы он работал. Обратите внимание, что это можно сделать только один раз. Если вы выбрали другую тему или переустановите систему, мы не сможем предоставить вам бесплатную поддержку во второй раз. Мы также не настраиваем шаблон модуля так, чтобы он лучше подходил для любых пользовательских тем и не добавляем никаких пользовательских функций в рамках бесплатной службы поддержки.</p>' .'<p>(!) Если вы столкнулись с проблемой, прежде чем обращаться в нашу службу поддержки, пожалуйста, проверьте FAQ & amp; Раздел устранения неполадок. Обратите внимание, что раздел периодически обновляется.</p>' .'<p>Электронная почта поддержки <a href="mailto:other@oc3x.ru">other@oc3x.ru</a>. (!) При обращении в службу поддержки укажите свой идентификатор заказа OpenCart и дату покупки.</p>' .'<h2>Платная поддержка</h2>' .'<p>Наша команда разработчиков имеет огромный опыт в веб-разработке и будет рада помочь с любыми пользовательскими функциями, которые могут вам понадобиться. Мы также разрабатываем не-OpenCart проекты, в том числе довольно крупные и сложные. Вы всегда можете обсудить все детали и получить предложение, связавшись с нашим отделом продаж <a href="mailto:other@oc3x.ru">other@oc3x.ru</a>.</p>';



// Instance
$_['instance_content_top']                  = 'Содержимое вверху';
$_['instance_content_bottom']               = 'Содержимое внизу';
$_['instance_column_left']                  = 'Колонка слева';
$_['instance_column_right']                 = 'Правая колонка';
$_['instance_remove']                       = 'Удалить';
$_['instance_layout']                       = 'Макет';
$_['instance_position']                     = 'Позиция';
$_['instance_basic_settings_info']          = 'Настройки, используемые по умолчанию для всех макетов. Некоторые из этих параметров могут быть переопределены в разделе «Экземпляры фильтра».';
$_['instance_remove_default_layout']        = 'Макет по умолчанию используется для отображения результатов поиска по запросам, отправленным из других макетов, которые не включают товары. Его нельзя удалить или отключить.';
$_['instance_new_layout_notice']            = 'Пожалуйста, выберите, в каком макете и в какой позиции этот экземпляр фильтра будет отображаться на вашем сайте!';
$_['instance_default_layout']               = 'Встроенный макет по умолчанию';
$_['instance_remove_confirmation']          = 'Вы уверены, что хотите удалить этот экземпляр?';

// Attribute values sort order popup
$_['edit_values_sort_order']                = 'Порядок сортировки значений';


// Messages
$_['message_success']                       = 'Успех: Вы изменили модуль Умный фильтр!';
$_['message_new_instance']                  = 'Чтобы включить модуль во внешнем интерфейсе, создайте хотя бы один экземпляр для любого из макетов на вкладке «Экземпляры модуля».';
$_['message_empty_table']                   = 'Таблица пуста'; 
$_['message_error_attr_separator_empty']    = 'Ошибка: значение разделителя для нескольких значений атрибута пустое';
$_['message_error_permission']              = 'Ошибка: вы не можете изменить настройки модуля Умный фильтр!'; 
$_['message_error_submit_delay']            = 'Ошибка: недопустимое значение, введенное в поле время задержки!';
$_['message_error_layout_not_set']          = 'Пожалуйста, выберите макет, на котором вы хотите видеть Умный фильтр, или удалите экземпляр';
$_['message_unsaved_changes']               = 'Некоторые настройки были изменены. Продолжить без сохранения?';


// Common
$_['left']                                  = 'Слева';
$_['right']                                 = 'Справа'; 
$_['radio']                                 = 'Переключатель';
$_['select']                                = '- Выбрать -';
$_['module']                                = 'Модули';
$_['slider']                                = 'Слайдер с исходными данными';
$_['control']                               = 'Контроль/Управление';
$_['enabled']                               = 'Включено';
$_['disabled']                              = 'Отключено';
$_['default']                               = 'По умолчанию';
$_['collapse']                              = 'Свертывание';
$_['checkbox']                              = 'Флажок';
$_['selectbox']                             = 'Выбор из выпадающего списка';
$_['sort_order']                            = 'Порядок сортировки';
$_['enable_all']                            = 'Включить все';
$_['disable_all']                           = 'Отключить все';
$_['grid_of_images']                        = 'Сетка изображений';
$_['set_all_default']                       = 'По умолчанию';
$_['slider_labels_only']                    = 'Слайдер с стикерами';
$_['slider_labels_and_inputs']              = 'Слайдер с исходными данными и стикерами';


$_['update_cache'] = 'Обновить кэш';
//$_['override_default'] = 'Override default';
$_['updating'] = 'Обновление...';
$_['attribute_value'] = 'Значение атрибута';
$_['categories'] = 'Категории';