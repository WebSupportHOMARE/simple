<!-- デザインベースベース名：Nurture -->
<?php get_template_part('/parts/breadcrumb'); ?>

<section id="section12_01" class="section12__archive comSec">
    <div class="section12__wrap__archive section12__wrap__archive--block comSec">
        <h2 class="section12__wrap__ttl comSec__ttl">
            <span class="section12__wrap__ttl__span--top comSec__ttl__span--top">セクション12</span>
            <span class="section12__wrap__ttl__span comSec__ttl__span">section12</span>
        </h2>

        <?php
        // query_posts を使ってメインクエリを書き換え↓
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        query_posts(array(
            'post_type' => 'section12',
            'posts_per_page' => 12,
            'paged' => $paged,
        ));

        if (have_posts()) :
        ?>

            <!-- モーダル仕様 -->
            <ul class="section12__wrap__archive__list flex mw">
                <?php while (have_posts()) : the_post(); ?>
                    <li class="section12__wrap__archive__list__item aLink">
                        <div
                            class="section12__wrap__archive__list__item__link comModal__link section12__wrap__archive__list__item__link--<?php the_ID(); ?>">
                            <div class="section12__wrap__archive__list__item__link__imgBox">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="section12__wrap__archive__list__item__link__imgBox__img img3-2"
                                        src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <?php else : ?>
                                    <img class="section12__wrap__archive__list__item__link__imgBox__img img3-2"
                                        src="<<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                                        alt="アイキャッチ画像なし">
                                <?php endif; ?>
                            </div>

                            <h2 class="section12__wrap__archive__list__item__link__ttl"><?php the_title(); ?></h2>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>

            <ul class="section12__wrap__archive__modalList">
                <?php while (have_posts()) : the_post(); ?>
                    <li class="section12__wrap__archive__modalList__item">
                        <div
                            class="section12__wrap__archive__list__item__detail comModal__link__detail section12__wrap__archive__list__item__detail--<?php the_ID(); ?> comSec none">
                            <div class="section12__wrap__archive__list__item__detail__imgBox">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="section12__wrap__archive__list__item__detail__imgBox__img"
                                        src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <?php else : ?>
                                    <img class="section12__wrap__archive__list__item__detail__imgBox__img"
                                        src="<<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                                        alt="アイキャッチ画像なし">
                                <?php endif; ?>
                            </div>

                            <h2 class="section12__wrap__archive__list__item__detail__ttl"><?php the_title(); ?></h2>

                            <div class="section12__wrap__archive__list__item__detail__text"><?php the_content(); ?></div>

                            <div class="section12__wrap__archive__list__item__detail__more">
                                <div
                                    class="section12__wrap__archive__list__item__detail__more__link comMore__link comMore__link--adjust flex subColor2">
                                    <span
                                        class="section12__wrap__archive__list__item__detail__more__link__arrow comButton__arrow comButton__arrow__back flex"></span>
                                    一覧へ戻る
                                </div>
                            </div>
                        </div>

                        <div class="section12__wrap__archive__list__item__detail__filter none"></div>
                    </li>
                <?php endwhile; ?>
            </ul>


            <?php wp_reset_postdata(); ?>

            <?php get_template_part('/parts/pagination'); ?>

        <?php else : ?>
            <p class="not__text">現在セクション12の投稿はございません。</p>
        <?php endif; ?>
    </div>
</section>