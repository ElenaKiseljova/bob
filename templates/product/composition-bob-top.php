<?php 
  global $class;

  if ( !isset($class) ) {
    $class = '';
  }

  $bob_top = get_field( 'bob_top' );

  $bob_top_text = get_field( 'bob_top_text' );
  $bob_top_text = $bob_top_text && !empty($bob_top_text) ? $bob_top_text : __( 'А ще їх можна розкручувати!', 'bob' );
?>
<?php if ( $bob_top ) : ?>
  <?php if ( $class === 'marmalade' ) : ?>
    <div class="marmalade__snail">
      <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-rolls.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
      <div class="marmalade__snail-text">
        <p>
          <?= $bob_top_text; ?>
        </p>
      </div>
    </div>
  <?php elseif( $class === 'sweets' ) : ?>
    <div class="sweets__snail-top">
      <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-sings.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
      <div class="sweets__snail-text">
        <p><?= $bob_top_text; ?></p>
      </div>
      <img
        class="icon sweets__candy sweets__candy--1"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/sweets/chocolate-marmalade-1.png"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
      <img
        class="icon sweets__candy sweets__candy--2"
        src="<?= get_template_directory_uri(  ); ?>/assets/img/sweets/chocolate-marmalade-2.png"
        alt="<?= get_bloginfo( 'name' ); ?>"
      />
    </div>
  <?php else : ?>
    <div class="composition__snail-top">
      <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-rolls.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
      <div class="composition__snail-text">
        <p><?= $bob_top_text; ?></p>
      </div>
    </div>
  <?php endif; ?>
  
<?php endif; ?>