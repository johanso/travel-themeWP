<?php 

  // includes
  require get_template_directory() . '/includes/widgets.php';
  require get_template_directory() . '/includes/queries.php';

  // add theme support
  function travels_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'travels_theme_support');

  // add menus  
  function travels_menus() {
    register_nav_menus(
      array(
        'main-menu' => __('Main Menu', 'traveltheme'),
        'footer-menu' => __('Footer Menu', 'traveltheme'),
      )
    );
  }
  add_action('init', 'travels_menus');

  // add scripts and styles
  function travels_styles() {
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), '1.0.0', 'all');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/styles/normalize.css', array(), '8.0.1', 'all');	
    if(is_page('hoteles')) {
      wp_enqueue_style('flickity-styles', get_template_directory_uri() . '/styles/flickity.css', array(), '8.0.1', 'all');	
    }
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'fonts'), '1.0.0', 'all');

    if(is_page('hoteles')) {
      wp_enqueue_script('flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', '' ,'2.3.0', true);
    }
    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
  }
  add_action('wp_enqueue_scripts', 'travels_styles');

  function travels_widgets() {
    register_sidebar(
      array(
        'name' => 'Sidebar post',
        'id' => 'sidebar-1',
        'description' => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
      )
    );
  }
  add_action('widgets_init', 'travels_widgets');

  function travels_BG_image() {
    $page_id = get_option('page_on_front');
    $id_image = get_field('hero_imagen', $page_id);
    $image = wp_get_attachment_image_src($id_image, 'full')[0];
    
    wp_register_style('bg-image', false);
    wp_enqueue_style('bg-image');

    $customImageStyle = "
      body.home .header {
        background-image: linear-gradient(var(--primary-color), 50%, rgba(0, 0, 0, 0)), url($image);
      }
    ";

    wp_add_inline_style('bg-image', $customImageStyle);
  }
  add_action('init', 'travels_BG_image');

  add_action('wpra_lite_custom_display', function() {
    $options = WP_Reactions\Lite\Config::$current_options;
    $reactions = WP_Reactions\Lite\Shortcode::build($options);
    $reactions = str_replace(["\r", "\n", "\r\n"], '', $reactions);
    echo $reactions;
  });