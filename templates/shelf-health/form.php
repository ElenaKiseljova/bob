<?php 
  $title = get_sub_field( 'title' ) ?? '';
  $form = get_sub_field( 'form' ) ?? '';
?>

<section class="unit unit--8" id="contacts">
  <div class="container">
    <div class="unit__inner">
      <div class="unit__head">
        <h2 class="unit__title unit__title--medium">
          <?= $title; ?>
        </h2>
      </div>

      <div class="unit__form">
        <?= $form; ?>
      </div>

      <!-- <form class="form form--new">
        <div class="form__block form__block--error">
          <span class="form__label">Name or company name</span>
          <input
            class="form__input"
            type="text"
            placeholder="Name or company name"
            required
          />
          <span class="form__error">Error message</span>
        </div>
        <div class="form__block">
          <span class="form__label">Country</span>
          <input
            class="form__input"
            type="text"
            placeholder="Country"
            required
          />
        </div>
        <div class="form__block">
          <span class="form__label">E-mail</span>
          <input
            class="form__input"
            type="email"
            placeholder="E-mail"
            required
          />
        </div>
        <div class="form__block form__block--dispensable">
          <span class="form__label">Notes</span>
          <textarea
            class="form__input form__input--area"
            placeholder="Notes"
          ></textarea>
        </div>
        <button type="submit" class="btn btn--new">JOIN NOW</button>
      </form> -->
    </div>
  </div>
  <div class="unit__vector vector">
    <svg class="vector__background vector__background--10">
      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/vectors/index.svg#main-vector"></use>
    </svg>
  </div>
  <div class="unit__vector vector">
    <svg class="vector__background vector__background--11">
      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/vectors/index.svg#cloud-vector"></use>
    </svg>
  </div>
  <img
    class="icon unit__image unit__image--26"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/cherry.svg"
    alt=""
  />
  <img
    class="icon unit__image unit__image--27"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/piece-strawberry.svg"
    alt=""
  />
  <img
    class="icon unit__image unit__image--28"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    alt=""
  />
  <img
    class="icon unit__image unit__image--29"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    alt=""
  />
  <img
    class="icon unit__image unit__image--30"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear-big.svg"
    alt=""
  />
  <img
    class="icon unit__image unit__image--31"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-footer.svg"
    alt=""
  />
</section>