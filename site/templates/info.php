<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/main.css') ?>
    <title>Info</title>
</head>

<body>
    <div class="container">
        <?php snippet('nav'); ?>

    <div class="content">
        <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">

        <div class="content__container" style="background-image: url('<?= $page->bgImg()->toFile()->url() ?>'); background-size: 80%; background-position: calc(100% + 350px) center; background-repeat: no-repeat;">
            <h1>Info</h1>

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


    <?php snippet('footer'); ?>
        </div>
<?= js('assets/js/main.min.js') ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
