<?php snippet('header') ?>

<article>
	<div class="article-header flex full-height" style="background-color: <?= $page->colour() ?>;">
		<div class="article-header-text flex-center">
			<div class="article-title">
				<h1 style=""><?= $page->title()->upper() ?></h1>
			</div>
			<p class="article-author" style=""><?= $page->author() ?></p>
		</div>

		<?php if ($page->feature()->isNotEmpty()) : ?>
			<div class="article-header-featuredimage">
				<img src="http://localhost:8080/media/pages/writing/7-nicholas-godin/94efcc8728-1635418269/NICOLAS-GODIN-C-2019-CAMILLE-VIVIER-3844-35a.jpeg" alt="Article featured image">
			</div>
		<?php endif ?>


	</div>

	<div class="article-body page-body padding">
		<div class="article-intro serif-medium">
			<?= $page->intro()->kt() ?>
		</div>
		<?php foreach ($page->layout()->toLayouts() as $layout): ?>
			<section class="grid" id="<?= $layout->id() ?>">
				<?php foreach ($layout->columns() as $column): ?>
					<div class="column" style="--span:<?= $column->span() ?>">
						<div class="blocks">
							<?= $column->blocks() ?>
							<!-- <?php foreach ($column->blocks() as $block): ?>
								<div class="block block-type-<?= $block->type() ?> <?= $block->text_type() ?>">
									<?= $block ?>
								</div>
							<?php endforeach ?> -->
						</div>
					</div>
				<?php endforeach ?>
			</section>
		<?php endforeach ?>

		<div class="article-footer">
			<?= $page->author_bio()->kt() ?>
			<?php if ($page->published()->isNotEmpty()) : ?>
				<p>This article was first posted on <?= $page->published()->toDate('d.m.Y') ?></p>
			<?php endif ?>
		</div>
	</div>
</article>

<?php snippet('text-page-footer') ?>
<?php snippet('footer') ?>