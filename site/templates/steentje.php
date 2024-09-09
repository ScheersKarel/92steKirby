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
                <iframe id="iframe" class="scribd_iframe_embed" title="2de-steentje " src="https://www.scribd.com/embeds/688332614/content?start_page=1&view_mode=scroll&access_key=key-hdZumJ8D6Xjkvw8aMHMr" tabindex="0" data-auto-height="true" data-aspect-ratio="0.7068965517241379" scrolling="no" width="100%" height="600" frameborder="0"></iframe>
                <p style="   margin: 12px auto 6px auto;   font-family: Helvetica,Arial,Sans-serif;   font-style: normal;   font-variant: normal;   font-weight: normal;   font-size: 14px;   line-height: normal;   font-size-adjust: none;   font-stretch: normal;   -x-system-font: none;   display: block;"><a title="View 2de-steentje  on Scribd" href="https://www.scribd.com/document/688332614/2de-steentje#from_embed" style="text-decoration: underline;">2de-steentje </a> by <a title="View scouts92ste's profile on Scribd" href="https://www.scribd.com/user/147864658/scouts92ste#from_embed" style="text-decoration: underline;">scouts92ste</a></p>
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
