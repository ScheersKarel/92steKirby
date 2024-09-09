<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/main.css') ?>
    <title>Home</title>
</head>

<body>
    <div class="container">
        <?php snippet('nav'); ?>



        <div class="content">
            <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">


            <div class="content__container">
                <div class="homeContainer">


                    <div class="newscards">
                        <h1 class="content__title"> Nieuwsberichten</h1>
                        <?php foreach ($site->newsCard()->toStructure() as $item) : ?>
                            <div class="newscards__card">
                                <div class="newscards__card__header">
                                    <h2 class="newscards__card__header__title"><?= $item->cardTitle() ?></h2>
                                    <div class="newscards__card__header__dateButton"><iconify-icon icon="lets-icons:date-today-light" style="color: #053f41;margin-right: 5px;" width="20" height="20"></iconify-icon><?= $item->cardDate() ?></div>
                                    <div class="newscards__card__header__takButtonDesc"><?= $item->cardTak() ?></div>
                                    <div class="newscards__card__header__evenementButtonDesc"><?= $item->cardEvenement() ?></div>
                                </div>
                                <p class="newscards__card__text"><?= $item->cardText() ?></p>

                                <button class="newscards__card__takButton"><?= $item->cardTak() ?></button>
                                <button class="newscards__card__evenementButton"><?= $item->cardEvenement() ?></button>

                            </div>
                        <?php endforeach ?>

                       

                    </div>

                    <div class="info">
                        <H2 class="info__title"><?= $page->contentTitle() ?></H2>
                        <p class="info__text">
                            <?= $page->contentText() ?>
                        </p>
                    </div>
                </div>


            </div>
            <?php snippet('footer'); ?>
        </div>
<?= js('assets/js/main.min.js') ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
