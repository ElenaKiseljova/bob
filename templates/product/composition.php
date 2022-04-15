<?php 
  global $class;

  if ( !isset($class) ) {
    $class = '';
  }
?>
<section class="composition <?= $class; ?>">
  <div class="container">
    <div class="composition__inner">
      <?php 
        get_template_part( 'templates/product/composition-bob', 'top' );
      
        // Check value exists.
        if( have_rows('content') ):

          // Loop through rows.
          while ( have_rows('content') ) : the_row();

              // Case: Preparative layout.
              if( get_row_layout() == 'preparative' ):
                get_template_part( 'templates/product/preparative' );

              // Case: Advantages layout.
              elseif( get_row_layout() == 'advantages' ):
                get_template_part( 'templates/product/advantages' );
              
              // Case: Tabs layout.
              elseif( get_row_layout() == 'tabs' ):
                get_template_part( 'templates/product/tabs' );
                        
              endif;

          // End loop.
          endwhile;

        // No value.
        else :
          // Do something...
        endif;
      ?>
    </div>
  </div>

  <?php 
    get_template_part( 'templates/product/composition-bob', 'right' );
  ?>
</section>