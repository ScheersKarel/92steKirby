<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/main.css') ?>
    <title>Contact</title>
</head>

<body>

<div class="container">
    <?php snippet('nav'); ?>

    <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">
    <div class="contentInfo">
        <div class="contentInfo__text">
           

            <div class="content__container">
            
                <h1>Contact</h1>

                <?php foreach ($page->contactCard()->toStructure() as $item) : ?>

                    <div class="contactCard">
                        <h2 class="contactCard__title"><?= $item->cardTitle() ?></h2>
                        <p class="contactCard__text">
                        <?= $item->cardtext() ?>
                        </p>
                        <a href="mailto:<?= $item->cardMail() ?>" class="contactCard__link"><?= $item->cardMail() ?></a>
                    </div>
                <?php endforeach ?>

                <div class="contactCard">
                    <h2 class="contactCard__title">Takken</h2>
                    <a href="mailto:paloebies@92ste.be" class="contactCard__link">paloebies@92ste.be</a><br>
                    <a href="mailto:wolven@92ste.be" class="contactCard__link">wolven@92ste.be</a><br>
                    <a href="mailto:poemas@92ste.be" class="contactCard__link">poemas@92ste.be</a><br>
                    <a href="mailto:jvpv@92ste.be" class="contactCard__link">jvpv@92ste.be</a><br>
                    <a href="mailto:kevins@92ste.be" class="contactCard__link">kevins@92ste.be</a><br>
                    <a href="mailto:jins@92ste.be" class="contactCard__link">jins@92ste.be</a><br>
                </div>

                <div class="contactCard">
                    <h2 class="contactCard__title">Adres</h2>
                    <p class="contactCard__text">Scouts 92ste</p>
                    <p class="contactCard__text">predikherenhoevestraat 85,</p>
                    <p>2840 Reet</p>

                </div>

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
