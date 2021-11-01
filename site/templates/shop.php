<?php snippet('header') ?>

<main class="shop-main">

	<?php snippet('index-feature') ?>
	
	<div class="page-title flex flex-center">
		<?= $page->shop_title()->kt() ?>
	</div>

	<div class="grid grid-index shop-index">
		<?php foreach ($page->children() as $product) : ?>
			<div>
				<a href="<?= $product->url() ?>">
					<div class="grid-index-thumb">
						<div class="index-thumb-image">
							<img src="<?= $product->image()->crop(800, 1000)->url() ?>" alt="">
						</div>
					</div>
					<p>
						<?= $product->title() ?>
					</p>
					<p>
						$<?= $product->price() ?>
					</p>
				</a>

			</div>

		<?php endforeach ?>
	</div>

</main>

<?php snippet('footer') ?>