<div class="menu-wrapper flex-center">

	<span class="menu-logo absolute">Post-</span>

	<a href="#" class="menu-close absolute">
		<span>Close</span>
	</a>

  <ul>
	<?php foreach ($site->children()->listed() as $item): ?>
	<li>
	  <a href="<?= $item->url() ?>">
		<?= $item->title() ?>
	  </a>
	</li>
	<?php endforeach ?>
  </ul>

</div>

<style>
	.menu-wrapper {
		display: none;
		position: fixed;
		top: 0;
		left: 0;
		width: 100vw;
		height: 100vh;
		background-color: white;
		z-index: 3;
	}

	.menu-logo {
		top: 20px;
		left: 24px;
		pointer-events: none;
	}

	.menu-close {
		top: 20px;
		right: 24px;
	}

	.menu-wrapper ul * {
		font-size: var(--sans-medium);
		line-height: var(--sans-medium-line);
		list-style-type: none;
		text-align: center;
		padding-bottom: calc(var(--sans-medium-line) * 0.5);
	}

</style>