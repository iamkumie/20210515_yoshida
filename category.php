<?php get_header(); ?>

<!-- main部分 -->
<main>
  <!-- ファーストビュー -->
  <div class="category__firstview">
    <h1 class="category__firstview__title"><?php single_cat_title(); ?></h1>
  </div>
  <!-- 記事一覧 -->
  <div class="container">
    <div class="flex__item">
      <div class="article-wrap">
        <div class="flex__item">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

              <a href="<?php the_permalink(); ?>" class="article__card">

                <div class="article__card-eyecatch">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="" class="attachment-post-thumbnail">
                  <?php endif; ?>
                </div>

                <div class="article__card-content">
                  <h3 class="article__card-content-title"><?php echo get_the_title(); ?></h3>
                  <ul class="article__card-content-list">
                    <li class="article__card-tag">
                      <?php echo get_the_date('Y-m-d'); ?>
                    </li>
                  </ul>
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>
        </div>
      </div>

      <!-- サイドバー -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<!-- footer部分 -->
<?php get_footer(); ?>