<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/main.css') ?>
    <title>Inschrijven</title>
</head>

<body>

<div class="container">
    <?php snippet('nav'); ?>


    <div class="content">
        <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">


        <div class="content__container">

            <h1><?= $page->titleContent() ?></h1>
            <p>
            <?= $page->textContent() ?>
            </p>

            <iframe width="950" height="1200" src="<?= $page->inschrijfLink() ?>" frameborder="0" allowfullscreen></iframe>

        </div>

    </div>



    <?php snippet('footer'); ?>
</div>
<?= js('assets/js/main.min.js') ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
