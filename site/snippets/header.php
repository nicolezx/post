<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if($page->isHomePage()): ?>
  <title><?= $site->title() ?></title>
  <?php else: ?>
  <title><?= $page->title() ?> | <?= $site->title() ?></title>
  <?php endif ?>
  <link rel="shortcut icon" type="image/png" href="assets/favicon-c.png"/>


  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- Snipcart -->
  <link rel="preconnect" href="https://app.snipcart.com" />
  <link rel="preconnect" href="https://cdn.snipcart.com" />
  <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.2.2/default/snipcart.css" />


  <!-- Site styles and scripts -->
  <?= css('assets/css/index.css') ?>
  <?= css('@auto') ?>
  <?= js('assets/js/site.js') ?>
</head>

<body>
  <header>
    <div class="header-inner flex">
      <div class="logo">
        <a href="<?= $site->url() ?>">
          <?= $site->title() ?>
        </a>
      </div>

      <nav class="menu">
        <?php snippet('header-nav') ?>
      </nav>

      <div class="header-right">
        <div class="cart-button">
          <span class="snipcart-checkout">Cart (<span class="snipcart-items-count"></span>)</span>
        </div>
        <div class="menu-toggle">
          <a href="#">
            <?= $site->menu() ?>
          </a>
        </div>
      </div>
    </div>
  </header>

  <?php snippet('menu-overlay') ?>