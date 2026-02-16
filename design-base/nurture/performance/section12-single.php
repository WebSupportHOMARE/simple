<!-- デザインベースベース名：Nurture -->
<?php get_template_part('/parts/breadcrumb'); ?>

<section id="section12_01" class="section12__single  comSec">
  <div class="section12__wrap__list__item__detail comSec">
    <div class="section12__wrap__list__item__detail__imgBox">
      <?php if (has_post_thumbnail()) : ?>
        <img class="section12__wrap__list__item__detail__imgBox__img" src="<?php the_post_thumbnail_url(); ?>"
          alt="<?php the_title(); ?>">
      <?php else : ?>
        <img class="section12__wrap__list__item__detail__imgBox__img"
          src="<?php echo get_template_directory_uri(); ?>/user-img/noimageBeside.png" alt="アイキャッチ画像なし">
      <?php endif; ?>
    </div>

    <h3 class="section12__wrap__list__item__detail__ttl"><?php the_title(); ?></h3>

    <div class="section12__wrap__list__item__detail__text"><?php the_content(); ?></div>

    <div class="section12__wrap__list__item__detail__more">
      <a class="section12__wrap__list__item__detail__more__link comMore__link mainColor"
        href="<?php echo home_url('/section12/'); ?>">一覧に戻る</a>
    </div>
  </div>
</section>