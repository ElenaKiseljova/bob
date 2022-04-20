<?php 
  global $class;

  if ( !isset($class) ) {
    $class = '';
  }

  $top_bob = get_field( 'top_bob' ) ?? 'deault';
  
  $top_bob_text = get_field( 'top_bob_text' );
  $top_bob_text = $top_bob_text && !empty($top_bob_text) ? $top_bob_text : __( 'Легко брати <br>з собою!', 'bob' );
?>

<?php if ( $top_bob === 'left' ) : ?>
  <?php if ( $class === 'stripes' ) : ?>
    <div class="stripes__snail">
      <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-eating.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
      <div class="stripes__snail-text">
        <p>
          <?= $top_bob_text; ?>          
        </p>
      </div>
    </div>
  <?php else : ?>
    <!-- Default -->
    <div class="stripes__snail">
      <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-eating.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
      <div class="stripes__snail-text">
        <p>
          <?= $top_bob_text; ?>          
        </p>
      </div>
    </div>
  <?php endif; ?>  
<?php elseif ( $top_bob === 'right' ) : ?>
  <?php if ( $top_bob === 'bab' ) : ?>
    <div class="baby__snail">
      <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-footer.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
      <div class="baby__snail-text">
        <p>
          <?= $top_bob_text; ?> 
        </p>
      </div>
    </div>
  <?php else : ?>
    <!-- Default -->
    <div class="baby__snail">
      <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-footer.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
      <div class="baby__snail-text">
        <p>
          <?= $top_bob_text; ?> 
        </p>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>
