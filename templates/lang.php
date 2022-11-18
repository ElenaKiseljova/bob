<?php 
  $is_shelf_health = is_page_template( 'page-shelf-health.php' );
  $shelf_health_lang_class = $is_shelf_health ? 'lang--hide' : '';
?>

<!-- lang--hide - модификатор, чтобы спрятать переключение языков -->
<div class="header__lang lang <?= $shelf_health_lang_class; ?>">
  <?php if ( function_exists( 'pll_current_language' ) ) : ?>
    <button class="lang__btn">
      <span><?= pll_current_language() === 'uk' ? 'ua' : pll_current_language(); ?></span>
      <svg width="15" height="8">
        <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow-down"></use>
      </svg>
    </button>
  <?php endif; ?>
  
  <div class="lang__wrapper">
    <button class="lang__close">
      <svg width="45" height="45">
        <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#close"></use>
      </svg>
    </button>
    <h2 class="lang__head"><?= __( 'Вибір мови', 'bob' )?></h2>

    <?php if ( function_exists( 'pll_the_languages' ) ) : ?>
      <?php 
        $langaages = pll_the_languages(array('raw'=>1));   
      ?>
      <ul class="lang__list" data-simplebar>
        <?php foreach ($langaages as $key => $langaage) : ?>
          <li class="lang__item <?= $langaage['current_lang'] ? 'active' : ''; ?>" data-lang-code="<?= $langaage['slug']; ?>">
            <a href="<?= $langaage['url']; ?>">
              <?= mb_strtoupper($langaage['name']); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?> 
  </div>
</div>