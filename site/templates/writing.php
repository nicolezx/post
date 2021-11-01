<?php snippet('header') ?>

<main class="writing-main">

	<?php snippet('index-feature') ?>

	<div class="page-title flex flex-center">
		<p>Writing Index</p>
	</div>

	<div class="grid writing-index grid-index">
		<?php foreach ($page->children() as $article) : ?>
			<div>
				<a href="<?= $article->url() ?>">
					<div class="grid-index-thumb relative block" style="background-color: <?= $article->colour() ?>;">
						<div class="flex-center flex thumb-title-wrap">
							<h3 class="thumb-title serif-medium center">
								<?php if ($article->title_condensed()->isNotEmpty()) : ?>
									<?= $article->title_condensed()->upper() ?>
								<?php endif ?>
								<?php if ($article->title_condensed()->isEmpty()) : ?>
									<?= $article->title()->upper() ?>
								<?php endif ?>
							</h3>
						</div>

						<div class="writing-thumb-image index-thumb-image absolute">
							<img src="<?= $article->image()->crop(800, 1000)->url() ?>" alt="">
						</div>
					</div>
				</a>
				<p><?= $article->author() ?></p>

			</div>

		<?php endforeach ?>
	</div>

</main>

<?php snippet('footer') ?>