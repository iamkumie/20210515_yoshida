<!-- サイドバー -->
<aside class="sidebar">
  <div class="banner">
    <a href="https://coachtech.site">
      <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="">
    </a>
  </div>
  <div class="contributor">
    <div class="contributor__icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="">
    </div>
    <h2 class="contributor__name">エストラ編集部</h2>
    <p class="contributor__profile">プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。</p>
  </div>

  <div class="category">
    <h2 class="category__title">Category</h2>
    <ul>
      <li class="category__list">
        <a href="<?php echo get_category_link(7); ?>" class="category__link">HTML</a>
      </li>
      <li class="category__list">
        <a href="<?php echo get_category_link(8); ?>" class="category__link">CSS</a>
      </li>
      <li class="category__list">
        <a href="<?php echo get_category_link(9); ?>" class="category__link">JavaScript</a>
      </li>
      <li class="category__list">
        <a href="<?php echo get_category_link(10); ?>" class="category__link">PHP</a>
      </li>
      <li class="category__list">
        <a href="<?php echo get_category_link(11); ?>" class="category__link">MySQL</a>
      </li>
    </ul>
  </div>
</aside>