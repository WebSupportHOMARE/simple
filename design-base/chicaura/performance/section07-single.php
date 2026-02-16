<!-- デザインベースベース名：ChicAura -->
<?php get_template_part('/parts/breadcrumb'); ?>

<section id="section07_01" class="section07__single comSec">
  <div class="section07__wrap__list__item__detail comSec">
    <div class="section07__wrap__list__item__detail__imgBox">
      <?php if (has_post_thumbnail()) : ?>
        <img class="section07__wrap__list__item__detail__imgBox__img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
      <?php else : ?>
        <img class="section07__wrap__list__item__detail__imgBox__img" src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png" alt="アイキャッチ画像なし">
      <?php endif; ?>
    </div>

    <h3 class="section07__wrap__list__item__detail__ttl"><?php the_title(); ?></h3>

    <div class="section07__wrap__list__item__detail__date"><?php the_time("Y.m.d"); ?></div>

    <div class="section07__wrap__list__item__detail__text"><?php the_content(); ?></div>

    <div class="section07__wrap__list__item__detail__more">
      <a class="section07__wrap__list__item__detail__more__link comMore__link mainColor" href="<?php echo home_url('/section07/'); ?>">一覧に戻る</a>
    </div>
  </div>
</section>