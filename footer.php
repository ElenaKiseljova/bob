<?php 
  $color_footer = get_field( 'color_footer' ) ?? '';
  $color_cloud_text = get_field( 'color_cloud_text' ) ?? '';

  $color_background_footer = get_field( 'color_background_footer' ) && !empty(get_field( 'color_background_footer' )) ? get_field( 'color_background_footer' ) : '#ffffff';
  
  $color_background_cloud = get_field( 'color_background_cloud' ) && !empty(get_field( 'color_background_cloud' )) ? get_field( 'color_background_cloud' ) : '#FDDA64';
?>
    <footer class="footer <?= !empty($color_footer) ? $color_footer : ''; ?>">
      <div class="footer__background">
        <svg width="1800" height="1059" viewBox="0 0 1800 1059" fill="<?= $color_background_footer; ?>">
          <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#footer-bg"></use>
        </svg>
      </div>
      <svg class="footer__background-mobile" width="100%" fill="<?= $color_background_footer; ?>">
        <rect width="100%" height="100%" />
      </svg>

      <div class="container">
        <div class="footer__inner">
          <div class="footer__left">
            <?php 
              get_template_part( 'templates/logo', 'footer' );

              get_template_part( 'templates/menu', 'footer' );
            ?>
          </div>
          
          <div class="footer__right">
            <div class="footer__snail  <?= !empty($color_cloud_text) ? $color_cloud_text : ''; ?>">
              <div class="footer__snail-text">
                <div class="footer__cloud">
                  <svg width="100%" height="100%" fill="<?= $color_background_cloud; ?>">
                    <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#footer-cloud"></use>
                  </svg>
                </div>

                <span><?= __( 'Відоси, фоточки і уся смачна інфа', 'bob' ); ?></span>
            
                <?php 
                  get_template_part( 'templates/menu', 'social' );
                ?>
              </div>

              <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-footer.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
            </div>
          </div>
        </div>
      </div>
    </footer>

    <?php 
      wp_footer(  );
    ?>
  </body>
</html>