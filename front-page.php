<?php 
  /**
   * Template Name: Главная
   * Template Post Type: page
   */
?>

<?php 
  get_header(  );
?>

<h1 class="visually-hidden"><?= get_bloginfo( 'name') . ' - ' . get_bloginfo( 'description'); ?></h1>

<?php 
  // Check value exists.
  if( have_rows('content') ):

    // Loop through rows.
    while ( have_rows('content') ) : the_row();

        // Case: Slider layout.
        if( get_row_layout() == 'slider' ):
            get_template_part( 'templates/front/slider' );

        // Case: Composition layout.
        elseif( get_row_layout() == 'composition' ):
          get_template_part( 'templates/front/composition' );
        
        // Case: Fruit rolls layout.
        elseif( get_row_layout() == 'fruit-rolls' ):
          get_template_part( 'templates/front/fruit-rolls' );
                  
        endif;

    // End loop.
    endwhile;

  // No value.
  else :
    // Do something...
  endif;
?>

<?php 
  get_footer(  );
?>