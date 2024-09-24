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
        <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">
    <div class="contentInfo">
        <div class="contentInfo__text">

            <div class="content__container" >
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
        <img src="<?= $page->bgImg()->toFile()->url() ?>" alt="" class="contentInfo__img">
    </div>


    <?php snippet('footer'); ?>
        </div>
<?= js('assets/js/main.min.js') ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
