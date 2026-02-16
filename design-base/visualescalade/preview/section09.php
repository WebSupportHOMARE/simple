<!-- デザインベースベース名：VisualeScalade -->
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
      <ul class="section09__wrap__list">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
        ?>
          <li class="section09__wrap__list__item">
            <div class="section09__wrap__list__item__link comModal__link section09__wrap__list__item__detail--<?php the_ID(); ?>">

              <div class="section09__wrap__list__item__link__date subColor2"><?php the_time("Y.m.d"); ?></div>


              <h3 class="section09__wrap__list__item__link__ttl"><?php the_title(); ?></h3>


              <div class="section09__wrap__list__item__link__text"><?php the_content(); ?></div>
            </div>
          </li>
        <?php endwhile; ?>
      </ul>

      <ul class="section09__wrap__modalList">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
        ?>
          <li class="section09__wrap__modalList__item">
            <div class="section09__wrap__list__item__detail comModal__link__detail section09__wrap__list__item__detail--<?php the_ID(); ?> comSec none">

              <div class="section09__wrap__list__item__detail__date subColor2"><?php the_time("Y.m.d"); ?></div>


              <h2 class="section09__wrap__list__item__detail__ttl"><?php the_title(); ?></h2>

              <div class="section09__wrap__list__item__detail__text"><?php the_content(); ?></div>

              <div class="section09__wrap__list__item__detail__more">
                <div class="section09__wrap__list__item__detail__more__link comMore__link mainColor">
                  <span class="section09__wrap__more__link__btn">
                    一覧へ戻る
                  </span>
                </div>
              </div>
            </div>

            <div class="section09__wrap__list__item__detail__filter none"></div>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php if ($the_query->found_posts > 3) : ?>
        <div class="section09__wrap__more section09__wrap__more--modal">
          <div class="section09__wrap__more__link comMore__link mainColor">
            <span class="section09__wrap__more__link__btn">
              セクション09をもっと見る
            </span>
          </div>
        </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p class="not__text">現在セクション09は投稿されていません。</p>
    <?php endif; ?>

    <div class="section09__wrap__archive none comModal__archive">
      <h2 class="section09__wrap__archive__ttl comSec__ttl mw">section09<span class="section09__wrap__archive__ttl__span comSec__ttl__span">セクション09</span></h2>

      <ul class="section09__wrap__archive__breadcrumb breadcrumb mw flex">
        <li class="section09__wrap__archive__breadcrumb__item breadcrumb__item">TOP</li>

        <li class="section09__wrap__archive__breadcrumb__item breadcrumb__item">section09 セクション09</li>
      </ul>

      <?php
      $args = [
        "post_type" => "section09",
        "posts_per_page" => -1,
        "paged" => $paged,
      ];
      $the_query = new WP_query($args);
      if ($the_query->have_posts()) :
      ?>
        <ul class="section09__wrap__archive__list mw">
          <?php
          while ($the_query->have_posts()) :
            $the_query->the_post();
          ?>
            <li class="section09__wrap__archive__list__item">
              <div class="section09__wrap__archive__list__item__link comModal__link section09__wrap__archive__list__item__link--<?php the_ID(); ?>">
                <div class="section09__wrap__archive__list__item__link__date subColor2"><?php the_time("Y.m.d"); ?></div>
                <h3 class="section09__wrap__archive__list__item__link__ttl"><?php the_title(); ?></h3>

                <div class="section09__wrap__archive__list__item__link__text"><?php the_content(); ?></div>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>

        <ul class="section09__wrap__archive__modalList">
          <?php
          while ($the_query->have_posts()) :
            $the_query->the_post();
          ?>
            <li class="section09__wrap__archive__modalList__item">
              <div class="section09__wrap__archive__list__item__detail comModal__link__detail section09__wrap__archive__list__item__detail--<?php the_ID(); ?> comSec none">

                <div class="section09__wrap__archive__list__item__detail__date subColor2"><?php the_time("Y.m.d"); ?></div>
                <h3 class="section09__wrap__archive__list__item__detail__ttl"><?php the_title(); ?></h3>

                <div class="section09__wrap__archive__list__item__detail__text"><?php the_content(); ?></div>


                <div class="section09__wrap__archive__list__item__detail__more">
                  <div class="section09__wrap__archive__list__item__detail__more__link comMore__link mainColor">
                    <span class="section09__wrap__more__link__btn">一覧へ戻る</span>
                  </div>
                </div>
              </div>

              <div class="section09__wrap__archive__list__item__detail__filter none"></div>
            </li>
          <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p class="not__text">現在セクション09は投稿されていません。</p>
      <?php endif; ?>
    </div>
  </div>
</section>