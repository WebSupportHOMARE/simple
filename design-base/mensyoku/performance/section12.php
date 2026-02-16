<!-- デザインベースベース名：MenSyoku -->
<section id="section12_01" class="section12 comSec">
    <div class="section12__wrap mw">
        <h2 class="section12__wrap__ttl comSec__ttl">section12<span
                class="section12__wrap__ttl__span comSec__ttl__span">セクション12</span></h2>

        <?php
    $args = [
      "post_type" => "section12",
      "posts_per_page" => 12,
      "paged" => $paged,
    ];
    $the_query = new WP_query($args);
    if ($the_query->have_posts()) :
    ?>
        <!-- ページ仕様 -->
        <!-- <ul class="section12__wrap__list flex">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
        ?>
          <li class="section12__wrap__list__item">
            <a class="section12__wrap__list__item__link" href="<?php the_permalink(); ?>">
              <div class="section12__wrap__list__item__link__imgBox">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="section12__wrap__list__item__link__imgBox__img img3-2" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                  <img class="section12__wrap__list__item__link__imgBox__img img3-2" src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png" alt="アイキャッチ画像なし">
                <?php endif; ?>
              </div>

              <h3 class="section12__wrap__list__item__link__ttl"><?php the_title(); ?></h3>
            </a>
          </li>

          <?php endwhile; ?>
        </ul> -->

        <!-- モーダル仕様 -->
        <ul class="section12__wrap__list flex">
            <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
        ?>
            <li class="section12__wrap__list__item aLink">
                <div
                    class="section12__wrap__list__item__link comModal__link section12__wrap__list__item__link--<?php the_ID(); ?>">
                    <div class="section12__wrap__list__item__link__imgBox">
                        <?php if (has_post_thumbnail()) : ?>
                        <img class="section12__wrap__list__item__link__imgBox__img img3-2"
                            src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                        <img class="section12__wrap__list__item__link__imgBox__img img3-2"
                            src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                            alt="アイキャッチ画像なし">
                        <?php endif; ?>
                    </div>

                    <h3 class="section12__wrap__list__item__link__ttl"><?php the_title(); ?></h3>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>

        <ul class="section12__wrap__modalList">
            <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
        ?>
            <li class="section12__wrap__modalList__item">
                <div
                    class="section12__wrap__list__item__detail comModal__link__detail section12__wrap__list__item__detail--<?php the_ID(); ?> comSec none">
                    <div class="section12__wrap__list__item__detail__imgBox">
                        <?php if (has_post_thumbnail()) : ?>
                        <img class="section12__wrap__list__item__detail__imgBox__img"
                            src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                        <img class="section12__wrap__list__item__detail__imgBox__img"
                            src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                            alt="アイキャッチ画像なし">
                        <?php endif; ?>
                    </div>

                    <h3 class="section12__wrap__list__item__detail__ttl"><?php the_title(); ?></h3>

                    <div class="section12__wrap__list__item__detail__text"><?php the_content(); ?></div>

                    <div class="section12__wrap__list__item__detail__more">
                        <div class="section12__wrap__list__item__detail__more__link comMore__link mainColor">一覧へ戻る</div>
                    </div>
                </div>

                <div class="section12__wrap__list__item__detail__filter none"></div>
            </li>
            <?php endwhile; ?>
        </ul>

        <?php if ($the_query->found_posts > 12) : ?>
        <div class="section12__wrap__more">
            <a href="<?php echo home_url('/section12/'); ?>"
                class="section12__wrap__more__link comMore__link mainColor">セクション12をもっと見る</a>
        </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p class="not__text">現在セクション12は投稿されていません。</p>
        <?php endif; ?>
    </div>
</section>