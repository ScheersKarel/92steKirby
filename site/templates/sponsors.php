<?php snippet('head', ['title' => 'Sponsors']); ?>

<div class="container">
    <?php snippet('nav'); ?>
    <img src="<?= $page->heroImg()->toFile()->url() ?>" alt="" class="content__img">
    <div class="contentInfo">
        <div class="contentInfo__text">
          <div class="content__container">
            <div class="sponsors-grid">
              <?php foreach ($page->files()->filterBy('type', 'image') as $image): ?>
                <?php
                // Get the custom URL from the metadata, fallback to the image URL if not set
                $link = $image->content()->get('URL')->isNotEmpty() ? $image->content()->get('URL') : $image->url();      ?>
                <a href="<?= $link ?>" target="_blank" class="sponsor-item">
                  <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" class="sponsor-image">
                </a>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
    </div>
    <?php snippet('footer'); ?>
</div>

<style>
/* Add this CSS to style the grid */
.sponsors-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 40px;
    margin-top: 20px;
}

.sponsor-item {
    display: block;
    text-align: center;
    opacity: 0.7;
    transition: opacity 0.3s ease-in-out;
}

.sponsor-item:hover {
    opacity: 1;
}

.sponsor-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.sponsor-image:hover {
    transform: scale(1.05);
}
</style>