<div class="grid" style="
	grid-template-columns: repeat(2, 1fr);
	grid-column-gap: var(--padding-2x);
">
	<div style="text-align: right;">
		<a href="<?= $site->children()->listed()->nth(0)->url() ?>">
			<?= $site->children()->listed()->nth(0)->title() ?>
		</a>
	</div>
	<div>
		<a href="<?= $site->children()->listed()->nth(1)->url() ?>">
			<?= $site->children()->listed()->nth(1)->title() ?>
		</a>
	</div>
</div>