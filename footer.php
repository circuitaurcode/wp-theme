<?php
/**
 * Footer template
 *
 * @package EduConsult
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer bg-blue-900 text-white pt-12 pb-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <!-- About widget area -->
                <div class="lg:w-1/4 md:w-1/2 w-full px-4 mb-10">
                    <h3 class="text-lg font-semibold mb-4"><?php esc_html_e('About Us', 'educonsult'); ?></h3>
                    <?php if (get_theme_mod('educonsult_footer_about')) : ?>
                        <p class="mb-4 text-gray-300"><?php echo wp_kses_post(get_theme_mod('educonsult_footer_about')); ?></p>
                    <?php endif; ?>
                    
                    <div class="flex space-x-3 mt-4">
                        <?php if (get_theme_mod('educonsult_facebook')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('educonsult_facebook')); ?>" target="_blank" class="text-white hover:text-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_twitter')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('educonsult_twitter')); ?>" target="_blank" class="text-white hover:text-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_instagram')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('educonsult_instagram')); ?>" target="_blank" class="text-white hover:text-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_linkedin')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('educonsult_linkedin')); ?>" target="_blank" class="text-white hover:text-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="lg:w-1/4 md:w-1/2 w-full px-4 mb-10">
                    <h3 class="text-lg font-semibold mb-4"><?php esc_html_e('Quick Links', 'educonsult'); ?></h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_id'        => 'footer-menu',
                        'container'      => false,
                        'depth'          => 1,
                        'menu_class'     => 'list-none',
                        'fallback_cb'    => '__return_false',
                        'add_li_class'   => 'mb-2',
                        'link_class'     => 'text-gray-300 hover:text-white transition-colors',
                    ));
                    ?>
                </div>
                
                <!-- Contact Info -->
                <div class="lg:w-1/4 md:w-1/2 w-full px-4 mb-10">
                    <h3 class="text-lg font-semibold mb-4"><?php esc_html_e('Contact Us', 'educonsult'); ?></h3>
                    <ul class="list-none">
                        <?php if (get_theme_mod('educonsult_address')) : ?>
                            <li class="flex items-start mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-gray-300"><?php echo nl2br(esc_html(get_theme_mod('educonsult_address'))); ?></span>
                            </li>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_phone')) : ?>
                            <li class="flex items-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <a href="tel:<?php echo esc_attr(get_theme_mod('educonsult_phone')); ?>" class="text-gray-300 hover:text-white">
                                    <?php echo esc_html(get_theme_mod('educonsult_phone')); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_email')) : ?>
                            <li class="flex items-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <a href="mailto:<?php echo esc_attr(get_theme_mod('educonsult_email')); ?>" class="text-gray-300 hover:text-white">
                                    <?php echo esc_html(get_theme_mod('educonsult_email')); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('educonsult_hours')) : ?>
                            <li class="flex items-start mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-300"><?php echo nl2br(esc_html(get_theme_mod('educonsult_hours'))); ?></span>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                
                <!-- Footer Widget Area -->
                <?php if (is_active_sidebar('footer-widgets')) : ?>
                    <?php dynamic_sidebar('footer-widgets'); ?>
                <?php endif; ?>
            </div>
            
            <div class="pt-8 mt-8 border-t border-blue-800 text-center text-sm text-gray-400">
                <p>
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                    <?php if (get_theme_mod('educonsult_footer_text')) : ?>
                        <?php echo wp_kses_post(get_theme_mod('educonsult_footer_text')); ?>
                    <?php else : ?>
                        <?php esc_html_e('All Rights Reserved.', 'educonsult'); ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </footer>

    <?php if (get_theme_mod('educonsult_show_back_to_top', true)) : ?>
        <button id="back-to-top" class="fixed bottom-6 right-6 bg-blue-600 text-white p-2 rounded-full shadow-md hover:bg-blue-700 transition-all transform translate-y-20 opacity-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>