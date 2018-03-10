<!-- <?php echo basename(__FILE__); ?> -->
<div class="page-wrap">
  <main>
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
        <?php
          the_title('<h2>','</h2>');
       ?>
      <div class="posts">
        <?php
        the_content(); ?>
        <div class="category"><?php
        the_category( $separator, $parents, $post_id );
        ?>
      </div>
      </div>
    <?php endwhile; else : ?>

      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </main>
</div>
<!-- <?php echo "END OF " . basename(__FILE__); ?> -->
