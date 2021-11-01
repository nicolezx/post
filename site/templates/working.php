<?php snippet('header') ?>

<main class="working-main">

	<?php snippet('index-feature') ?>

	<div class="page-title flex flex-center">
		<p>Working Index</p>
	</div>

	<div class="working-index">
		<div class="working-index-row-wrapper">
			<div class="working-index-grid working-index-grid-header grid">
				<div class="working-index-1">Title</div>
				<div class="working-index-2">Year</div>
				<div class="working-index-3">Type</div>
			</div>
		</div>
		<?php foreach ($page->children() as $project) : ?>
			<div class="working-index-row-wrapper">
				<a href="<?= $project->url() ?>">
					<div class="working-index-grid grid">
						<div class="working-index-1"><?= $project->title() ?></div>
						<div class="working-index-2"><?= $project->year() ?></div>
						<div class="working-index-3"><?= $project->type() ?></div>
					</div>
				</a>
			</div>
		<?php endforeach ?>
	</div>

</main>

<?php snippet('footer') ?>