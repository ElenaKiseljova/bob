<?php
global $index, $images;

$archive = get_field('archive') ?? [];

$colors = [
  '1' => '#F16676',
  '2' => '#FDDA64',
  '3' => '#FEBC11',
  '4' => '#FF8300',
  '5' => '#F173AC',
  '6' => '#344A9A',
  '7' => '#9D207B',
  '8' => '#FF6C01',
  '9' => '#ffcf2e',
  '10' => '#FDEECC'
];

$product_template = get_page_template_slug();
$product_template = ($product_template && !empty($product_template) && !is_wp_error($product_template)) ? 'templates/products/templates/' . explode('.php', $product_template)[0] : '';
$product_template = explode('single-products-', $product_template)[1] ?? explode('page-', $product_template)[1] ?? 'default';

$block_class = 'product-' . $product_template;
?>
<?php if (isset($index) && $archive && !empty($archive) && !is_wp_error($archive)) : ?>
  <?php
  $images = $archive['images'] ?? '';

  $background = $archive['background'] ?? '';

  $button_text = $archive['button_text'] ?? '';
  $button_text = !empty($button_text) ? $button_text : __('Знайди свій смак', 'bob');
  ?>

  <div class="product__block block-<?= $index; ?> <?= $block_class; ?>" style="--z-block: calc(var(--blocks-count) - <?= $index ?? 0; ?>)">
    <section class="section-js product__item <?= ((int) $index === 1) ? 'section-first active' : 'section'; ?> section-<?= $index; ?>" data-scrollcolor="<?= !empty($background) ? $background : ($colors[$index] ?? '#ffffff'); ?>">
      <div class="product__text">
        <h2>
          <?= get_the_title(); ?>
        </h2>
      </div>

      <a href="<?= get_the_permalink(); ?>" class="btn"><?= $button_text; ?></a>

      <?php if ((int) $index === 1) : ?>
        <button class="product__arrow btn">
          <svg width="12" height="7">
            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-down-white"></use>
          </svg>
        </button>
      <?php endif; ?>
    </section>

    <?php
    $is_template = get_template_part($product_template);

    if ($is_template === false) {
      get_template_part('templates/products/templates/default');
    }
    ?>
  </div>
<?php endif; ?>