<!-- <?php echo basename(__FILE__); ?> -->
<html>
  <head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1><?php echo get_bloginfo('name'); ?></h1>
      <h2><?php echo get_bloginfo('description'); ?></h2>
      <?php get_template_part('nav'); ?>
    </header>
<!-- <?php echo "END OF " . basename(__FILE__); ?> -->
