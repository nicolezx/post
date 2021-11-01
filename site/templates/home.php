<?php snippet('header') ?>

<div class="home-splash flex absolute" style="background-color: <?= $site->splash_colour() ?>;">
	<div>
		<p><?= $site->splash_text_a() ?></p>
	</div>
	<div>
		<p><?= $site->splash_text_b() ?></p>
	</div>
</div>

<div class="home-main full-height">

	<div class="home-featured flex">
		<a href="<?= $site->feature_a_url()->url() ?>">
			<div style="background-color: <?= $site->colour_a() ?>" class="flex-center">
				<?php if ($site->feature_a_cta()->isNotEmpty()): ?>
					<p><?= $site->feature_a_cta()->upper() ?>:</p>
				<?php endif ?>
				<p><?= $site->feature_a_text() ?></p>
			</div>
		</a>
		<?php if ($site->feature_b_text()->isNotEmpty()): ?>
		<a href="<?= $site->feature_b_url()->url() ?>">
			<div style="background-color: <?= $site->colour_b() ?>" class="flex-center">
				<?php if ($site->feature_b_cta()->isNotEmpty()): ?>
					<p><?= $site->feature_b_cta()->upper() ?>:</p>
				<?php endif ?>
				<p><?= $site->feature_b_text() ?></p>
			</div>
		</a>
		<?php endif ?>
	</div>

	<div class="home-categories flex">
		<div class="flex-center relative">
			<a href="<?= $site->children()->listed()->nth(0)->url() ?>">
				<div class="absolute home-category-hover flex-center">
					<img src="<?= $site->children()->listed()->nth(0)->image()->crop(800, 1000)->url() ?>" alt="">
				</div>
				<?= $site->children()->listed()->nth(0)->title() ?>
			</a>
		</div>
		<div class="flex-center relative">
			<a href="<?= $site->children()->listed()->nth(1)->url() ?>">
				<div class="absolute home-category-hover flex-center">
					<img src="<?= $site->children()->listed()->nth(1)->image()->crop(800, 1000)->url() ?>" alt="">
				</div>
				<?= $site->children()->listed()->nth(1)->title() ?>
			</a>
		</div>
	</div>
</div>

</body>

</html>
<!-- <?php snippet('footer') ?> -->