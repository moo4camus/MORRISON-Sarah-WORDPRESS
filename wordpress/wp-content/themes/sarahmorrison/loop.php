<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
  <div class="title">
    <a href='<?php the_permalink(); ?>'>
      <?php
        the_title('<h2>','</h2>');
     ?></a>
  </div>

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
