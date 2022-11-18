<?php 
  /**
   * Template Name: Shelf Health
   * Template Post Type: page
   */
?>

<?php 
  get_header(  );
?>

<div class="wrapper">
  <?php 
    get_template_part( 'templates/shelf-health/top' );

    // Check value exists.
    if( have_rows('content') ):

      // Loop through rows.
      while ( have_rows('content') ) : the_row();

          // Case: sections layout.
          if( get_row_layout() == 'sections' ):
            get_template_part( 'templates/shelf-health/sections' );

          // Case: diagram layout.
          elseif( get_row_layout() == 'diagram' ):
            get_template_part( 'templates/shelf-health/diagram' );
          
          // Case: form layout.
          elseif( get_row_layout() == 'form' ):
            get_template_part( 'templates/shelf-health/form' );
                    
          endif;

      // End loop.
      endwhile;

    // No value.
    else :
      // Do something...
    endif;
  ?>
</div>

<?php 
  get_footer(  );
?>