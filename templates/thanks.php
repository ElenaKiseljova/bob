<?php 
  $bob_text = get_field( 'bob_text' ) ?? '';
  $text = get_field( 'text' ) ?? '';

  $buttons = get_field( 'buttons' ) ?? [];
?>
<section class="thanks">
  <div class="container">
    <div class="thanks__inner">
      <div class="thanks__head">    
        <?php 
          the_content(  );
        ?>

        <div class="thanks__snail-top">
          <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-thanks.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
          <div class="thanks__snail-text">
            <p><?= $bob_text; ?></p>
          </div>
        </div>
      </div>
      <div class="thanks__descr">
        <p>          
          <?= $text; ?>
        </p>
      </div>

      <?php if ( $buttons && !empty($buttons) && is_array($buttons) && !is_wp_error( $buttons ) ) : ?>
        <?php foreach ($buttons as $key => $button) : ?>
          <?php 
            $title = $button['title'] ?? '';  
            $link = $button['link'] ?? '';  
          ?>

          <a class="thanks__btn btn" href="<?= $link; ?>">        
            <?= $title; ?>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>      
    </div>
  </div>
  
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
    class="icon thanks__image thanks__image--1"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
    class="icon thanks__image thanks__image--2"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
    class="icon thanks__image thanks__image--3"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    class="icon thanks__image thanks__image--4"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
    class="icon thanks__image thanks__image--5"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    class="icon thanks__image thanks__image--6"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>