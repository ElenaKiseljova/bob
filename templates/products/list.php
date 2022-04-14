<?php 
  global $index;

  $list = get_field( 'list' ) ?? [];
?>
<?php if ( $list && is_array($list) && !empty($list) && !is_wp_error( $list ) ) : ?>
  <div class="product__wrapper">  
    <?php foreach ($list as $key => $post) : ?>
      <?php 
        $index = $key + 1;

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post);  

        get_template_part( 'templates/products/item' );
      ?>
    <?php endforeach; ?>

    <span class="space"></span>
  </div>
  <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata();
  ?>
<?php endif; ?>
