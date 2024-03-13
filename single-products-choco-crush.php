<?php

/**
 * Template Name: Choco Crush
 * Template Post Type: products
 */
?>

<?php
get_header();
?>

<?php
get_template_part('templates/choco-crush/top');

// Check value exists.
if (have_rows('content')) :

  // Loop through rows.
  while (have_rows('content')) : the_row();

    // Case: Tabs layout.
    if (get_row_layout() == 'tabs') :
      get_template_part('templates/product/tabs');

    // Case: composition layout.
    elseif (get_row_layout() == 'composition') :
      get_template_part('templates/choco-crush/composition');

    // Case: inside layout.
    elseif (get_row_layout() == 'inside') :
      get_template_part('templates/choco-crush/inside');

    // Case: unpacking layout.
    elseif (get_row_layout() == 'unpacking') :
      get_template_part('templates/choco-crush/unpacking');

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