<!-- デザインベースベース名：MenSyoku -->
<section id="section09_01" class="section09 comSec">
  <div class="section09__wrap mw">
    <h2 class="section09__wrap__ttl comSec__ttl">section09<span class="section09__wrap__ttl__span comSec__ttl__span">セクション09</span></h2>

    <?php
    $args = [
      "post_type" => "section09",
      "posts_per_page" => 3,
      "paged" => $paged,
    ];
    $the_query = new WP_query($args);
    if ($the_query->have_posts()) :
    ?>
      <!-- ページ仕様 -->
      <ul class="section09__wrap__list">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
        ?>
          <li class="section09__wrap__list__item">
            <a class="section09__wrap__list__item__link" href="<?php the_permalink(); ?>">
              <div class="section09__wrap__list__item__link__wrap">
                <div class="section09__wrap__list__item__link__date "><span class="mainColor"><?php the_time("Y.m.d"); ?></span></div>

                <h3 class="section09__wrap__list__item__link__ttl"><?php the_title(); ?></h3>
              </div>

              <div class="section09__wrap__list__item__link__text"><?php the_content(); ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <!-- モーダル仕様・カード -->
      <!-- <ul class="section09__wrap__list">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
        ?>
          <li class="section09__wrap__list__item">
            <div class="section09__wrap__list__item__link comModal__link section09__wrap__list__item__detail--<?php the_ID(); ?>">
              <div class="section09__wrap__list__item__link__wrap">

                <div class="section09__wrap__list__item__link__date "><span class="mainColor"><?php the_time("Y.m.d"); ?></span></div>

                <h3 class="section09__wrap__list__item__link__ttl"><?php the_title(); ?></h3>

              </div>

              <div class="section09__wrap__list__item__link__text"><?php the_content(); ?></div>
            </div>
          </li>
        <?php endwhile; ?>
      </ul> -->

      <!-- モーダル仕様・モーダル -->
      <!-- <ul class="section09__wrap__modalList">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
        ?>
          <li class="section09__wrap__modalList__item">
            <div class="section09__wrap__list__item__detail comModal__link__detail section09__wrap__list__item__detail--<?php the_ID(); ?> comSec none">
              <h2 class="section09__wrap__list__item__detail__ttl"><?php the_title(); ?></h2>

              <div class="section09__wrap__list__item__detail__date "><span class="mainColor"><?php the_time("Y.m.d"); ?></span></div>

              <div class="section09__wrap__list__item__detail__text"><?php the_content(); ?></div>

              <div class="section09__wrap__list__item__detail__more">
                <div class="section09__wrap__list__item__detail__more__link comMore__link mainColor">一覧へ戻る</div>
              </div>
            </div>

            <div class="section09__wrap__list__item__detail__filter none"></div>
          </li>
        <?php endwhile; ?>
      </ul> -->

      <?php if ($the_query->found_posts > 3) : ?>
        <div class="section09__wrap__more">
          <a href="<?php echo home_url('/section09/'); ?>" class="section09__wrap__more__link comMore__link mainColor">セクション09をもっと見る</a>
        </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p class="not__text">現在セクション09は投稿されていません。</p>
    <?php endif; ?>
  </div>
</section>