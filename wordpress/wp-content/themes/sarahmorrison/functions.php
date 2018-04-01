<?php

  add_theme_support('post-thumbnails');

  add_action('wp_enqueue_scripts', 'loadCSS');

    function loadCSS() {
      wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/theme-styles.css');
    }

  add_filter('body_class', 'customBodyClasses');

    function customBodyClasses($classes) {

      if (is_single()) {
        $classes[] = "my-single-post";
      }

      $classes[] = 'my-class';
      $classes[] = 'second';
      return $classes;
      }

  add_filter('show_admin_bar', '__return_false');
 ?>
