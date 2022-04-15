<?php 
  global $class;

  if ( !isset($class) ) {
    $class = '';
  }

  $bob_top_left = get_field( 'bob_top_left' );
  
  $bob_top_left_text = get_field( 'bob_top_left_text' );
  $bob_top_left_text = $bob_top_left_text && !empty($bob_top_left_text) ? $bob_top_left_text : __( 'Легко брати <br>з собою!', 'bob' );
?>

<?php if ( $bob_top_left ) : ?>
  <?php if ( $class === 'stripes' ) : ?>
    <div class="stripes__snail">
      <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-eating.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
      <div class="stripes__snail-text">
        <p>
          <?= $bob_top_left_text; ?>          
        </p>
      </div>
    </div>
  <?php else : ?>
  <?php endif; ?>  
<?php endif; ?>
