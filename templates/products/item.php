<?php 
  global $index, $images;

  $archive = get_field( 'archive' ) ?? [];

  $colors = [
    '1' => '#F16676',
    '2' => '#FDDA64',
    '3' => '#FEBC11',
    '4' => '#FF8300',
    '5' => '#F173AC',
    '6' => '#344A9A',
    '7' => '#9D207B',
    '8' => '#FF6C01',
  ];
?>
<?php if ( isset($index) && $archive && !empty($archive) && !is_wp_error( $archive )) : ?>
  <?php 
    $images = $archive['images'] ?? '';

    $background = $archive['background'] ?? '';

    $button_text = $archive['button_text'] ?? '';
    $button_text = !empty($button_text) ? $button_text : __( 'Знайди', 'bob' );
  ?>

  <div class="product__block block-<?= $index; ?>">
    <section
      class="section-js product__item <?= ( (int) $index === 1) ? 'section-first active' : 'section'; ?> section-<?= $index; ?>"
      data-scrollcolor="<?= !empty($background) ? $background : $colors[$index]; ?>"
      >
      <div class="product__text">
        <h2>
          <?= get_the_title(  ); ?>
        </h2>
      </div>

      <a href="<?= get_the_permalink(  ); ?>" class="btn"><?= $button_text; ?></a>

      <?php if ( (int) $index === 1 ) : ?>
        <button class="product__arrow btn">
          <svg width="12" height="7">
            <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow-down-white"></use>
          </svg>
        </button>
      <?php endif; ?>  
    </section>
    
    <?php 
      $product_template = get_page_template_slug(  );
      $product_template = ($product_template && !empty($product_template) && !is_wp_error( $product_template ) ) ? 'templates/products/templates/' . explode( '.php', get_page_template_slug(  ) )[0] : '';
    
      get_template_part( $product_template );
    ?>
  </div>
<?php endif; ?>


