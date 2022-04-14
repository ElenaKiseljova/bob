<?php 
  $bob_right = get_field( 'bob_right' );
?>
<?php if ( $bob_right ) : ?>
  <div class="composition__snail-right">
    <div class="composition__snail-text">
      <p><?= __( 'Повільне запікання зберігає вітаміни', 'bob' ); ?></p>
    </div>
    <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-drack-scroll.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
  </div>
<?php endif; ?>  