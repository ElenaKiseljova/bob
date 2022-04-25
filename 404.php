<?php 
  /**
   * Template Name: 404
   * Template Post Type: page
   */
?>

<?php 
  get_header(  );
?>

<section class="top error">
  <div class="container">
    <div class="contacts__inner">
      <div class="top__head">
        <h1>
          <?=
            __( 'ой бооо,<br />СТАЛАСЯ ХАЛЕПА!', 'bob' );
          ?>
        </h1>
        <p>          
          <?=
            __( 'Сторінки не існує або <br />я переніс її на іншу адресу', 'bob' );
          ?>
        </p>
      </div>
      <div class="error__links links">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'not_found',
              'container'       => null,
              'menu_class'      => 'links__list',
              'depth'           => 0,
            )
          );	
        ?>
      </div>
    </div>
  </div>
  <div class="error__snail">
    <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/404.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
    <div class="error__snail-text">
      <p><?= __( 'Вибачай!', 'bob' ); ?></p>
    </div>
  </div>
</section>