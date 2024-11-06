<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/main.css') ?>
    <title>Steentje</title>
</head>

<body>
    <?= snippet('nav'); ?>
    <div class="container">


        <div class="content">
            <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">
            <div class="content__container">
                <div class="steentjeNav">
                    <div class="steentjeNav__algemeen">
                        <button class="steentjeNav__button agendaButton">Agenda</button>
                        <p class="pages agendaPage"><?= $page->agendaPage() ?></p>
                        <button class="steentjeNav__button onsGeriefButton">Ons Gerief</button>
                        <p class="pages onsGeriefPage"><?= $page->onsGeriefPage() ?></p>
                    </div>

                    <div class="steentjeNav__takken">
                        <button class="steentjeNav__button paloebiesButton">Paloebies</button>
                        <p class="pages paloebiesPage"><?= $page->paloebiesPage() ?></p>
                        <button class="steentjeNav__button wolvenButton">Wolven</button>
                        <p class="pages wolvenPage"><?= $page->wolvenPage() ?></p>
                        <button class="steentjeNav__button poemaButton">Poema's</button>
                        <p class="pages poemaPage"><?= $page->poemasPage() ?></p>
                        <button class="steentjeNav__button jvpvButton">JVPV's</button>
                        <p class="pages jvpvPage"><?= $page->jvpvsPage() ?></p>
                        <button class="steentjeNav__button kevinButton">Kevins</button>
                        <p class="pages kevinPage"><?= $page->kevinsPage() ?></p>
                    </div>
                </div>
            </div>

            <div class="steentje">
                <iframe id="iframe" class="scribd_iframe_embed" title="Steentje " src="<?= $page->steentje()?>" tabindex="0" data-auto-height="true" data-aspect-ratio="0.7068965517241379" scrolling="no" width="100%" height="600" frameborder="0"></iframe>
            </div>
        </div>

        <?php
        snippet('footer');
        ?>
    </div>
    <?= js('assets/js/main.min.js') ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
