<?php

/**
 * Template Name: Small Christmas box
 * Template Post Type: products
 */
?>

<?php
get_header();
?>

<?php
get_template_part('templates/small-christmas-box/top');

// Check value exists.
if (have_rows('content')) :

  // Loop through rows.
  while (have_rows('content')) : the_row();

    // Case: composition layout.
    if (get_row_layout() == 'composition') :
      get_template_part('templates/small-christmas-box/composition');

    endif;

  // End loop.
  endwhile;

// No value.
else :
// Do something...
endif;
?>

<?php
get_footer();
?>