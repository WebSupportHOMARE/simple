<!-- デザインベースベース名：Nurture -->
<section id="section09_01" class="section09 comSec">
    <div class="section09__wrap mw">
        <h2 class="section09__wrap__ttl comSec__ttl">
            <span class="section09__wrap__ttl__span--top comSec__ttl__span--top">セクション09</span>
            <span class="section09__wrap__ttl__span comSec__ttl__span">section09</span>
        </h2>

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
                            <h3 class="section09__wrap__list__item__link__ttl"><?php the_title(); ?></h3>

                            <div class="section09__wrap__list__item__link__date"><?php the_time("Y.m.d"); ?></div>

                            <div class="section09__wrap__list__item__link__text"><?php the_content(); ?></div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php if ($the_query->found_posts > 3) : ?>
                <div class="section09__wrap__more">
                    <a href="<?php echo home_url('/section09/'); ?>"
                        class="section09__wrap__more__link comMore__link flex comMore__link--adjust subColor2">
                        セクション09をもっと見る
                        <span class="section09__wrap__more__link__arrow comButton__arrow flex">▶︎</span>
                    </a>
                </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p class="not__text">現在セクション09は投稿されていません。</p>
        <?php endif; ?>
    </div>
</section>