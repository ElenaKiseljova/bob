<?php 
  $bob_right = get_field( 'bob_right' );

  $bob_right_text = get_field( 'bob_right_text' );
  $bob_right_text = $bob_right_text && !empty($bob_right_text) ? $bob_right_text : __( 'Повільне запікання зберігає вітаміни', 'bob' );
?>
<?php if ( $bob_right ) : ?>
  <div class="composition__snail-right">
    <div class="composition__snail-text">
      <p><?= $bob_right_text; ?></p>
    </div>
    <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-drack-scroll.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
  </div>
<?php endif; ?>  