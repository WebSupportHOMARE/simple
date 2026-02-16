<!-- デザインベースベース名：Nurture -->
<?php get_template_part('/parts/breadcrumb'); ?>

<section id="section09_01" class="section09__archive comSec">
  <div class="section09__wrap__archive section09__wrap__archive--block comSec">
    <h2 class="section09__wrap__ttl comSec__ttl">
      <span class="section09__wrap__ttl__span--top comSec__ttl__span--top">セクション09</span>
      <span class="section09__wrap__ttl__span comSec__ttl__span">section09</span>
    </h2>

    <?php
    // query_posts を使ってメインクエリを書き換え↓
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    query_posts(array(
      'post_type' => 'section09',
      'posts_per_page' => 15,
      'paged' => $paged,
    ));

    if (have_posts()) :
    ?>
      <!-- ページ仕様 -->
      <ul class="section09__wrap__archive__list mw">
        <?php while (have_posts()) : the_post(); ?>
          <li class="section09__wrap__archive__list__item">
            <a class="section09__wrap__archive__list__item__link" href="<?php the_permalink(); ?>">
              <h3 class="section09__wrap__archive__list__item__link__ttl"><?php the_title(); ?></h3>

              <div class="section09__wrap__archive__list__item__link__date"><?php the_time("Y.m.d"); ?></div>

              <div class="section09__wrap__archive__list__item__link__text"><?php the_content(); ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php wp_reset_postdata(); ?>

      <?php get_template_part('/parts/pagination'); ?>

    <?php else : ?>
      <p class="not__text">現在セクション09の投稿はございません。</p>
    <?php endif; ?>
  </div>
</section>