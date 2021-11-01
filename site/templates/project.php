<?php snippet('header') ?>

<div class="project-gallery flex padding">
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php foreach($page->images() as $image): ?>
				<div class="swiper-slide flex-center">
					<img src="<?= $image->url() ?>" alt="">
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="project-title flex-center">
		<h1>
			<?= $page->title() ?>
		</h1>
	</div>
</div>

<div class="project-body page-body">
	<div class="project-text serif-medium">
		<?= $page->text()->kt() ?>
	</div>
	<div class="project-info">

	</div>
</div>


<!-- <article>
  <div class="article-header flex" style="background-color: <?= $page->colour() ?>;">
    <div class="article-header-text flex-center">
      <div class="article-title">
        <h1 style=""><?= $page->title() ?></h1>
      </div>
      <p class="article-author"style=""><?= $page->author() ?></p>
    </div>

    <?php if ($page->feature()->isNotEmpty()): ?>
    <div class="article-header-featuredimage">
      <img src="http://localhost:8080/media/pages/writing/7-nicholas-godin/94efcc8728-1635418269/NICOLAS-GODIN-C-2019-CAMILLE-VIVIER-3844-35a.jpeg" alt="Article featured image">
    </div>
    <?php endif ?>

  </div>

  <div class="article-body padding">
     <?= $page->article()->$blocks ?>
     <?php if ($page->published()->isNotEmpty()): ?>
     <p>This article was first posted on <?= $page->published() ?></p>
     <?php endif ?>
  </div>
</article> -->

<script>
	const swiper = new Swiper('.swiper', {
  // Optional parameters
  // direction: 'vertical',
  loop: true,
	grabCursor: true,

  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination',
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>


<?php snippet('footer') ?>