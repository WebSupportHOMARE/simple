<!-- デザインベースベース名：Allure -->
<?php get_template_part('/parts/breadcrumb'); ?>

<section id="section09_01" class="section09__single mainColor  comSec">
  <div class="section09__wrap__list__item__detail comSec">
    <h2 class="section09__wrap__list__item__detail__ttl"><?php the_title(); ?></h2>

    <div class="section09__wrap__list__item__detail__date"><?php the_time("Y.m.d"); ?></div>

    <div class="section09__wrap__list__item__detail__text"><?php the_content(); ?></div>

    <div class="section09__wrap__list__item__detail__more">
      <a class="section09__wrap__list__item__detail__more__link comMore__link"
        href="<?php echo home_url('/section09/'); ?>">一覧に戻る</a>
    </div>
  </div>
</section>