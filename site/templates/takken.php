<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/main.css') ?>
    <title>Takken</title>
</head>

<body>

<div class="container">
    <?php snippet('nav'); ?>

    <div class="takkenContent">
        <a href="./paloebies">
            <div class="takkenContent__card">
                <img class="takkenContent__card__img" src="<?= $page->paloebieImg()->toFile()->url() ?>" alt="">
                <h2>Paloebies</h2>
            </div>
        </a>

        <a href="./wolven">
            <div class="takkenContent__card">
                <img class="takkenContent__card__img" src="<?= $page->wolvenImg()->toFile()->url() ?>" alt="">
                <h2>wolven</h2>
            </div>
        </a>

        <a href="./poemas">
            <div class="takkenContent__card">
                <img class="takkenContent__card__img" src="<?= $page->poemaImg()->toFile()->url() ?>" alt="">
                <h2>Poema's</h2>
            </div>
        </a>

        <a href="./jvpvs">
            <div class="takkenContent__card">
                <img class="takkenContent__card__img" src="<?= $page->jvpvImg()->toFile()->url() ?>" alt="">
                <h2>JVPV's</h2>
            </div>
        </a>

        <a href="./kevins">
            <div class="takkenContent__card">
                <img class="takkenContent__card__img" src="<?= $page->kevinImg()->toFile()->url() ?>" alt="">
                <h2>Kevins</h2>
            </div>
        </a>

        <a href="./jins">
            <div class="takkenContent__card">
                <img class="takkenContent__card__img" src="<?= $page->jinImg()->toFile()->url() ?>" alt="">
                <h2>Jins</h2>
            </div>
        </a>
    </div>

    <?php snippet('footer'); ?>
</div>
<?= js('assets/js/main.min.js') ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
