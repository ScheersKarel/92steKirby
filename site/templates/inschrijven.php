<?php snippet('head', ['title' => 'Inschrijven']); ?>

<div class="container">
  <?php snippet('nav'); ?>

  <div class="content">
    <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">

    <div class="content__container">
      <h1><?= $page->titleContent() ?></h1>
      <p>
        <?= $page->textContent() ?>
      </p>
      <iframe src="<?= $page->inschrijfLink() ?>" frameborder="0" allowfullscreen class="inschrijving"></iframe>
    </div>
  </div>

  <?php snippet('footer'); ?>

