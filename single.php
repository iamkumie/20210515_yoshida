<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>

  <!-- main部分 -->
  <main>
    <div class="single__container">
      <div class="article__header">
        <?php if (has_category()) : ?>
          <span class="single__cat">
            <a href=""><?php echo get_the_category_list(' '); ?></a>
          </span>
        <?php endif; ?>

        <h1><?php the_title(); ?></h1>
        <ul class="flex__item tag__ul">
          <li class="single__tag"><?php echo get_the_date('Y-m-d'); ?></li>
        </ul>
      </div>
      <div class="article__eyecatch">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="">
        <?php endif; ?>
      </div>

      <div class="article__content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endif; ?>
  </main>

  <!-- footer部分 -->
  <footer class="footer">
    <p>Copyright &copy; 2021 coachtechサンプルテスト All Rights Reserved.</p>
  </footer>
  </body>

  </html>