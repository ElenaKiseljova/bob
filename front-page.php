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

        // // Case: Unique Team layout.
        // elseif( get_row_layout() == 'unique_team' ):
        //   get_template_part( 'templates/front/unique_team' );
        
        // // Case: CEO layout.
        // elseif( get_row_layout() == 'ceo' ):
        //   get_template_part( 'templates/front/ceo' );

        // // Case: Services layout.
        // elseif( get_row_layout() == 'services' ): 
        //     get_template_part( 'templates/front/services' ); 

        // // Case: Projects layout.
        // elseif( get_row_layout() == 'projects' ): 
        //   get_template_part( 'templates/front/projects' ); 
        
        // // Case: Selected without text layout.
        // elseif( get_row_layout() == 'selected' ): 
        //   get_template_part( 'templates/front/selected' ); 
                  
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