<!-- デザインベースベース名：Nurture -->
<section id="section07_01" class="section07 comSec">
    <div class="section07__wrap mw">
        <h2 class="section07__wrap__ttl comSec__ttl">
            <span class="section07__wrap__ttl__span--top comSec__ttl__span--top">セクション07</span>
            <span class="section07__wrap__ttl__span comSec__ttl__span">section07</span>
        </h2>

        <?php
        $args = [
            "post_type" => "section07",
            "posts_per_page" => 3,
            "paged" => $paged,
        ];
        $the_query = new WP_query($args);
        if ($the_query->have_posts()) :
        ?>
            <!-- ページ仕様 -->
            <ul class="section07__wrap__list flex">
                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>
                    <li class="section07__wrap__list__item aLink">
                        <a class="section07__wrap__list__item__link" href="<?php the_permalink(); ?>">
                            <div class="section07__wrap__list__item__link__imgBox">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="section07__wrap__list__item__link__imgBox__img img3-2"
                                        src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <?php else : ?>
                                    <img class="section07__wrap__list__item__link__imgBox__img img3-2"
                                        src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png"
                                        alt="アイキャッチ画像なし">
                                <?php endif; ?>
                            </div>

                            <div class="section07__wrap__list__item__link__date"><?php the_time("Y.m.d"); ?></div>

                            <h3 class="section07__wrap__list__item__link__ttl"><?php the_title(); ?></h3>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>



            <?php if ($the_query->found_posts > 3) : ?>
                <div class="section07__wrap__more">
                    <a href="<?php echo home_url('/section07/'); ?>"
                        class="section07__wrap__more__link flex comMore__link comMore__link--adjust subColor2">
                        セクション07をもっと見る
                        <span class=" section07__wrap__more__link__arrow comButton__arrow flex">▶︎</span>
                    </a>
                </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p class="not__text">現在セクション07は投稿されていません。</p>
        <?php endif; ?>
    </div>
</section>