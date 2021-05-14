<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <!-- header部分 -->
  <header class="header">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="">
      </a>
    </div>
    <nav class="header__nav pc">
      <ul class="header__nav-list flex__item">
        <li class="header__nav-item">
          <a href="<?php echo get_category_link(7); ?>">HTML</a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo get_category_link(8); ?>">CSS</a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo get_category_link(9); ?>">JavaScript</a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo get_category_link(10); ?>">PHP</a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo get_category_link(11); ?>">MySQL</a>
        </li>
      </ul>
    </nav>
  </header>