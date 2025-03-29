<?php snippet('head', ['title' => 'Wontolla']); ?>

<div class="container">
  <?php snippet('nav'); ?>
  <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">

  <div class="contentInfo">
    <div class="contentInfo__text">
      <div class="content__container">
        <h1>Wontolla</h1>

        <?php foreach ($page->wontollaCard()->toStructure() as $item) : ?>
          <div class="wontollaCard">
            <h2 class="infoCard__title"><?= $item->cardTitle() ?></h2>
            <p class="infoCard__text">
              <?= $item->cardtext() ?>
            </p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <img src="<?= $page->bgImg()->toFile()->url() ?>" alt="" class="contentInfo__img">
  </div>

  <?php snippet('footer'); ?>
