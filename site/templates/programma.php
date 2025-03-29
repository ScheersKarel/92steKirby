<?php snippet('head', ['title' => 'Programma']); ?>

<div class="container">
  <?php snippet('nav'); ?>
  <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">
  <div class="contentInfo">
    <div class="contentInfo__text">

      <div class="content__container">
        <h1>Programma</h1>

        <?php foreach ($page->infoCard()->toStructure() as $item) : ?>
          <div class="infoCard">
            <h2 class="infotCard__title"><?= $item->cardTitle() ?></h2>
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

