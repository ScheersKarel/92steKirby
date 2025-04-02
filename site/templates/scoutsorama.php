<?php snippet('head', ['title' => 'Scoutsorama' . $page->jaar()]); ?>

<div class="container">
  <?php snippet('nav'); ?>
  <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">
  <div class="contentInfo">

    <div class="contentInfo__text">

      <div class="content__container">
        <div>
          <a class="soNav__button" href="kippenfestijn">Kippenfestijn</a>
          <a class="soNav__button" href="helpendeHanden" >Helpende handen</a>
          <a class="soNav__button" href="sponsors">Sponsors</a>
          <a class="soNav__button" href="programma">Progamma</a>
        </div>
      </div>
      <h1>Scoutsorama <?= $page->jaar() ?> </h1>
      <?php foreach ($page->infoCard()->toStructure() as $item): ?>
        <div class="infoCard">
          <h2 class="infotCard__title"><?= $item->cardTitle() ?></h2>
          <p class="infoCard__text">
            <?= $item->cardtext() ?>
          </p>
        </div>
      <?php endforeach ?>
      <iframe src="https://drive.google.com/file/d/1yS63qWwdkhfl_TIcbNOyijZUQ4wNrpWX/preview" width="100%" height="900" allow="autoplay"></iframe>

    </div>
  </div>
  <img src="<?= $page->bgImg()->toFile()->url() ?>" alt="" class="contentInfo__img">
</div>

<?php snippet('footer'); ?>