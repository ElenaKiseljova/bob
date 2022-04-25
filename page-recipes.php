<?php 
  /**
   * Template Name: Рецепты
   * Template Post Type: page
   */
?>

<?php 
  get_header(  );
?>

<?php 
  get_template_part( 'templates/recipes/top' );

  get_template_part( 'templates/recipes/composition' );
?>

<?php 
  get_footer(  );
?>