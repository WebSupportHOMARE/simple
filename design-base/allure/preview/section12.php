<!-- デザインベースベース名:Allure プレビュー-->
<section id="section12_01" class="section12 comSec">
  <div class="section12__wrap mw">
    <h2 class="section12__inner__wrap__ttl comSec__ttl">
      <span class="section12__inner__wrap__ttl__span comSec__ttl__span">
        section12
      </span>
      セクション12

    </h2>

    <?php
    $current_page_id = get_the_ID();
    $args = [
      "post_type" => "section12",
      "posts_per_page" => 12,
      "paged" => $paged,
    ];
    $the_query = new WP_query($args);
    if ($the_query->have_posts()) :
    ?>
      <!-- top list -->
      <ul class="section12__wrap__list flex">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
          $template_name = get_field('designBaseName', $current_page_id);
        ?>
          <li class="section12__wrap__list__item aLink">
            <div
              class="section12__wrap__list__item__link comModal__link section12__wrap__list__item__link--<?php the_ID(); ?>">
              <div class="section12__wrap__list__item__link__imgBox">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="section12__wrap__list__item__link__imgBox__img img3-2"
                    src="<?php echo get_template_directory_uri(); ?>/preview/<?php echo $template_name; ?>/img/postTestImgⅰ.png"
                    alt="<?php the_title(); ?>">
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
      <!-- top modal -->
      <ul class="section12__wrap__modalList">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
          $template_name = get_field('designBaseName', $current_page_id);
        ?>
          <li class="section12__wrap__modalList__item">
            <div
              class="section12__wrap__list__item__detail comModal__link__detail section12__wrap__list__item__detail--<?php the_ID(); ?> comSec none">
              <div class="section12__wrap__list__item__detail__imgBox">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="section12__wrap__list__item__detail__imgBox__img"
                    src="<?php echo get_template_directory_uri(); ?>/preview/<?php echo $template_name; ?>/img/postTestImgⅰ.png"
                    alt="<?php the_title(); ?>">
                <?php else : ?>
                  <img class="section12__wrap__list__item__detail__imgBox__img"
                    src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                    alt="アイキャッチ画像なし">
                <?php endif; ?>
              </div>

              <h3 class="section12__wrap__list__item__detail__ttl"><?php the_title(); ?></h3>

              <div class="section12__wrap__list__item__detail__text"><?php the_content(); ?></div>

              <div class="section12__wrap__list__item__detail__more">
                <div class="section12__wrap__list__item__detail__more__link comMore__link">一覧へ戻る</div>
              </div>
            </div>

            <div class="section12__wrap__list__item__detail__filter mainColor none"></div>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php if ($the_query->found_posts > 12) : ?>
        <div class="section12__wrap__more section12__wrap__more--modal">
          <div class="section12__wrap__more__link comMore__link">セクション12をもっと見る</div>
        </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p class="not__text">現在セクション12は投稿されていません。</p>
    <?php endif; ?>

    <!-- archive list -->
    <div class="section12__wrap__archive none comModal__archive">
      <h2 class="section12__wrap__archive__ttl comSec__ttl subFont01 mw">
        <span class="section12__wrap__archive__ttl__span comSec__ttl__span subFont02">
          section12
        </span>

        セクション12
      </h2>

      <ul class="section12__wrap__archive__breadcrumb breadcrumb mw flex">
        <li class="section12__wrap__archive__breadcrumb__item breadcrumb__item">TOP</li>

        <li class="section12__wrap__archive__breadcrumb__item breadcrumb__item">section12 セクション12</li>
      </ul>

      <?php
      $current_page_id = get_the_ID();
      $args = [
        "post_type" => "section12",
        "posts_per_page" => -1,
        "paged" => $paged,
      ];
      $the_query = new WP_query($args);
      if ($the_query->have_posts()) :
      ?>
        <!-- archive modal -->
        <ul class="section12__wrap__archive__list flex mw">
          <?php
          while ($the_query->have_posts()) :
            $the_query->the_post();
            $template_name = get_field('designBaseName', $current_page_id);
          ?>
            <li class="section12__wrap__archive__list__item aLink">
              <div
                class="section12__wrap__archive__list__item__link comModal__link section12__wrap__archive__list__item__link--<?php the_ID(); ?>">
                <div class="section12__wrap__archive__list__item__link__imgBox">
                  <?php if (has_post_thumbnail()) : ?>
                    <img class="section12__wrap__archive__list__item__link__imgBox__img img3-2"
                      src="<?php echo get_template_directory_uri(); ?>/preview/<?php echo $template_name; ?>/img/postTestImgⅰ.png"
                      alt="<?php the_title(); ?>">
                  <?php else : ?>
                    <img class="section12__wrap__archive__list__item__link__imgBox__img img3-2"
                      src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                      alt="アイキャッチ画像なし">
                  <?php endif; ?>
                </div>

                <h2 class="section12__wrap__archive__list__item__link__ttl"><?php the_title(); ?></h2>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>

        <ul class="section12__wrap__archive__modalList">
          <?php
          while ($the_query->have_posts()) :
            $the_query->the_post();
            $template_name = get_field('designBaseName', $current_page_id);
          ?>
            <li class="section12__wrap__archive__modalList__item">
              <div
                class="section12__wrap__archive__list__item__detail comModal__link__detail section12__wrap__archive__list__item__detail--<?php the_ID(); ?> comSec none">
                <div class="section12__wrap__archive__list__item__detail__imgBox">
                  <?php if (has_post_thumbnail()) : ?>
                    <img class="section12__wrap__archive__list__item__detail__imgBox__img"
                      src="<?php echo get_template_directory_uri(); ?>/preview/<?php echo $template_name; ?>/img/postTestImgⅰ.png"
                      alt="<?php the_title(); ?>">
                  <?php else : ?>
                    <img class="section12__wrap__archive__list__item__detail__imgBox__img"
                      src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                      alt="アイキャッチ画像なし">
                  <?php endif; ?>
                </div>

                <h2 class="section12__wrap__archive__list__item__detail__ttl"><?php the_title(); ?></h2>

                <div class="section12__wrap__archive__list__item__detail__text"><?php the_content(); ?></div>

                <div class="section12__wrap__archive__list__item__detail__more">
                  <div class="section12__wrap__archive__list__item__detail__more__link comMore__link">一覧へ戻る
                  </div>
                </div>
              </div>

              <div class="section12__wrap__archive__list__item__detail__filter mainColor none"></div>
            </li>
          <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p class="not__text">現在セクション12は投稿されていません。</p>
      <?php endif; ?>
    </div>
  </div>
</section>