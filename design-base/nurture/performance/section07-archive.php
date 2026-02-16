<!-- デザインベースベース名：Nurture -->
<?php get_template_part('/parts/breadcrumb'); ?>

<section id="section07_01" class="section07__archive comSec">
  <div class="section07__wrap__archive section07__wrap__archive--block comSec">
    <h2 class="section07__wrap__ttl comSec__ttl">
      <span class="section07__wrap__ttl__span--top comSec__ttl__span--top">セクション07</span>
      <span class="section07__wrap__ttl__span comSec__ttl__span">section07</span>
    </h2>

    <?php
    // query_posts を使ってメインクエリを書き換え↓
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    query_posts(array(
      'post_type' => 'section07',
      'posts_per_page' => 9,
      'paged' => $paged,
    ));

    if (have_posts()) :
    ?>
      <!-- メインクエリを書き換え ここまで　↑-->
      <ul class="section07__wrap__archive__list flex mw">
        <?php while (have_posts()) : the_post(); ?>
          <li class="section07__wrap__archive__list__item aLink">
            <a class="section07__wrap__archive__list__item__link" href="<?php the_permalink(); ?>">
              <div class="section07__wrap__archive__list__item__link__imgBox">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="section07__wrap__archive__list__item__link__imgBox__img img3-2"
                    src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                  <img class="section07__wrap__archive__list__item__link__imgBox__img img3-2"
                    src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                    alt="アイキャッチ画像なし">
                <?php endif; ?>
              </div>

              <div class="section07__wrap__archive__list__item__link__date"><?php the_time("Y.m.d"); ?></div>

              <h3 class="section07__wrap__archive__list__item__link__ttl"><?php the_title(); ?></h3>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php wp_reset_postdata(); ?>

      <?php get_template_part('/parts/pagination'); ?>

    <?php else : ?>
      <p class="not__text">現在セクション07の投稿はございません。</p>
    <?php endif; ?>
  </div>
</section>