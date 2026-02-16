<!-- デザインベースベース名：VisualeScalade -->
<section id="section07_01" class="section07 comSec">
  <div class="section07__wrap mws">
    <h2 class="section07__wrap__ttl comSec__ttl">section07<span class="section07__wrap__ttl__span comSec__ttl__span">セクション07</span></h2>

    <?php
    $current_page_id = get_the_ID();
    $args = [
      "post_type" => "section07",
      "posts_per_page" => 3,
      "paged" => $paged,
    ];
    $the_query = new WP_query($args);
    if ($the_query->have_posts()) :
    ?>
      <ul class="section07__wrap__list flex">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
          $template_name = get_field('designBaseName', $current_page_id);
        ?>
          <li class="section07__wrap__list__item aLink">
            <div class="section07__wrap__list__item__link comModal__link section07__wrap__list__item__link--<?php the_ID(); ?>">
              <div class="section07__wrap__list__item__link__imgBox">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="section07__wrap__list__item__link__imgBox__img img3-2" src="<?php echo get_template_directory_uri(); ?>/preview/<?php echo $template_name; ?>/img/postTestImgⅰ.png" alt="<?php the_title(); ?>">
                <?php else : ?>
                  <img class="section07__wrap__list__item__link__imgBox__img img3-2" src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png" alt="アイキャッチ画像なし">
                <?php endif; ?>
              </div>
              <div class="section07__wrap__list__item__link__textBox">
                <div class="section07__wrap__list__item__link__date"><?php the_time("Y.m.d"); ?></div>

                <h3 class="section07__wrap__list__item__link__ttl"><?php the_title(); ?></h3>
              </div>

            </div>
          </li>
        <?php endwhile; ?>
      </ul>

      <ul class="section07__wrap__modalList">
        <?php
        while ($the_query->have_posts()) :
          $the_query->the_post();
          $template_name = get_field('designBaseName', $current_page_id);
        ?>
          <li class="section07__wrap__modalList__item aLink">
            <div class="section07__wrap__list__item__detail comModal__link__detail section07__wrap__list__item__detail--<?php the_ID(); ?> comSec none">
              <div class="section07__wrap__list__item__detail__imgBox">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="section07__wrap__list__item__detail__imgBox__img" src="<?php echo get_template_directory_uri(); ?>/preview/<?php echo $template_name; ?>/img/postTestImgⅰ.png" alt="<?php the_title(); ?>">
                <?php else : ?>
                  <img class="section07__wrap__list__item__detail__imgBox__img" src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png" alt="アイキャッチ画像なし">
                <?php endif; ?>
              </div>

              <div class="section07__wrap__list__item__detail__date"><?php the_time("Y.m.d"); ?></div>

              <h3 class="section07__wrap__list__item__detail__ttl"><?php the_title(); ?></h3>

              <div class="section07__wrap__list__item__detail__text"><?php the_content(); ?></div>

              <div class="section07__wrap__list__item__detail__more">
                <div class="section07__wrap__list__item__detail__more__link comMore__link mainColor">
                  <span class="section07__wrap__more__link__btn">
                    一覧へ戻る
                  </span>
                </div>
              </div>
            </div>

            <div class="section07__wrap__list__item__detail__filter none"></div>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php if ($the_query->found_posts > 3) : ?>
        <div class="section07__wrap__more section07__wrap__more--modal">
          <div class="section07__wrap__more__link comMore__link mainColor">
            <span class="section07__wrap__more__link__btn">
              セクション07をもっと見る
            </span>
          </div>
        </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p class="not__text">現在セクション07は投稿されていません。</p>
    <?php endif; ?>

    <div class="section07__wrap__archive none comModal__archive">
      <h2 class="section07__wrap__archive__ttl comSec__ttl mw">section07<span class="section07__wrap__archive__ttl__span comSec__ttl__span">セクション07</span></h2>

      <ul class="section07__wrap__archive__breadcrumb breadcrumb mw flex">
        <li class="section07__wrap__archive__breadcrumb__item breadcrumb__item">TOP</li>

        <li class="section07__wrap__archive__breadcrumb__item breadcrumb__item">section07 セクション07</li>
      </ul>

      <?php
      $current_page_id = get_the_ID();
      $args = [
        "post_type" => "section07",
        "posts_per_page" => -1,
        "paged" => $paged,
      ];
      $the_query = new WP_query($args);
      if ($the_query->have_posts()) :
      ?>
        <ul class="section07__wrap__archive__list flex mw">
          <?php
          while ($the_query->have_posts()) :
            $the_query->the_post();
            $template_name = get_field('designBaseName', $current_page_id);
          ?>
            <li class="section07__wrap__archive__list__item aLink">
              <div class="section07__wrap__archive__list__item__link comModal__link section07__wrap__archive__list__item__link--<?php the_ID(); ?>">
                <div class="section07__wrap__archive__list__item__link__imgBox">
                  <?php if (has_post_thumbnail()) : ?>
                    <img class="section07__wrap__archive__list__item__link__imgBox__img img3-2" src="<?php echo get_template_directory_uri(); ?>/preview/<?php echo $template_name; ?>/img/postTestImgⅰ.png" alt="<?php the_title(); ?>">
                  <?php else : ?>
                    <img class="section07__wrap__archive__list__item__link__imgBox__img img3-2" src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png" alt="アイキャッチ画像なし">
                  <?php endif; ?>
                </div>

                <div class="section07__wrap__list__item__link__textBox">
                  <div class="section07__wrap__archive__list__item__link__date"><?php the_time("Y.m.d"); ?></div>

                  <h3 class="section07__wrap__archive__list__item__link__ttl"><?php the_title(); ?></h3>
                </div>

              </div>

            </li>
          <?php endwhile; ?>
        </ul>

        <ul class="section07__wrap__archive__modalList">
          <?php
          while ($the_query->have_posts()) :
            $the_query->the_post();
            $template_name = get_field('designBaseName', $current_page_id);
          ?>
            <li class="section07__wrap__archive__modalList__item aLink">
              <div class="section07__wrap__archive__list__item__detail comModal__link__detail section07__wrap__archive__list__item__detail--<?php the_ID(); ?> comSec none">
                <div class="section07__wrap__archive__list__item__detail__imgBox">
                  <?php if (has_post_thumbnail()) : ?>
                    <img class="section07__wrap__archive__list__item__detail__imgBox__img" src="<?php echo get_template_directory_uri(); ?>/preview/<?php echo $template_name; ?>/img/postTestImgⅰ.png" alt="<?php the_title(); ?>">
                  <?php else : ?>
                    <img class="section07__wrap__archive__list__item__detail__imgBox__img" src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png" alt="アイキャッチ画像なし">
                  <?php endif; ?>
                </div>

                <div class="section07__wrap__archive__list__item__detail__date"><?php the_time("Y.m.d"); ?></div>

                <h3 class="section07__wrap__archive__list__item__detail__ttl"><?php the_title(); ?></h3>

                <div class="section07__wrap__archive__list__item__detail__text"><?php the_content(); ?></div>

                <div class="section07__wrap__archive__list__item__detail__more">
                  <div class="section07__wrap__archive__list__item__detail__more__link comMore__link mainColor">
                    <span class="section07__wrap__more__link__btn">一覧へ戻る</span>
                  </div>
                </div>
              </div>

              <div class="section07__wrap__archive__list__item__detail__filter none"></div>
            </li>
          <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p class="not__text">現在セクション07は投稿されていません。</p>
      <?php endif; ?>
    </div>
  </div>
</section>