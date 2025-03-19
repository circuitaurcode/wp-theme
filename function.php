<?php
/**
 * Theme Name: EduConsult
 * Theme URI: https://example.com/educonsult
 * Author: Your Name
 * Author URI: https://example.com
 * Description: A WordPress theme for education consultants built with Tailwind CSS and TaiPress starter.
 * Version: 1.0.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: educonsult
 * Tags: tailwind, education, responsive, consultant
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Set up theme defaults and registers support for various WordPress features
function educonsult_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'educonsult'),
        'footer' => esc_html__('Footer Menu', 'educonsult'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Editor styles
    add_theme_support('editor-styles');
}
add_action('after_setup_theme', 'educonsult_setup');

// Enqueue scripts and styles
function educonsult_scripts() {
    // Enqueue Tailwind CSS
    wp_enqueue_style('educonsult-tailwind', get_template_directory_uri() . '/dist/css/tailwind.css', array(), '1.0.0');
    
    // Enqueue theme styles
    wp_enqueue_style('educonsult-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue theme scripts
    wp_enqueue_script('educonsult-script', get_template_directory_uri() . '/dist/js/scripts.js', array('jquery'), '1.0.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'educonsult_scripts');

// Register widget areas
function educonsult_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'educonsult'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'educonsult'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widgets', 'educonsult'),
        'id'            => 'footer-widgets',
        'description'   => esc_html__('Add footer widgets here.', 'educonsult'),
        'before_widget' => '<div id="%1$s" class="widget %2$s lg:w-1/4 md:w-1/2 w-full px-4 mb-10">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-lg font-medium mb-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'educonsult_widgets_init');

// Custom post type for Services
function educonsult_register_post_types() {
    register_post_type('services', array(
        'labels' => array(
            'name'               => __('Services', 'educonsult'),
            'singular_name'      => __('Service', 'educonsult'),
            'add_new'            => __('Add New', 'educonsult'),
            'add_new_item'       => __('Add New Service', 'educonsult'),
            'edit_item'          => __('Edit Service', 'educonsult'),
            'new_item'           => __('New Service', 'educonsult'),
            'view_item'          => __('View Service', 'educonsult'),
            'search_items'       => __('Search Services', 'educonsult'),
            'not_found'          => __('No services found', 'educonsult'),
            'not_found_in_trash' => __('No services found in Trash', 'educonsult'),
        ),
        'public'              => true,
        'has_archive'         => true,
        'menu_icon'           => 'dashicons-clipboard',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'             => array('slug' => 'services'),
        'menu_position'       => 5,
        'show_in_rest'        => true,
    ));
    
    register_post_type('testimonials', array(
        'labels' => array(
            'name'               => __('Testimonials', 'educonsult'),
            'singular_name'      => __('Testimonial', 'educonsult'),
            'add_new'            => __('Add New', 'educonsult'),
            'add_new_item'       => __('Add New Testimonial', 'educonsult'),
            'edit_item'          => __('Edit Testimonial', 'educonsult'),
            'new_item'           => __('New Testimonial', 'educonsult'),
            'view_item'          => __('View Testimonial', 'educonsult'),
            'search_items'       => __('Search Testimonials', 'educonsult'),
            'not_found'          => __('No testimonials found', 'educonsult'),
            'not_found_in_trash' => __('No testimonials found in Trash', 'educonsult'),
        ),
        'public'              => true,
        'has_archive'         => true,
        'menu_icon'           => 'dashicons-format-quote',
        'supports'            => array('title', 'editor', 'thumbnail'),
        'rewrite'             => array('slug' => 'testimonials'),
        'menu_position'       => 6,
        'show_in_rest'        => true,
    ));
    
    register_post_type('team', array(
        'labels' => array(
            'name'               => __('Team', 'educonsult'),
            'singular_name'      => __('Team Member', 'educonsult'),
            'add_new'            => __('Add New', 'educonsult'),
            'add_new_item'       => __('Add New Team Member', 'educonsult'),
            'edit_item'          => __('Edit Team Member', 'educonsult'),
            'new_item'           => __('New Team Member', 'educonsult'),
            'view_item'          => __('View Team Member', 'educonsult'),
            'search_items'       => __('Search Team Members', 'educonsult'),
            'not_found'          => __('No team members found', 'educonsult'),
            'not_found_in_trash' => __('No team members found in Trash', 'educonsult'),
        ),
        'public'              => true,
        'has_archive'         => true,
        'menu_icon'           => 'dashicons-groups',
        'supports'            => array('title', 'editor', 'thumbnail'),
        'rewrite'             => array('slug' => 'team'),
        'menu_position'       => 7,
        'show_in_rest'        => true,
    ));
}
add_action('init', 'educonsult_register_post_types');

// Add meta boxes for team members
function educonsult_add_meta_boxes() {
    add_meta_box(
        'team_details',
        __('Team Member Details', 'educonsult'),
        'educonsult_team_details_callback',
        'team',
        'normal',
        'high'
    );
    
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'educonsult'),
        'educonsult_testimonial_details_callback',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'educonsult_add_meta_boxes');

// Team member meta box callback
function educonsult_team_details_callback($post) {
    wp_nonce_field('educonsult_save_team_details', 'educonsult_team_nonce');
    
    $position = get_post_meta($post->ID, '_team_position', true);
    $email = get_post_meta($post->ID, '_team_email', true);
    $linkedin = get_post_meta($post->ID, '_team_linkedin', true);
    ?>
    <p>
        <label for="team_position"><?php _e('Position', 'educonsult'); ?></label>
        <input type="text" id="team_position" name="team_position" value="<?php echo esc_attr($position); ?>" class="widefat">
    </p>
    <p>
        <label for="team_email"><?php _e('Email', 'educonsult'); ?></label>
        <input type="email" id="team_email" name="team_email" value="<?php echo esc_attr($email); ?>" class="widefat">
    </p>
    <p>
        <label for="team_linkedin"><?php _e('LinkedIn Profile', 'educonsult'); ?></label>
        <input type="url" id="team_linkedin" name="team_linkedin" value="<?php echo esc_attr($linkedin); ?>" class="widefat">
    </p>
    <?php
}

// Testimonial meta box callback
function educonsult_testimonial_details_callback($post) {
    wp_nonce_field('educonsult_save_testimonial_details', 'educonsult_testimonial_nonce');
    
    $client_name = get_post_meta($post->ID, '_testimonial_client_name', true);
    $client_title = get_post_meta($post->ID, '_testimonial_client_title', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    ?>
    <p>
        <label for="testimonial_client_name"><?php _e('Client Name', 'educonsult'); ?></label>
        <input type="text" id="testimonial_client_name" name="testimonial_client_name" value="<?php echo esc_attr($client_name); ?>" class="widefat">
    </p>
    <p>
        <label for="testimonial_client_title"><?php _e('Client Title/School', 'educonsult'); ?></label>
        <input type="text" id="testimonial_client_title" name="testimonial_client_title" value="<?php echo esc_attr($client_title); ?>" class="widefat">
    </p>
    <p>
        <label for="testimonial_rating"><?php _e('Rating (1-5)', 'educonsult'); ?></label>
        <input type="number" id="testimonial_rating" name="testimonial_rating" value="<?php echo esc_attr($rating); ?>" min="1" max="5" class="widefat">
    </p>
    <?php
}

// Save team member meta
function educonsult_save_team_meta($post_id) {
    if (!isset($_POST['educonsult_team_nonce']) || !wp_verify_nonce($_POST['educonsult_team_nonce'], 'educonsult_save_team_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (isset($_POST['team_position'])) {
        update_post_meta($post_id, '_team_position', sanitize_text_field($_POST['team_position']));
    }
    
    if (isset($_POST['team_email'])) {
        update_post_meta($post_id, '_team_email', sanitize_email($_POST['team_email']));
    }
    
    if (isset($_POST['team_linkedin'])) {
        update_post_meta($post_id, '_team_linkedin', esc_url_raw($_POST['team_linkedin']));
    }
}
add_action('save_post_team', 'educonsult_save_team_meta');

// Save testimonial meta
function educonsult_save_testimonial_meta($post_id) {
    if (!isset($_POST['educonsult_testimonial_nonce']) || !wp_verify_nonce($_POST['educonsult_testimonial_nonce'], 'educonsult_save_testimonial_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (isset($_POST['testimonial_client_name'])) {
        update_post_meta($post_id, '_testimonial_client_name', sanitize_text_field($_POST['testimonial_client_name']));
    }
    
    if (isset($_POST['testimonial_client_title'])) {
        update_post_meta($post_id, '_testimonial_client_title', sanitize_text_field($_POST['testimonial_client_title']));
    }
    
    if (isset($_POST['testimonial_rating'])) {
        $rating = intval($_POST['testimonial_rating']);
        if ($rating < 1) $rating = 1;
        if ($rating > 5) $rating = 5;
        update_post_meta($post_id, '_testimonial_rating', $rating);
    }
}
add_action('save_post_testimonials', 'educonsult_save_testimonial_meta');

// Add custom shortcodes
function educonsult_services_shortcode($atts) {
    $atts = shortcode_atts(array(
        'count' => 3,
    ), $atts);
    
    $services = new WP_Query(array(
        'post_type' => 'services',
        'posts_per_page' => $atts['count'],
    ));
    
    ob_start();
    if ($services->have_posts()) {
        echo '<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">';
        while ($services->have_posts()) {
            $services->the_post();
            ?>
            <div class="bg-white shadow-md rounded-lg overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="h-48 overflow-hidden">
                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                <?php endif; ?>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3"><?php the_title(); ?></h3>
                    <div class="text-gray-600"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"><?php esc_html_e('Learn More', 'educonsult'); ?></a>
                </div>
            </div>
            <?php
        }
        echo '</div>';
    }
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('educonsult_services', 'educonsult_services_shortcode');

function educonsult_testimonials_shortcode($atts) {
    $atts = shortcode_atts(array(
        'count' => 3,
    ), $atts);
    
    $testimonials = new WP_Query(array(
        'post_type' => 'testimonials',
        'posts_per_page' => $atts['count'],
    ));
    
    ob_start();
    if ($testimonials->have_posts()) {
        echo '<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">';
        while ($testimonials->have_posts()) {
            $testimonials->the_post();
            $client_name = get_post_meta(get_the_ID(), '_testimonial_client_name', true);
            $client_title = get_post_meta(get_the_ID(), '_testimonial_client_title', true);
            $rating = get_post_meta(get_the_ID(), '_testimonial_rating', true);
            ?>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="mb-4">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <span class="text-yellow-400 text-xl">
                            <?php echo ($i <= $rating) ? '★' : '☆'; ?>
                        </span>
                    <?php endfor; ?>
                </div>
                <div class="italic text-gray-600 mb-4"><?php the_content(); ?></div>
                <div class="flex items-center">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    <div>
                        <div class="font-semibold"><?php echo esc_html($client_name); ?></div>
                        <?php if ($client_title) : ?>
                            <div class="text-sm text-gray-500"><?php echo esc_html($client_title); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
        }
        echo '</div>';
    }
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('educonsult_testimonials', 'educonsult_testimonials_shortcode');

function educonsult_team_shortcode($atts) {
    $atts = shortcode_atts(array(
        'count' => 4,
    ), $atts);
    
    $team = new WP_Query(array(
        'post_type' => 'team',
        'posts_per_page' => $atts['count'],
    ));
    
    ob_start();
    if ($team->have_posts()) {
        echo '<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">';
        while ($team->have_posts()) {
            $team->the_post();
            $position = get_post_meta(get_the_ID(), '_team_position', true);
            $email = get_post_meta(get_the_ID(), '_team_email', true);
            $linkedin = get_post_meta(get_the_ID(), '_team_linkedin', true);
            ?>
            <div class="bg-white shadow-md rounded-lg overflow-hidden text-center">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-4">
                        <?php the_post_thumbnail('medium', array('class' => 'w-full')); ?>
                    </div>
                <?php endif; ?>
                <div class="p-4">
                    <h3 class="text-xl font-semibold"><?php the_title(); ?></h3>
                    <?php if ($position) : ?>
                        <p class="text-gray-600 mb-2"><?php echo esc_html($position); ?></p>
                    <?php endif; ?>
                    <div class="text-sm mb-4"><?php the_content(); ?></div>
                    <div class="flex justify-center space-x-2">
                        <?php if ($email) : ?>
                            <a href="mailto:<?php echo esc_attr($email); ?>" class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($linkedin) : ?>
                            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
        }
        echo '</div>';
    }
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('educonsult_team', 'educonsult_team_shortcode');

// Include template functions
require get_template_directory() . '/inc/template-functions.php';

// Include customizer options
require get_template_directory() . '/inc/customizer.php';