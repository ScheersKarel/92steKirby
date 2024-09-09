<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/main.css') ?>
    <title>Poemas</title>
</head>

<body>
<div class="container">
<?php snippet('nav'); ?>


    <div class="content">
        <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">
        <img src="./resources/images/imgTakken.png" alt="" class="content__img">

        <div class="content__container">
            <div class="tak">
                <div class="tak__takinfo">
                    <h1 class="tak__takinfo__title"><?= $page->takTitle() ?></h1>
                    <p class="tak__takinfo__text">
                    <?= $page->contentText() ?>
                        
                    </p>
                </div>

                <div class="tak__takData">
                    <h2 class="tak__takData__subtitle">Activiteiten</h2>
                    <?= $page->takActiviteiten() ?>

                    <h2 class="tak__takData__subtitle">Contact:</h2>
                    <p><a href="mailto:<?= $page->takMail() ?>"> <?= $page->takMail() ?></a></p>

                    <H2 class="tak__takData__subtitle">Noodnummer</H2>
                    <p><?= $page->noodcontact() ?>:<a href="tel: <?= $page->takTel() ?>"> <?= $page->takTel() ?> </a></p>
                </div>

            </div>


        </div>
    </div>

    <div class="leiding">
        <h2 class="leiding__title">Leiding</h2>
        <div class="leiding__container">
            <?php foreach ($page->takLeiding()->toStructure() as $item) : ?>
                <div class="leiding__card">
                    <img src="<?= $item->cardImg()->toFile()->url() ?>" alt="" class="leiding__card__img">
                    <h3 class="leiding__card__name"><?= $item->cardName() ?></h3>
                    <h4 class="leiding__card__totem"><?= $item->cardTotem() ?></h4>
                </div>
                
            <?php endforeach ?>


        </div>
    </div>
    <div class="takNieuws">
        <h2 class="takNieuws__title">Nieuwsberichten</h2>
        <div class="takNieuws__container">
        <?php 
            $counter = 0; // Teller voor de loop
            foreach ($site->newsCard()->toStructure() as $item) : 
                if ($counter == 2) break; // Stop de loop na het eerste item
                $counter++; // Verhoog de teller na elk item
            ?>
             <div class="takNieuws__card">
                <div class="newscards__card__header">
                    <h3 class="newscards__card__header__title"><?= $item->cardTitle() ?></h3>
                    <div class="newscards__card__header__dateButton"><iconify-icon icon="lets-icons:date-today-light" style="color: #053f41;margin-right: 5px;" width="20" height="20"></iconify-icon><?= $item->cardDate() ?></div>
                </div>
                <p class="newscards__card__text"><?= $item->cardText() ?></p>

            </div>
            <?php endforeach ?>
            
        </div>
    </div>


    
</div>
<?= js('assets/js/main.min.js') ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
