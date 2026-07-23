<!-- デザインベースベース名：VisualeScalade -->
<?php get_template_part('/parts/breadcrumb'); ?>

<section id="section09_01" class="section09__single comSec">
  <div class="section09__wrap__list__item__detail comSec">
    <h3 class="section09__wrap__list__item__detail__ttl"><?php the_title(); ?></h3>

    <div class="section09__wrap__list__item__detail__date"><?php the_time("Y.m.d"); ?></div>

    <div class="section09__wrap__list__item__detail__text"><?php the_content(); ?></div>

    <div class="section09__wrap__list__item__detail__more">
      <div class="section09__wrap__list__item__detail__more__link comMore__link mainColor">
        <span class="section09__wrap__more__link__btn">
          <a class="section09__wrap__list__item__detail__more__link"
            href="<?php echo home_url('/section09/'); ?>">一覧に戻る</a>
        </span>
      </div>
    </div>
  </div>
</section>