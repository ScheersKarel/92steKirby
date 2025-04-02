<?php snippet('head', ['title' => 'Kippenfestijn']); ?>

<div class="container">
  <?php snippet('nav'); ?>
  <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">
  <div class="contentInfo">
    <div class="contentInfo__text">

      <div class="content__container">
        <h1>Kippenfestijn</h1>

        <?php foreach ($page->infoCard()->toStructure() as $item) : ?>
          <div class="infoCard">
            <h2 class="infotCard__title"><?= $item->cardTitle() ?></h2>
            <p class="infoCard__text">
              <?= $item->cardtext() ?>
            </p>
          </div>
        <?php endforeach ?>
      </div>
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScw6qJR4zBWAe2Z57ky2uckB7QJXwCcwbHhGdV_jxltKIvcWw/viewform?embedded=true" width="100%" height="3455" frameborder="0" marginheight="0" marginwidth="0">Laden…</iframe>

    </div>
    <img src="<?= $page->bgImg()->toFile()->url() ?>" alt="" class="contentInfo__img">
  </div>

  <?php snippet('footer'); ?>
