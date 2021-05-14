<!-- headerの読み込み -->
<?php get_header(); ?>

<!-- main部分 -->
<main>
  <!-- ファーストビュー -->
  <div class="firstview">
    <h1 class="firstview__title">Commit to the growth<br>for everyone</h1>
  </div>
  <!-- 記事一覧 -->
  <div class="container">
    <p class="newpost__sub-title">New Post</p>
    <h2 class="newpost__title">新着記事</h2>
    <div class="flex__item">
      <div class="article-wrap">
        <div class="flex__item">

          <?php
          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
          );

          $the_query = new WP_Query($args);

          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>

              <a href="<?php the_permalink(); ?>" class="article__card">
                <div class="article__card-eyecatch">

                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="" class="attachment-post-thumbnail">
                  <?php endif; ?>
                </div>

                <?php if (!is_category() && has_category()) : ?>
                  <span class="article__card-cat">
                    <?php $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                  </span>
                <?php endif; ?>

                <div class="article__card-content">
                  <h3 class="article__card-content-title">
                    <?php echo get_the_title(); ?>
                  </h3>
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
          <?php wp_reset_postdata(); ?>
        </div>
      </div>

      <!-- sidebarの読み込み -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<!-- footerの読み込み -->
<?php get_footer(); ?>