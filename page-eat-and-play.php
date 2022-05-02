<?php 
  /**
   * Template Name: Eat & Play
   * Template Post Type: page
   */
?>

<?php 
  get_header(  );
?>

<?php 
  get_template_part( 'templates/eat&play/top' );

  // Check value exists.
  if( have_rows('content') ):

    // Loop through rows.
    while ( have_rows('content') ) : the_row();

        // Case: Slider layout.
        if( get_row_layout() == 'slider' ):
          get_template_part( 'templates/eat&play/composition' );

        // Case: inside layout.
        elseif( get_row_layout() == 'inside' ):
          get_template_part( 'templates/eat&play/inside' );
        
        // Case: unpacking layout.
        elseif( get_row_layout() == 'unpacking' ):
          get_template_part( 'templates/eat&play/unpacking' );

        // Case: online layout.
        elseif( get_row_layout() == 'online' ):
          get_template_part( 'templates/eat&play/online' );
                  
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