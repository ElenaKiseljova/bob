<?php 
// Styles theme
add_action('wp_enqueue_scripts', 'bob_styles', 3);
function bob_styles () 
{
  wp_enqueue_style('bob-style', get_stylesheet_uri());    
}

// Scripts theme
add_action('wp_enqueue_scripts', 'bob_scripts', 5);
function bob_scripts () 
{    
  wp_enqueue_script('gsap-script', get_template_directory_uri() . '/assets/js/libs/gsap/gsap.js', $deps = array(), $ver = null, $in_footer = true );
  wp_enqueue_script('scroll-trigger-script', get_template_directory_uri() . '/assets/js/libs/gsap/ScrollTrigger.js', $deps = array(), $ver = null, $in_footer = true );
  wp_enqueue_script('custom-select-script', get_template_directory_uri() . '/assets/js/libs/custom-select.js', $deps = array(), $ver = null, $in_footer = true );

  wp_enqueue_script('custom-scroll-script', get_template_directory_uri() . '/assets/js/libs/custom-scroll/custom-scroll.js', $deps = array(), $ver = null, $in_footer = true );
  wp_enqueue_script('calculate-height-script', get_template_directory_uri() . '/assets/js/calculate-height.js', $deps = array(), $ver = null, $in_footer = true );
  wp_enqueue_script('mobile-menu-script', get_template_directory_uri() . '/assets/js/mobile-menu.js', $deps = array(), $ver = null, $in_footer = true );
  wp_enqueue_script('header-script', get_template_directory_uri() . '/assets/js/header.js', $deps = array(), $ver = null, $in_footer = true );

  if ( is_page_template( 'page-products.php' ) ) {
    wp_enqueue_script('locomotive-scroll-script', get_template_directory_uri() . '/assets/js/libs/locomotive-scroll/locomotive-scroll.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('animation-script', get_template_directory_uri() . '/assets/js/animation.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('change-color-script', get_template_directory_uri() . '/assets/js/change-color.js', $deps = array(), $ver = null, $in_footer = true );
  }
  
  if ( is_front_page(  ) ) {
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/libs/swiper.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('slider-script', get_template_directory_uri() . '/assets/js/slider.js', $deps = array(), $ver = null, $in_footer = true );
  }

  if ( is_page_template( 'single-products-fruit-rolls.php' ) ) {
    wp_enqueue_script('motion-path-script', get_template_directory_uri() . '/assets/js/libs/gsap/motion-path.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('animation-rolls-script', get_template_directory_uri() . '/assets/js/animation-rolls.js', $deps = array(), $ver = null, $in_footer = true );
  }

  if ( is_singular( 'products') ) {
    wp_enqueue_script('tabs-script', get_template_directory_uri() . '/assets/js/tabs.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('anchors-script', get_template_directory_uri() . '/assets/js/anchors.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('card-flip-script', get_template_directory_uri() . '/assets/js/card-flip.js', $deps = array(), $ver = null, $in_footer = true );
  }

  if ( is_singular( 'products') || (is_front_page(  ) && !is_home(  )) ) {
    wp_enqueue_script('background-fill-script', get_template_directory_uri() . '/assets/js/background-fill.js', $deps = array(), $ver = null, $in_footer = true );
  }

  if ( is_page_template( 'page-partners.php' ) ) {
    wp_enqueue_script('select-script', get_template_directory_uri() . '/assets/js/custom-select.js', $deps = array(), $ver = null, $in_footer = true );
  }

  wp_enqueue_script('maskinput-script', get_template_directory_uri() . '/assets/js/libs/maskinput.js', $deps = array('jquery'), $ver = null, $in_footer = true );

  wp_enqueue_script('additional-script', get_template_directory_uri() . '/assets/js/additional.js', $deps = array('jquery'), $ver = null, $in_footer = true );
}

add_action( 'after_setup_theme', 'bob_after_setup_theme_function' );

if (!function_exists('bob_after_setup_theme_function')) :
  function bob_after_setup_theme_function () {
    load_theme_textdomain('bob', get_template_directory() . '/languages');

    /* ==============================================
    ********  //Картинки постов
    =============================================== */
    add_theme_support( 'post-thumbnails' );
    
    /* ==============================================
    ********  //Меню
    =============================================== */
    register_nav_menu( 'header', 'Хедер' );
    register_nav_menu( 'footer', 'Футер' );
    register_nav_menu( 'social', 'Социальные сети' );
    // register_nav_menu( 'contact', 'Контакты' );

    /* ==============================================
    ********  //Размеры картирок
    =============================================== */
    /* Главная - Слайдер */
    add_image_size( 'slider_mobile', 455, 750, true);
    add_image_size( 'slider_desktop', 1920, 1080, false);

    /* Проект */
    // add_image_size( 'project_mobile', 280, 220, false);
    // add_image_size( 'project_mobile_2x', 560, 440, false);

    // add_image_size( 'project_desktop', 660, 400, false);
    // add_image_size( 'project_desktop_2x', 1320, 800, false);

    // /* Главная - Первый экран */
    // add_image_size( 'main_mobile', 320, 450, false);
    // add_image_size( 'main_mobile_2x', 640, 900, false);

    // add_image_size( 'main_desktop', 1440, 780, false);
    // add_image_size( 'main_desktop_2x', 2880, 1560, false);
  }
endif;

// Init
add_action( 'init', 'bob_init_function' );
  
if (!function_exists('bob_init_function')) :
  function bob_init_function () 
  {
    /* ==============================================
    ********  //Регистрация кастомных типов постов
    =============================================== */
    function register_custom_post_types () 
    {
      // Продукция
      register_post_type( 'products', [
        'label'  => null,
        'labels' => [
          'name'               => 'Продукция', // основное название для типа записи
          'singular_name'      => 'Продукция', // название для одной записи этого типа
          'add_new'            => 'Добавить продукцию', // для добавления новой записи
          'add_new_item'       => 'Добавление продукции', // заголовка у вновь создаваемой записи в админ-панели.
          'edit_item'          => 'Редактирование продукции', // для редактирования типа записи
          'new_item'           => 'Новая продукция', // текст новой записи
          'view_item'          => 'Показать продукцию', // для просмотра записи этого типа.
          'search_items'       => 'Искать продукцию', // для поиска по этим типам записи
          'not_found'          => 'Продукция не найдена', // если в результате поиска ничего не было найдено
          'not_found_in_trash' => 'Продукция не найдена в корзине', // если не было найдено в корзине
          'parent_item_colon'  => 'Родительская продукция', // для родителей (у древовидных типов) [P.S.ЧЕРТОВА СТРОЧКА РЕАЛЬНО ВАЖНАЯ!!]
          'menu_name'          => 'Продукция', // название меню
        ],
        'description'         => 'Это наша продукция',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-cart',
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
      ] );
    }       
    
    register_custom_post_types();

    /* ==============================================
    ********  //ACF опциональные страницы
    =============================================== */
    function bob_create_acf_pages() 
    {
      if(function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
          'page_title' 	=> 'Настройки для темы Bob Snail',
          'menu_title'	=> 'Настройки для темы Bob Snail',
          'menu_slug' 	=> 'bob-settings',
          'capability'	=> 'edit_posts',
          'icon_url' => 'dashicons-admin-settings',
          'position' => 23,
          'redirect'		=> false,
        ));
      }    
    }

    bob_create_acf_pages();
  }  
endif;

/* ==============================================
  ********  //ACF редактирование набора инструментов редактора
  =============================================== */

add_filter( 'acf/fields/wysiwyg/toolbars' , 'bob_acf_custom_toolbars'  );
function bob_acf_custom_toolbars( $toolbars )
{
  
  array_push($toolbars['Full' ][1], 'underline');

  // return $toolbars - IMPORTANT!
  return $toolbars;
}

/* ==============================================
  ********  //Получение ссылок на спецстраницы
  =============================================== */
  /**
   * $type: products, shops, thanks
   */
  function bob_get_special_page( $type = 'products', $format = 'id' )
  {
    $page_name = $type . '_page_id';

    $page_id = get_field( $page_name, 'options' ) ?? null;
    
    if ( function_exists( 'pll_get_post' ) ) {
      $page_id = pll_get_post( $page_id ) ?? $page_id;
    }

    if ( $format === 'id') {
      return $page_id;
    }

    if ( $format === 'url') {
      $page_url = get_permalink( $page_id );
    
      return $page_url;
    }
  
    return;
  }

  /* ==============================================
  ********  //Класс форм
  =============================================== */
  add_filter( 'wpcf7_form_class_attr', 'bob_filter_cf7_class' );

  function bob_filter_cf7_class( $class ){
    $class .= ' partners__form form';

    return $class;
  }

  /* ==============================================
  ********  //Отключение автозаполнения полей CF7
  =============================================== */
  add_filter( 'wpcf7_form_elements', 'bob_wpcf7_form_elements' );
  function bob_wpcf7_form_elements( $content ) {
      $str_pos = strpos( $content, 'name="full-name"' );
      $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );

      $str_pos = strpos( $content, 'name="email"' );
      $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );

      $str_pos = strpos( $content, 'name="social"' );
      $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );

      $str_pos = strpos( $content, 'name="phone"' );
      $content = substr_replace( $content, ' autocomplete="both" autocomplete="off" ', $str_pos, 0 );

      return $content;
  }
?>