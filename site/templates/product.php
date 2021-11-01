<?php snippet('header') ?>

<main>
	<div class="product-header flex full-height">
		<div class="product-images swiper">
			<div class="swiper-wrapper">
				<?php foreach ($page->images() as $image) : ?>
					<div class="swiper-slide flex-center">
						<img src="<?= $image->url() ?>" alt="">
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="product-header-details flex">
			<div class="flex sans-large" style="flex-direction: column; justify-content: center">
				<?= $page->title() ?><br>
				$<?= $page->price() ?>
			</div>
			<div class="flex" style="flex-direction: column; justify-content: flex-end;">
				<button class="snipcart-add-item" data-item-id="<?= $page->title()->toString() ?>" data-item-price="<?= $page->price() ?>" data-item-url="<?= $page->url() ?>" data-item-image="<?= $page->image()->nth(1)->resize(null, 1000)->url() ?>" data-item-name="<?= $page->title() ?>">
					Add to cart
				</button>
			</div>
		</div>
	</div>

	<div class="product-body page-body">
		<div class="product-body-details grid">
			<div>
				<?= $page->product_details_a()->kt() ?>
			</div>
			<div>
				<?= $page->product_details_b()->kt() ?>
				<?= $page->shipping_details()->kt() ?>
			</div>
		</div>
		<div class="product-body-description serif-medium">
			<?= $page->description_long()->kt() ?>
		</div>
	</div>

</main>


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



<?php snippet('text-page-footer') ?>
<?php snippet('footer') ?>