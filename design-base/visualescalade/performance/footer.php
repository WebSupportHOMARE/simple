<!-- デザインベースベース名：VisualeScalade -->
<section class="goToTop none scrollFixedBottom">
  <a href="#" class="goToTop__box subColor flex">
    <div class="goToTop__box__icon"></div>
  </a>
</section>

<footer class="footer subColor">
  <section class="footer__wrap flex mws">
    <h5 class="footer__wrap__cc subColor">©︎copyrights 作成年数 Since. サイトネーム.</h5>

    <ul class="footer__wrap__list flex  mainColor">
      <li class="footer__wrap__list__item">
        <a href="#" target="_blank" rel="noopener noreferrer">
          <img class="footer__wrap__list__item__img"
            src="https://homare1009xs.xsrv.jp/simple/wp-content/themes/simplecourse/performance/<?php the_field('designBaseName', 'option'); ?>/icon/instagram.png"
            alt="Instagram">
        </a>
      </li>

      <li class="footer__wrap__list__item">
        <a href="#" target="_blank" rel="noopener noreferrer">
          <img class="footer__wrap__list__item__img"
            src="https://homare1009xs.xsrv.jp/simple/wp-content/themes/simplecourse/performance/<?php the_field('designBaseName', 'option'); ?>/icon/facebook.png"
            alt="facebook">
        </a>
      </li>

      <li class="footer__wrap__list__item">
        <a href="#" target="_blank" rel="noopener noreferrer">
          <img class="footer__wrap__list__item__img"
            src="https://homare1009xs.xsrv.jp/simple/wp-content/themes/simplecourse/performance/<?php the_field('designBaseName', 'option'); ?>/icon/X.png"
            alt="X">
        </a>
      </li>

      <li class="footer__wrap__list__item">
        <a href="#" target="_blank" rel="noopener noreferrer">
          <img class="footer__wrap__list__item__img"
            src="https://homare1009xs.xsrv.jp/simple/wp-content/themes/simplecourse/performance/<?php the_field('designBaseName', 'option'); ?>/icon/youtube.png"
            alt="youtube">
        </a>
      </li>

      <li class="footer__wrap__list__item">
        <a href="#" target="_blank" rel="noopener noreferrer">
          <img class="footer__wrap__list__item__img"
            src="https://homare1009xs.xsrv.jp/simple/wp-content/themes/simplecourse/performance/<?php the_field('designBaseName', 'option'); ?>/icon/tiktok.png"
            alt="tiktok">
        </a>
      </li>
    </ul>
  </section>
</footer>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- 本番JS -->
<script
  src="https://homare1009xs.xsrv.jp/simple/wp-content/themes/simplecourse/performance/<?php the_field('designBaseName', 'option'); ?>/script/main<?php the_field('scriptVersion', 'option'); ?>.js?<?php echo date('YmdHis'); ?>">
</script>
<!-- テストJS -->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/preview/<?php the_field('designBaseName', 'option'); ?>/script/main<?php the_field('scriptVersion', 'option'); ?>.js?<?php echo date('YmdHis'); ?>"></script> -->
<!-- カスタムJS -->
<script src="<?php echo get_template_directory_uri(); ?>/add-parts/add.js?<?php echo date('YmdHis'); ?>"></script>
<!-- CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>