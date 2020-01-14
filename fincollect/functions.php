<?php
/**
 * fincollect functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fincollect
 */



if ( ! function_exists( 'fincollect_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fincollect_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fincollect, use a find and replace
		 * to change 'fincollect' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fincollect', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'fincollect' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fincollect_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fincollect_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fincollect_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fincollect_content_width', 640 );
}
add_action( 'after_setup_theme', 'fincollect_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fincollect_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fincollect' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fincollect' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fincollect_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fincollect_styles() {
	
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:600,400,300,400italic,600,700,700italic,800&subset=latin,cyrillic' );
	wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/css/jquery.fancybox.css');
	wp_enqueue_style( 'bootstrap-name', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'fincollect-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script( 'fincollect-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


function fincollect_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('jq-scripts', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('modernizr-scripts', get_template_directory_uri() . '/js/modernizr.js');
	wp_enqueue_script('fancybox-scripts', get_template_directory_uri() . '/js/jquery.fancybox.js');
	wp_enqueue_script('slick-scripts', get_template_directory_uri() . '/js/slick.min.js');
	wp_enqueue_script('maskedinput-scripts', get_template_directory_uri() . '/js/jquery.maskedinput.js');
	wp_enqueue_script('plugins-scroll-scripts', get_template_directory_uri() . '/js/plugins-scroll.js');
	wp_enqueue_script('onReady-scripts', get_template_directory_uri() . '/js/onReady.js');

}




add_action( 'wp_enqueue_scripts', 'fincollect_styles');
add_action( 'wp_footer', 'fincollect_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



class My_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output Passed by reference. Used to append additional content.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		// создаем HTML код элемента меню
		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= '<span>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</span>';
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}


add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('partners', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Наши партнёры', // основное название для типа записи
			'singular_name'      => 'Наши партнёры', // название для одной записи этого типа
			'add_new'            => 'Добавить партнёра', // для добавления новой записи
			'add_new_item'       => 'Добавление партнёра', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование партнёра', // для редактирования типа записи
			'new_item'           => 'Новый прартнёр', // текст новой записи
			'view_item'          => 'Смотреть партёнра', // для просмотра записи этого типа.
			'search_items'       => 'Искать партёнра', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Наши партнёры', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}










add_action( 'customize_register', 'customizer_init' );
add_action( 'customize_preview_init', 'customizer_js_file' );
add_action( 'wp_head', 'customizer_style_tag' );

function customizer_init( WP_Customize_Manager $wp_customize ){

	// как обновлять превью сайта:
	// 'refresh'     - перезагрузкой фрейма (можно полностью отказаться от JavaScript)
	// 'postMessage' - отправкой AJAX запроса
	$transport = 'postMessage';



		

	

	// секция
	if( $section = 'advanced_options' ){

		// Добавляем ещё одну секцию - Настройки фона
		$wp_customize->add_section( $section, [
			'title'    => 'Фото на главной',
			'priority' => 201,
		] );

		// настройка
		$setting = 'image';

		$wp_customize->add_setting( $setting, [
				'default'      => '', // по умолчанию - фоновое изображение не установлено
				
			]
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control( $wp_customize, $setting, [
				'label'    => 'Фото на главной',
				'settings' => 'image',
				'section'  => 'advanced_options'
			] )
		);

		// Добавим кнопку в дизайн сайта в кастомайзере для быстрого перехода к текущей настройке
		// при transport = postMessage здесь можно указать функцию,
		// которая будет заменять часть дизайна (таким образом можно не писать JS код)
		if ( isset( $wp_customize->selective_refresh ) ){

			$wp_customize->selective_refresh->add_partial( $setting, [
				'selector'            => '.site-footer .inner',
				'container_inclusive' => false,
				'render_callback'     => 'footer_inner_dh5theme',
				'fallback_refresh'    => false, // Prevents refresh loop when document does not contain .cta-wrap selector. This should be fixed in WP 4.7.
			] );

			// поправим стиль, чтобы кнопку было видно
			add_action( 'wp_head', function(){
				echo '<style>.site-footer .inner .customize-partial-edit-shortcut{ margin: 10px 0 0 38px; }</style>';
			} );

		}

	}

}

function customizer_style_tag(){

	$style = [];

	$body_styles = [];

	switch( get_theme_mod( 'font' ) ){
		case 'arial':
			$body_styles[] = 'font-family: Arial, Helvetica, sans-serif;';
			break;
		case 'courier':
			$body_styles[] = 'font-family: "Courier New", Courier;';
			break;
		default:
			$body_styles[] = 'font-family: Arial, Helvetica, sans-serif;';
			break;
	}

	if( 'inverse' === get_theme_mod( 'color_scheme' ) )
		$body_styles[] = 'background-color:#000; color:#fff;';
	else
		$body_styles[] = 'background-color:#fff; color:#000;';

	if( $bg_image = get_theme_mod( 'bg_image' ) ){
		$body_styles[] = "background-image: url( '$bg_image' );";
	}

	$style[] = 'body { '. implode( ' ', $body_styles ) .' }';

	$style[] = 'a { color: ' . get_theme_mod( 'link_color' ) . '; }';

	if( ! get_theme_mod( 'display_header' ) )
		$style[] = '#header { display: none; }';

	echo "<style>\n" . implode( "\n", $style ) . "\n</style>\n";
}

function customizer_js_file(){
	wp_enqueue_script( 'theme-customizer', get_stylesheet_directory_uri() . '/js/theme-customizer.js', [ 'jquery', 'customize-preview' ], null, true );
}



