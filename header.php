<?php
/**
 * Header template
 *
 * @package EduConsult
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans antialiased'); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site flex flex-col min-h-screen">
    <a class="skip-link sr-only" href="#primary"><?php esc_html_e('Skip to content', 'educonsult'); ?></a>

    <header id="masthead" class="site-header bg-white shadow-md">
        <div class="container mx-auto">
            <!-- Top Bar with Contact Info -->
            <div class="bg-blue-900 text-white py-2 px-4 text-sm">
                <div class="container mx-auto flex flex-wrap justify-between items-center">
                    <!-- Contact Info -->
                    <div class="flex items-center space-x-4">
                        <a href="tel:<?php echo esc_attr(get_theme_mod('educonsult_phone', '123-456-7890')); ?>" class="flex items-center hover:text-blue-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <?php echo esc_html(get_theme_mod('educonsult_phone', '123-456-7890')); ?>
                        </a>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('educonsult_email', 'info@example.com')); ?>" class="flex items-center hover:text-blue-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <?php echo esc_html(get_theme_mod('educonsult_email', 'info@example.com')); ?>
                        </a>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="flex items-center space-x-3">
                        <?php if (get_theme_mod('educonsult_facebook')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('educonsult_facebook')); ?>" target="_blank" class="hover:text-blue-200" aria-label="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_twitter')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('educonsult_twitter')); ?>" target="_blank" class="hover:text-blue-200" aria-label="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_instagram')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('educonsult_instagram')); ?>" target="_blank" class="hover:text-blue-200" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_linkedin')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('educonsult_linkedin')); ?>" target="_blank" class="hover:text-blue-200" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Main Navigation -->
            <div class="flex flex-wrap justify-between items-center py-4 px-4 md:px-0">
                <div class="flex items-center">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php else : ?>
                        <h1 class="site-title text-2xl font-bold">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-blue-800 hover:text-blue-600 transition-colors" rel="home">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                        <p class="site-description text-sm text-gray-600"><?php bloginfo('description'); ?></p>
                    <?php endif; ?>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" class="md:hidden block text-gray-800 hover:text-blue-600 focus:outline-none" aria-expanded="false" aria-controls="primary-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                
                <nav id="site-navigation" class="main-navigation md:flex hidden w-full md:w-auto mt-4 md:mt-0">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'flex flex-col md:flex-row md:space-x-6',
                        'fallback_cb'    => function() {
                            echo '<ul class="flex flex-col md:flex-row md:space-x-6">';
                            echo '<li class="menu-item"><a href="' . esc_url(home_url('/')) . '" class="block py-2 text-gray-800 hover:text-blue-600 border-b md:border-b-0">' . esc_html__('Home', 'educonsult') . '</a></li>';
                            echo '</ul>';
                        },
                        'add_li_class'   => 'menu-item',
                        'link_class'     => 'block py-2 text-gray-800 hover:text-blue-600 border-b md:border-b-0',
                    ));
                    ?>
                    <div class="mt-4 md:mt-0 ml-0 md:ml-6">
                        <a href="<?php echo esc_url(get_theme_mod('educonsult_cta_link', '#')); ?>" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                            <?php echo esc_html(get_theme_mod('educonsult_cta_text', 'Free Consultation')); ?>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div id="content" class="site-content flex-grow">