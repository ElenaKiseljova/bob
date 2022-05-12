<?php 
  /**
   * Template Name: Продукция
   * Template Post Type: page
   */
?>

<?php 
  get_header( 'products' );
?>

<h1 class="visually-hidden"><?= get_the_title(  ); ?></h1>

<div class="product">
  <div class="container">
    <?php 
      get_template_part( 'templates/products/list' );

      get_template_part( 'templates/products/new' );
    ?>
  </div>  
</div>

<?php 
  get_footer(  );
?>
