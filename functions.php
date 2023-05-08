<?php
//Adding css and js
function add_theme_scripts() {
    
    
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.min.css',false, null,'all');
    
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.min.css',false, null,'all');
    
    if(is_page_template("page-templates/template-home.php")){
        
        wp_enqueue_style( 'homepage-style', get_template_directory_uri() . '/css/main.min.css',false, null,'all');
    } 
     elseif(is_page_template("page-templates/template-citizenship.php")){
         wp_enqueue_style( 'citizen-style', get_template_directory_uri() . '/css/main.css',false, null,'all');
         wp_enqueue_style( 'citizen-style', get_template_directory_uri() . '/css/style.css',false, null,'all');

    }
     elseif(is_page_template("page-templates/template-blog.php") || is_singular('post')){
        wp_enqueue_style( 'news-style', get_template_directory_uri() . '/css/main.css',false, null,'all');
        wp_enqueue_style( 'news-body-style', get_template_directory_uri() . '/css/news.min.css',false, null,'all');

   }
   elseif(is_home() || is_singular('post')){
    wp_enqueue_style( 'news-style', get_template_directory_uri() . '/css/main.css',false, null,'all');
    wp_enqueue_style( 'news-body-style', get_template_directory_uri() . '/css/news.min.css',false, null,'all');

    }
    else {
        
        wp_enqueue_style( 'contact-style', get_template_directory_uri() . '/css/contact.min.css',false, null,'all');
        wp_enqueue_style( 'country-style', get_template_directory_uri() . '/css/country-select.min.css',false, null,'all');
        
        
    }
    
    if(is_singular('post') || is_page_template('page-templates/template-projects.php')){
        wp_enqueue_script('plyr-js', 'https://cdnjs.cloudflare.com/ajax/libs/plyr/3.7.2/plyr.min.js', null, null, true);
        wp_enqueue_style('plyr-style', 'https://cdnjs.cloudflare.com/ajax/libs/plyr/3.7.2/plyr.min.css', false, null, 'all');
    }
    
    if(is_singular('country')) {
        wp_enqueue_style( 'citizen-style', get_template_directory_uri() . '/css/main.css',false, null,'all');
         wp_enqueue_style( 'citizen-style', get_template_directory_uri() . 'css/style.css',false, null,'all');
        }
    

    wp_enqueue_script( 'jquery-min', 'http://code.jquery.com/jquery-1.12.4.min.js', '', null, true);

    wp_enqueue_script('scrollbar-js', '//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js', null, null, true);
    wp_enqueue_script( 'libreary-script', get_template_directory_uri() . '/js/vendors.min.js', array(), null, true );
    
    
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.min.js', array( 'jquery' ), null, true );
    // wp_enqueue_script('scrollbar-js', '//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js', null, null, true);
    // wp_enqueue_script('scrollbar-js', '//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js', null, null, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Thumbnail support
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}



// featur image of cpt////////

add_theme_support( 'post-thumbnails', array( 'post', 'news' ) );
add_theme_support( 'post-thumbnails', array( 'country', 'news' ) );



// Our custom post type function

function news_post_type() {
    $labels = array(
     'name'                => _x( 'news', 'Post Type General Name', 'acsweb' ),
     'singular_name'       => _x( 'news', 'Post Type Singular Name', 'acsweb' ),
     'menu_name'           => __( 'news', 'acsweb' ),
     'parent_item_colon'   => __( 'Parent news', 'acsweb' ),
     'all_items'           => __( 'All news', 'acsweb' ),
     'view_item'           => __( 'View news', 'acsweb' ),
     'add_new_item'        => __( 'Add New news', 'acsweb' ),
     'add_new'             => __( 'Add New', 'acsweb' ),
     'edit_item'           => __( 'Edit news', 'acsweb' ),
     'update_item'         => __( 'Update news', 'acsweb' ),
     'search_items'        => __( 'Search news', 'acsweb' ),
     'not_found'           => __( 'Not Found', 'acsweb' ),
     'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),
    );
    $args = array(
     'label'               => __( 'news', 'acsweb' ),
     'description'         => __( 'news news and reviews', 'acsweb' ),
     'labels'              => $labels,
     'supports'            => array( 'title', 'editor','thumbnail', 'excerpt', 'author', 'thumbnail', ),
     
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
   
     'menu_position'       => 5,
     'menu_icon'           => 'dashicons-format-image',
     'can_export'          => true,
     'has_archive'         => true,
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'post',
     'taxonomies'          => array( 'category' ),
    );

    $labels = array(
        'name'                => _x( 'country', 'Post Type General Name', 'acsweb' ),
        'singular_name'       => _x( 'country', 'Post Type Singular Name', 'acsweb' ),
        'menu_name'           => __( 'country', 'acsweb' ),
        'parent_item_colon'   => __( 'Parent country', 'acsweb' ),
        'all_items'           => __( 'All country', 'acsweb' ),
        'view_item'           => __( 'View country', 'acsweb' ),
        'add_new_item'        => __( 'Add New country', 'acsweb' ),
        'add_new'             => __( 'Add New', 'acsweb' ),
        'edit_item'           => __( 'Edit country', 'acsweb' ),
        'update_item'         => __( 'Update country', 'acsweb' ),
        'search_items'        => __( 'Search country', 'acsweb' ),
        'not_found'           => __( 'Not Found', 'acsweb' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),
       );
       $args1 = array(
        'label'               => __( 'country', 'acsweb' ),
        'description'         => __( 'news news and reviews', 'acsweb' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor','thumbnail', 'excerpt', 'author', 'thumbnail', ),
        
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
      
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-image',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'taxonomies'          => array( 'category' ),
       );

    register_post_type( 'country', $args1 ); 
    register_post_type( 'news', $args );
}

add_action( 'init', 'news_post_type', 0 );
// custom post type


  // add_action( 'after_setup_theme', 'wpdocs_theme_setup' );

 // Register menus

function register_my_menus() {
    register_nav_menus(
      array(
        'left_menu' => __( 'Left Menu', 'text_domain' ),
        'footer_menu' => __( 'Footer Menu', 'text_domain' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
// replace "#" on menu item
add_filter('walker_nav_menu_start_el', 'replace_hash', 999);
function replace_hash($menu_item) {
    if (strpos($menu_item, 'href="#"') !== false) {
        $menu_item = str_replace('href="#"', 'href="javascript:void(0);"', $menu_item);
    }
    return $menu_item;
}

function theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Share icon',
        'id'            => 'share-icon',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        
    ) );
    register_sidebar( array(
        'name'          => 'Share Article',
        'id'            => 'share-article',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        
    ) );

    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
       
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name'          => 'Custom Header Menu Listing Widget Area',
        'id'            => 'custom-header-menu-listing-widget',
        'before_widget' => '<div class="menu-listing">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ) );
 
    register_sidebar( array(
        'name' => __( 'Footer Widgets', 'text_domain' ),
        'id' => 'footer-widget',
        'description'   => esc_html__( 'The Footer botom wigdget area. Add widget to set on footer bottom area.', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget footer-logo widget_block widget_media_image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 >',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Menu Widgets', 'text_domain' ),
        'id' => 'footer-menu-widget',
        'description'   => esc_html__( 'The Footer botom wigdget area. Add widget to set on footer bottom area.', 'text_domain' ),
        // 'before_widget' => '<ul id="%1$s" class="footer-menu">',
        // 'after_widget'  => '</ul>',
        'before_title'  => '<h6 >',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Right Widgets', 'text_domain' ),
        'id' => 'footer-right-widget',
        'description'   => esc_html__( 'The Footer botom wigdget area. Add widget to set on footer bottom area.', 'text_domain' ),
        'before_widget' => '<ul>',
        'after_widget'  => '</ul>',
       'before_title'  => '<h6 class="widget-title">',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Social Widgets', 'text_domain' ),
        'id' => 'footer-social-widget',
        'description'   => esc_html__( 'The Footer botom wigdget area. Add widget to set on footer bottom area.', 'text_domain' ),
        // 'before_widget' => '<div id="%1$s" class="social-media-list">',
        // 'after_widget'  => '</div>',
        // 'before_title'  => '<h6 class="widget-title">',
        // 'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Bottom Widgets', 'text_domain' ),
        'id' => 'footer-bottom-widget',
        'description'   => esc_html__( 'The Footer botom wigdget area. Add widget to set on footer bottom area.', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="copyright">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer upper Widgets', 'text_domain' ),
        'id' => 'footer-upper-widget',
        'description'   => esc_html__( 'The Footer upper wigdget area. Add widget to set on footer upper area.', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="cta-container">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );
function misha_my_load_more_scripts() {

    global $wp_query; 
    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');

    // register our main script but do not enqueue it yet
    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery') );

    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );

    wp_enqueue_script( 'my_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){

    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    // $args['cat'] = [8,9,10];
    $args['post_status'] = 'publish';

    // it is always better to use WP_Query but not here
    query_posts( $args );

    if( have_posts() ) :

        // run the loop
        while( have_posts() ): the_post(); ?>
        <div class="news-blog">
               
               <div class="news-left">
                   <a href="<?php the_permalink(); ?>">
                   <img src="<?php echo $url[0];?>" alt="news-img">
                   </a>
               </div>
               <div class="news-right">
                   <strong class="date"><?php the_time( 'd.m.Y' ); ?></strong>
                   <a href="<?php the_permalink(); ?>">
                       <h5><?php the_title(); ?></h5>
                   </a>
                   <div class="news-content">
                       <p><?php echo get_the_excerpt();?></p>
                   </div>
                   <div class="read-more">
                       <a href="<?php the_permalink();?>">Read <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/arrow.svg" alt="icon"></a>
                   </div>
               </div>
           </div>
        <?php endwhile;

    endif;
    wp_reset_postdata();
    die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}


?>

