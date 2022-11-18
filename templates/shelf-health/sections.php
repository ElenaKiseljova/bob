<?php 
  $list = get_sub_field( 'list' ) ?? [];
?>

<?php if ( $list && is_array($list) && !empty($list) && !is_wp_error( $list ) ) : ?>
  <?php foreach ($list as $index => $item) : ?>
    <?php 
      $content = $item['content'] ?? '';  
      $button = $item['button'] ?? 'LEARN MORE';  
      $popup = $item['popup'] ?? null;  
    ?>
    <section class="unit unit--<?= $index + 1; ?> <?= ($index + 1) === 6 ? 'unit--white' : ''; ?>" <?= $index === 0 ? 'id="facts"' : ''; ?>>
      <div class="container">
        <div class="unit__inner">
          <div class="unit__head">
            <?= $content; ?>

            <?php if ($popup) : ?>
              <button class="unit__btn" data-section="<?= $index + 1; ?>"><?= $button; ?></button>
            
              <div class="modal" data-modal="<?= $index + 1; ?>">
                <div class="modal__body">
                  <div class="modal__overlay"></div>
                  <div class="modal__content">
                    <div class="modal__top">
                      <div class="modal__close"></div>

                      <button class="modal__close">
                        <svg class="modal__close-svg">
                          <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#close"></use>
                        </svg>
                      </button>
                    </div>
                    <div class="modal__main">
                      <?= $popup; ?>
                    </div>
                  </div>
                </div>
              </div>
             <?php endif; ?>            
          </div>
        </div>
      </div>

      <?php 
        get_template_part( 'templates/shelf-health/images/section', ($index + 1)  ); 
      ?>
    </section>
  <?php endforeach; ?>
<?php endif; ?>