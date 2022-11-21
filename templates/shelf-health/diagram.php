<?php 
  $content = get_sub_field( 'content' ) ?? '';
  $button = get_sub_field( 'button' ) ?? 'LEARN MORE';
  $popup = get_sub_field( 'popup' ) ?? null;
  $image = get_sub_field( 'image' ) ?? '';
?>

<section class="unit unit--7">
  <div class="container">
    <div class="unit__inner">
      <div class="unit__head unit__head--big">
        <?= $content; ?>

        <?php if ($popup) : ?>
          <button class="unit__btn" data-section="7"><?= $button; ?></button>
          
          <div class="content-popup">
            <?= $popup; ?>
          </div>
        <?php endif; ?>  
      </div>
      <div class="unit__graph">
        <img src="<?= $image; ?>" alt="img" />
      </div>
    </div>
  </div>

  <div class="unit__vector vector">
    <svg class="vector__background vector__background--9">
      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/vectors/index.svg#cloud-vector"></use>
    </svg>
  </div>
  <img
    class="icon unit__image unit__image--24"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    alt="img"
  />
  <img
    class="icon unit__image unit__image--25"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
    alt="img"
  />
</section>