<?php if($page->feature_link()->isNotEmpty()): ?>

<div class="index-feature-block flex flex-center relative">
  <a href="<?= $page->feature_link() ?>">
    <?php if ($page->feature_type() != 'image') : ?>
      <div class="index-feature-text marquee">
        <div class="marquee-inner">
          <span><?= $page->feature_text() ?></span>
        </div>
      </div>
    <?php else : ?>
      <div class="absolute feature-image-caption">
        <?= $page->feature_text() ?>
      </div>
      <img src="<?= $page->image()->crop(800, 1000)->url() ?>" alt="">
    <?php endif ?>
  </a>
</div>

<?php endif ?>