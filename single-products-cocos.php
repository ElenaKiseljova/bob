<?php 
  /**
   * Template Name: Кокосовые десерты
   * Template Post Type: products
   */
?>

<?php 
  get_header(  );
?>

<?php 
  get_template_part( 'templates/product/top' );

  get_template_part( 'templates/product/composition' );
?>

<?php 
  get_footer(  );
?>