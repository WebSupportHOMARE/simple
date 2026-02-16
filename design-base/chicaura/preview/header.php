<!-- デザインベースベース名：ChicAura -->
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# prefix属性: http://ogp.me/ns/ prefix属性#">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <!-- サイト情報 -->
  <meta name="description" content="<?php the_field('designBaseName'); ?>プレビューページ">
  <title><?php the_field('designBaseName'); ?></title>
  <!-- クロール制御 -->
  <?php if (
    is_404() ||
    is_page(array('contact-confirmation', 'contact-thanks'))
  ): ?>
    <meta name="robots" content="noindex, follow">
  <?php endif; ?>
  <!-- ファビコン -->
  <link rel="icon" href="<?php the_field('favicon_ico'); ?>">
  <link rel="apple-touch-icon" href="<?php the_field('favicon_png'); ?>">
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/destyle.css">
  <!-- 本番CSS -->
  <!-- <link rel="stylesheet" href="https://homare1009xs.xsrv.jp/simple/wp-content/themes/simplecourse/performance/<?php the_field('designBaseName'); ?>/css/style<?php the_field('cssVersion'); ?>.css?<?php echo date('YmdHis'); ?>"> -->
  <!-- テストCSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/preview/<?php the_field('designBaseName'); ?>/css/style<?php the_field('cssVersion'); ?>.css?<?php echo date('YmdHis'); ?>">
  <!-- OGP -->
  <meta property="og:url" content="<?php echo get_the_permalink(); ?>">
  <?php if (is_home() || is_front_page()) : ?>
    <meta property="og:type" content="website">
  <?php else : ?>
    <meta property="og:type" content="article">
  <?php endif; ?>
  <meta property="og:title" content="<?php bloginfo("name"); ?>">
  <meta property="og:description" content="<?php bloginfo("description"); ?>">
  <meta property="og:site_name" content="<?php bloginfo("name"); ?>">
  <meta property="og:image" content="<?php the_field('ogpImg'); ?>">
  <!-- <meta property=”fb:app_id” content=アプリID”> -->
  <meta name=”twitter:card” content=summary_large_image>
  <!-- <meta name=”twitter:site” content=”ユーザー名”> -->
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <script>
    (function(d) {
      var config = {
          kitId: 'bfu3dkv',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <!-- CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <?php wp_head(); ?>
</head>

<body class="themeColor--<?php the_field('designColor'); ?>">
  <header class="header">
    <section class="header__top flex">
      <h1 class="header__top__logo">
        <a href="#mv_01">
          <img class="header__top__logo__img" src="<?php echo get_template_directory_uri(); ?>/preview/<?php the_field('designBaseName'); ?>/img/logoTestImgⅰ.png" alt="ロゴテストイメージ">
        </a>
      </h1>

      <div class="header__top__menu flex pc">
        <ul class="header__top__menu__list flex">
          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section01_01">section01<span class="header__top__menu__list__item__link__span">セクション01</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section02_01">section02<span class="header__top__menu__list__item__link__span">セクション02</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section03_01">section03<span class="header__top__menu__list__item__link__span">セクション03</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section04_01">section04<span class="header__top__menu__list__item__link__span">セクション04</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section05_01">section05<span class="header__top__menu__list__item__link__span">セクション05</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section06_01">section06<span class="header__top__menu__list__item__link__span">セクション06</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section07_01">section07<span class="header__top__menu__list__item__link__span">セクション07</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section08_01">section08<span class="header__top__menu__list__item__link__span">セクション08</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section09_01">section09<span class="header__top__menu__list__item__link__span">セクション09</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section10_01">section10<span class="header__top__menu__list__item__link__span">セクション10</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section11_01">section11<span class="header__top__menu__list__item__link__span">セクション11</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section12_01">section12<span class="header__top__menu__list__item__link__span">セクション12</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section13_01">section13<span class="header__top__menu__list__item__link__span">セクション13</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section14_01">section14<span class="header__top__menu__list__item__link__span">セクション14</span></a>
          </li>

          <li class="header__top__menu__list__item">
            <a class="header__top__menu__list__item__link" href="#section15_01">section15<span class="header__top__menu__list__item__link__span">セクション15</span></a>
          </li>
        </ul>

        <div class="header__top__menu__list__btn">
          <a class="header__top__menu__list__btn__link comMore__link mainColor" href="#section16_01">セクション16</a>
        </div>
      </div>

      <div class="header__top__hbBtn tab"></div>

      <div class="header__top__hbFilter none"></div>
    </section>
  </header>