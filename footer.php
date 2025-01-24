<?php
$color_footer = get_field('color_footer') ?? '';
$color_cloud_text = get_field('color_cloud_text') ?? '';

$color_background_footer = get_field('color_background_footer') && !empty(get_field('color_background_footer')) ? get_field('color_background_footer') : '#ffffff';

$color_background_cloud = get_field('color_background_cloud') && !empty(get_field('color_background_cloud')) ? get_field('color_background_cloud') : '#FDDA64';

// Page templates
$is_shelf_health = is_page_template('page-shelf-health.php');
$is_lucy_ticket = is_page_template('page-lucky-ticket.php');

// Additional list of classes for Footer
$footer_classes = '';

if ($is_shelf_health) {
  $footer_classes = 'footer--new shelf-health-footer';
} else if ($is_lucy_ticket) {
  $footer_classes = 'lucky-ticket-footer';
}

?>
<!-- footer--new - модификатор, для нового футера -->
<footer class="footer <?= $footer_classes; ?> <?= !empty($color_footer) ? $color_footer : ''; ?>">
  <div class="footer__background">
    <svg width="1800" height="1059" viewBox="0 0 1800 1059" fill="<?= $color_background_footer; ?>">
      <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#footer-bg"></use>
    </svg>
  </div>
  <svg class="footer__background-mobile" width="100%" fill="<?= $color_background_footer; ?>">
    <rect width="100%" height="100%" />
  </svg>

  <div class="container">
    <div class="footer__inner">
      <div class="footer__left">
        <?php
        get_template_part('templates/logo', 'footer');

        if ($is_shelf_health) {
          get_template_part('templates/menu', 'footer-shelf-healf');
        } else {
          get_template_part('templates/menu', 'footer');
        }
        ?>
      </div>

      <div class="footer__right">
        <div class="footer__snail  <?= !empty($color_cloud_text) ? $color_cloud_text : ''; ?>">
          <div class="footer__snail-text">
            <div class="footer__cloud">
              <svg width="100%" height="100%" fill="<?= $color_background_cloud; ?>">
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#footer-cloud"></use>
              </svg>
            </div>

            <?php if ($is_shelf_health) : ?>
              <span><?= __('Videos, photos and all the tasty info', 'bob'); ?></span>
            <?php else : ?>
              <span><?= __('Відоси, фоточки і уся смачна інфа', 'bob'); ?></span>
            <?php endif; ?>

            <?php
            get_template_part('templates/menu', 'social');
            ?>
          </div>

          <img class="<?= $is_shelf_health ? 'hide' : ''; ?>" src="<?= get_template_directory_uri(); ?>/assets/img/icons/snail-footer.svg" alt="<?= get_bloginfo('name'); ?>" />
        </div>
      </div>
    </div>

    <button class="btn btn--up <?= $is_shelf_health ? 'hide' : ''; ?>">
      <svg width="12" height="8">
        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-down-white"></use>
      </svg>
    </button>

  </div>

  <?php if ($is_shelf_health) : ?>
    <img
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/piece-strawberry.svg"
      class="icon footer__fruit footer__fruit--1"
      alt="img" />
    <img
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
      class="icon footer__fruit footer__fruit--2"
      alt="img" />
    <img
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/cherry.svg"
      class="icon footer__fruit footer__fruit--3"
      alt="img" />
    <img
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear-big.svg"
      class="icon footer__fruit footer__fruit--4"
      alt="img" />
  <?php endif; ?>
</footer>

<?php if ($is_shelf_health) : ?>
  <!-- landing-page END - класс для стилизации кастомного скролла -->
  </div>

  <div class="modal">
    <div class="modal__body">
      <div class="modal__overlay"></div>
      <div class="modal__content">
        <div class="modal__top">
          <div class="modal__close"></div>
          <button class="modal__close">
            <svg class="modal__close-svg">
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#close"></use>
            </svg>
          </button>
        </div>
        <div class="modal__main">
          <!-- content -->
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php
wp_footer();
?>
</body>

</html>