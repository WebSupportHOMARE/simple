/* デザインベースベース名：VisualeScalade*/
var enableDynamicValuesve = true;
var enableResponsive = true;
var enablelinkInPage = true;
var enablePagination = true;
var enableBreadcrumb = true;
var enableButtonReturnToTop = true;
var enableHeaderMenu = true;
var enableHeaderHbMenu = true;
var enableSection02Slide = true;
var enableSection04Accordion = true;
var enableSection05NUmberSet = true;
var enableSection07Slide = true;
var enableSection07Modal = true;
var enableSection09Modal = true;
var enableSection10NUmberSet = true;
var enableSection12Modal = true;
var enableSection16ImgPrev = true;
var enableSection16Select = true;
var enableSection16BtnFlex = true;
var enableSection16BtnMainColor = true;
var enableSection16DatePicker = true;

$(() => {
  // .mainと.haderに動的値
  if (enableDynamicValuesve) {
    function updateHeaderAndMain() {
      const header = document.querySelector(".header");
      const main = document.querySelector(".main");
      const wpadminbar = document.querySelector("#wpadminbar");
      if (header && main) {
        let headerHeight = header.offsetHeight;
        let wpadminbarHeight = wpadminbar ? wpadminbar.offsetHeight : 0;
        document.documentElement.style.setProperty(
          "--header-height",
          `${headerHeight}px`
        );
        document.documentElement.style.setProperty(
          "--wpadminbar-height",
          `${wpadminbarHeight}px`
        );
        main.style.visibility = "visible";
      }
    }
    window.addEventListener("DOMContentLoaded", updateHeaderAndMain);
    window.addEventListener("load", updateHeaderAndMain);
    window.addEventListener("resize", updateHeaderAndMain);
  }

  // レスポンシブ
  if (enableResponsive) {
    function updateValue() {
      const windowWidth = $(window).width();
      const headerHeight = $(".header").height();
      if (windowWidth > 960) {
        // 960px以上の場合の処理をここに記述
        $(".header__top__menu").css("display", "flex");
        $(".header__top__menu").css("margin-top", "");
        $(".comModal__archive").css("margin-top", headerHeight);
        $(".comModal__link__detail").css("margin-top", headerHeight);
        $(".section12__wrap__list__item__detail").css(
          "max-height",
          "calc(100vh - " + headerHeight + "px - clamp(40px, 4vw, 60px))"
        );
        $(".section12__wrap__archive__list__item__detail").css(
          "max-height",
          "calc(100vh - " + headerHeight + "px - clamp(40px, 4vw, 60px))"
        );
      }
      if (windowWidth <= 960) {
        // 960px以下の場合の処理をここに記述
        $(".header__top__menu").css("display", "");
        $(".header__top__menu").css(
          "max-height",
          "calc(100vh - " + headerHeight + "px - clamp(25px, 7vw, 50px))"
        );
        $(".header__top__hbFilter").css("display", "");
        $(".header__top__hbFilter").css("top", headerHeight);
        $(".comModal__archive").css("margin-top", headerHeight);
        $(".comModal__link__detail").css("margin-top", headerHeight);
        $(".header__top__menu").css("margin-top", headerHeight);
        $(".header__top__hbBtn").removeClass("close");
        $(".section12__wrap__list__item__detail").css(
          "max-height",
          "calc(100vh - " + headerHeight + "px - clamp(40px, 4vw, 60px))"
        );
        $(".section12__wrap__archive__list__item__detail").css(
          "max-height",
          "calc(100vh - " + headerHeight + "px - clamp(40px, 4vw, 60px))"
        );
      }
      if (windowWidth <= 520) {
        // 520px以下の場合の追加の処理をここに記述
      }
    }
    $(window).on("load resize", updateValue);
  }

  // ページ内リンク処理
  if (enablelinkInPage) {
    const getHeights = () => {
      const headerHeight = $(".header").outerHeight();
      const wpadminbarHeight = $("#wpadminbar").length
        ? $("#wpadminbar").outerHeight()
        : 0;
      return { headerHeight, wpadminbarHeight };
    };
    const scrollToHash = (hash) => {
      const { headerHeight, wpadminbarHeight } = getHeights();
      const target = $(hash);
      if (target.length) {
        const position = target.offset().top - headerHeight - wpadminbarHeight;
        $("body,html")
          .stop()
          .animate({ scrollTop: position }, 500, () => {
            history.replaceState(null, null, " ");
          });
      }
    };
    const initialHash = location.hash;
    if (initialHash) {
      $("body,html").stop().scrollTop(0);
      setTimeout(() => {
        scrollToHash(initialHash);
      }, 100);
    }
    $('a[href*="#"]').click((event) => {
      event.preventDefault();
      const href = $(event.currentTarget).attr("href");
      // 'modalScrollNone' クラスがある場合はスクロール処理を行わない
      if ($(event.currentTarget).hasClass("modalScrollNone")) {
        return;
      }
      const currentUrl =
        location.protocol + "//" + location.host + location.pathname;
      const linkUrl = new URL(href, currentUrl);
      if (linkUrl.pathname === location.pathname) {
        const targetHash =
          linkUrl.hash === "#" || linkUrl.hash === "" ? "body" : linkUrl.hash;
        scrollToHash(targetHash);
      } else {
        window.location.href = href;
      }
    });
  }

  // ページネーション
  if (enablePagination) {
    $("ul.page-numbers li span.current").addClass("subColor");
  }

  // パンくず
  if (enableBreadcrumb) {
    $(".breadcrumb__item").addClass("breadcrumb__item--back");
    $(".breadcrumb").each(function () {
      $(this)
        .find(".breadcrumb__item:last")
        .removeClass("breadcrumb__item--back")
        .addClass("breadcrumb__item--open");
    });
  }

  // トップへ戻る & ヘッダー制御
  if (enableButtonReturnToTop) {
    const $goToTop = $(".goToTop");
    const $header = $(".header");
    const $mv = $(".mv");
    const mvHeight = $mv.length ? $mv.outerHeight() : 0;
    let lastScroll = 0;

    function updateHeader(currentScroll) {
      if (currentScroll === 0) {
        // 最上部 → 完全非表示（ホバーで表示可能）
        $header.removeClass("hide show-before").css("pointer-events", "auto");
      } else if (currentScroll < mvHeight) {
        // mv内 → 表示固定
        $header
          .removeClass("hide")
          .addClass("show-before")
          .css("pointer-events", "auto");
      } else {
        // mv以下
        if (currentScroll > lastScroll && currentScroll > 50) {
          // 下スクロール → 非表示
          $header
            .addClass("hide")
            .removeClass("show-before")
            .css("pointer-events", "none");
        } else if (currentScroll < lastScroll) {
          // 上スクロール → 表示
          $header
            .removeClass("hide")
            .addClass("show-before")
            .css("pointer-events", "auto");
        }
      }
      lastScroll = currentScroll;
    }

    // スクロール処理
    $(window).on("scroll", function () {
      const currentScroll = $(this).scrollTop();

      // トップへ戻るボタン位置
      const documentHeight = $(document).height();
      const scrollPosition = $(this).height() + currentScroll;
      const footerHeight = $(".footer").innerHeight();
      const footerVisiblePosition = documentHeight - footerHeight;

      if (scrollPosition > footerVisiblePosition) {
        $(".scrollFixedBottom").css({
          position: "fixed",
          right: 20,
          bottom: scrollPosition - footerVisiblePosition + 20,
        });
      } else {
        $(".scrollFixedBottom").css({
          position: "fixed",
          right: 20,
          bottom: 20,
        });
      }

      // トップへ戻るボタン表示切替
      if (currentScroll < 500) {
        $goToTop.removeClass("active");
      } else {
        $goToTop.addClass("active");
      }

      // ヘッダー制御
      updateHeader(currentScroll);
    });

    // ホバー / タップで強制表示（最上部でも有効）
    $header.on("mouseenter touchstart", function () {
      $header
        .removeClass("hide")
        .addClass("show-before")
        .css("pointer-events", "auto");
    });

    $header.on("mouseleave touchend", function () {
      const currentScroll = $(window).scrollTop();
      if (currentScroll > mvHeight && $header.hasClass("hide")) {
        $header.css("pointer-events", "none");
      }
    });
  }

  // ヘッダーメニュー
  if (enableHeaderMenu) {
    var initialState = {
      activeLink: null,
      activeSpan: null,
    };
    $(function () {
      initialState.activeLink = $(
        ".header__top__menu__list__item__link.active, .header__top__menu__list__btn__link.active"
      );
      initialState.activeSpan = $(
        ".header__top__menu__list__item__link__span.active"
      );
      $(".goToTop__box").on("click", function () {
        resetHeaderMenuStates();
      });
      $(
        ".header__top__menu__list__item__link, .header__top__menu__list__btn__link"
      ).on("click", function () {
        var href = $(this).attr("href") || "";
        if (shouldBypassActivation(href)) return;
        resetHeaderMenuStates();
        var isBtnLink = $(this).hasClass("header__top__menu__list__btn__link");
        $(this).addClass("active");
        if (!isBtnLink) {
          $(this)
            .addClass("mainColor")
            .find(".header__top__menu__list__item__link__span")
            .addClass("active");
        }
      });
    });
    window.addEventListener("pageshow", function (event) {
      if (!event.persisted) return;
      resetHeaderMenuStates();
      if (initialState.activeLink && initialState.activeLink.length) {
        initialState.activeLink.each(function () {
          var $el = $(this);
          if ($el.hasClass("header__top__menu__list__item__link")) {
            $el
              .addClass("active mainColor")
              .find(".header__top__menu__list__item__link__span")
              .addClass("active");
          } else if ($el.hasClass("header__top__menu__list__btn__link")) {
            $el.addClass("active");
          }
        });
      }
      if (initialState.activeSpan && initialState.activeSpan.length) {
        initialState.activeSpan.addClass("active");
      }
    });
    function resetHeaderMenuStates() {
      $(".header__top__menu__list__item__link").removeClass("active mainColor");
      $(".header__top__menu__list__btn__link").removeClass("active");
      $(".header__top__menu__list__item__link__span").removeClass("active");
    }
    function shouldBypassActivation(href) {
      if (
        /^https?:\/\//i.test(href) &&
        href.indexOf(window.location.hostname) === -1
      ) {
        return true;
      }
      if (/^(tel:|mailto:|javascript:|data:|blob:)/i.test(href)) {
        return true;
      }
      return false;
    }
  }

  // ハンバーガーメニュー
  if (enableHeaderHbMenu) {
    $(".header__top__hbBtn").click(() => {
      if ($(window).width() <= 960) {
        $(".header__top__menu").fadeToggle(500);
        $(".header__top__hbFilter").fadeToggle(500);
        $(".header__top__hbBtn").toggleClass("close");
        if ($(".header__top__hbBtn").hasClass("close")) {
          $("body").css("overflow", "hidden");
        } else {
          $("body").css("overflow", "auto");
        }
      }
    });
    $(".header__top__menu__list__item__link").click(() => {
      if ($(window).width() <= 960) {
        $(".header__top__menu").fadeToggle(500);
        $(".header__top__hbFilter").fadeToggle(500);
        $(".header__top__hbBtn").toggleClass("close");
        $("body").css("overflow", "auto");
      }
    });
    $(".header__top__menu__list__btn__link").click(() => {
      if ($(window).width() <= 960) {
        $(".header__top__menu").fadeToggle(500);
        $(".header__top__hbFilter").fadeToggle(500);
        $(".header__top__hbBtn").toggleClass("close");
        $("body").css("overflow", "auto");
      }
    });
  }

  // セクション2スライド
  if (enableSection02Slide) {
    function checkWidthAndAddDiv(sectionNumber) {
      var sectionId = "#section02_" + sectionNumber;
      if ($(window).width() <= 520) {
        if (!$(sectionId + " .section02__wrap__arrows").length) {
          $(sectionId + " .section02__wrap").append(
            '<div class="section02__wrap__arrows flex"></div>'
          );
          initializeSlick(sectionNumber);
        }
      } else {
        $(sectionId + " .section02__wrap__arrows").remove();
        if (
          $(sectionId + " .section02__wrap__list").hasClass("slick-initialized")
        ) {
          $(sectionId + " .section02__wrap__list").slick("unslick");
        }
      }
    }
    function initializeSlick(sectionNumber) {
      var sectionId = "#section02_" + sectionNumber;
      $(sectionId + " .section02__wrap__list")
        .on("init", function (event, slick) {
          $(sectionId + " .section02__wrap__arrows").append(
            '<div class="slick-num"><span class="now-count now-count-section02"></span> / <span class="all-count all-count-section02"></span></div>'
          );
          $(sectionId + " .now-count-section02").text(slick.currentSlide + 1);
          $(sectionId + " .all-count-section02").text(slick.slideCount);
        })
        .slick({
          prevArrow: '<div class="section02__prev__icon"></div>',
          nextArrow: '<div class="section02__next__icon"></div>',
          appendArrows: $(sectionId + " .section02__wrap__arrows"),
        })
        .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
          $(sectionId + " .now-count-section02").text(nextSlide + 1);
        });
    }
    $("[id^='section02_']").each(function () {
      var sectionNumber = this.id.split("_")[1];
      checkWidthAndAddDiv(sectionNumber);
    });
    $(window).resize(function () {
      $("[id^='section02_']").each(function () {
        var sectionNumber = this.id.split("_")[1];
        checkWidthAndAddDiv(sectionNumber);
      });
    });
  }

  // セクション4アコーディオン
  if (enableSection04Accordion) {
    $("[id^='section04_']").each(function () {
      var sectionId = "#" + this.id;
      $(sectionId + " .section04__wrap__list__item").each((index) => {
        let ind = index + 1;
        $(
          sectionId +
            " .section04__wrap__list__item:nth-of-type(" +
            ind +
            ") .section04__wrap__list__item__q"
        ).click(() => {
          $(
            sectionId +
              " .section04__wrap__list__item:nth-of-type(" +
              ind +
              ") .section04__wrap__list__item__a"
          ).slideToggle();
          $(
            sectionId +
              " .section04__wrap__list__item:nth-of-type(" +
              ind +
              ") .section04__wrap__list__item__q"
          ).toggleClass("open");
        });
      });
    });
  }

  // セクション5数字セット
  if (enableSection05NUmberSet) {
    const setNumberSection05 = (items) => {
      items.forEach((item, index) => {
        const number = (index + 1).toString().padStart(2, "0");
        item.style.setProperty("--number", `"${number}"`);
      });
    };
    document.querySelectorAll("[id^='section05_']").forEach((section) => {
      const section5Items = section.querySelectorAll(
        ".section05__wrap__list__item"
      );
      setNumberSection05(section5Items);
    });
  }

  // セクション7スライド
  if (enableSection07Slide) {
    function checkWidthAndAddDi2(sectionId) {
      if ($(window).width() <= 960) {
        if (!$(sectionId + " .section07__wrap__arrows").length) {
          $(sectionId + " .section07__wrap__list").after(
            '<div class="section07__wrap__arrows flex"></div>'
          );
          initializeSlick2(sectionId);
        }
      } else {
        $(sectionId + " .section07__wrap__arrows").remove();
        if (
          $(sectionId + " .section07__wrap__list").hasClass("slick-initialized")
        ) {
          $(sectionId + " .section07__wrap__list").slick("unslick");
        }
      }
    }
    function initializeSlick2(sectionId) {
      $(sectionId + " .section07__wrap__list")
        .on("init", function (event, slick) {
          $(sectionId + " .section07__wrap__arrows").append(
            '<div class="slick-num"><span class="now-count now-count-section07"></span> / <span class="all-count all-count-section07"></span></div>'
          );
          $(sectionId + " .now-count-section07").text(slick.currentSlide + 1);
          $(sectionId + " .all-count-section07").text(slick.slideCount);
        })
        .slick({
          slidesToShow: 3,
          prevArrow: '<div class="section07__prev__icon"></div>',
          nextArrow: '<div class="section07__next__icon"></div>',
          appendArrows: $(sectionId + " .pc .section07__wrap__arrows"),
          responsive: [
            {
              breakpoint: 960,
              settings: {
                appendArrows: $(sectionId + " .section07__wrap__arrows"),
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 520,
              settings: {
                appendArrows: $(sectionId + " .section07__wrap__arrows"),
                slidesToShow: 1,
              },
            },
          ],
        })
        .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
          $(sectionId + " .now-count-section07").text(nextSlide + 1);
        });
    }
    $("[id^='section07_']").each(function () {
      var sectionId = "#" + this.id;
      checkWidthAndAddDi2(sectionId);
    });

    $(window).resize(function () {
      $("[id^='section07_']").each(function () {
        var sectionId = "#" + this.id;
        checkWidthAndAddDi2(sectionId);
      });
    });
  }

  // セクション7モーダル
  if (enableSection07Modal) {
    $("[id^='section07_']").each(function () {
      var sectionId = "#" + this.id;
      $(sectionId + " .section07__wrap__list").on(
        "click",
        ".section07__wrap__list__item__link",
        function () {
          var postId = $(this).attr("class").split("--")[1];
          $(
            sectionId + " .section07__wrap__list__item__detail--" + postId
          ).fadeIn();
          $("body").css("overflow", "hidden");
        }
      );
      $(sectionId + " .section07__wrap__modalList__item").on(
        "click",
        ".section07__wrap__list__item__detail__more",
        function () {
          $(this).closest(".section07__wrap__list__item__detail").fadeOut();
          $("body").css("overflow", "auto");
        }
      );
      $(sectionId + " .section07__wrap__archive__list").on(
        "click",
        ".section07__wrap__archive__list__item__link",
        function () {
          var postId = $(this).attr("class").split("--")[1];
          $(
            sectionId +
              " .section07__wrap__archive__list__item__detail--" +
              postId
          ).fadeIn();
          $("body").css("overflow", "hidden");
        }
      );
      $(sectionId + " .section07__wrap__archive__modalList").on(
        "click",
        ".section07__wrap__archive__list__item__detail__more",
        function () {
          $(this)
            .closest(".section07__wrap__archive__list__item__detail")
            .fadeOut();
          $("body").css("overflow", "auto");
        }
      );
      $(sectionId + " .section07__wrap__more--modal").click(() => {
        $(sectionId + " .section07__wrap__archive").fadeIn();
        $("body").css("overflow", "hidden");
      });
    });
    $(".breadcrumb__item--back").click(() => {
      $("[id^='section07_'] .section07__wrap__archive").fadeOut();
      $("body").css("overflow", "auto");
    });
  }

  // セクション9モーダル
  if (enableSection09Modal) {
    $("[id^='section09_']").each(function () {
      var sectionId = "#" + this.id;
      $(sectionId + " .section09__wrap__list").on(
        "click",
        ".section09__wrap__list__item__link",
        function () {
          var postId = $(this).attr("class").split("--")[1];
          $(
            sectionId + " .section09__wrap__list__item__detail--" + postId
          ).fadeIn();
          $("body").css("overflow", "hidden");
        }
      );
      $(sectionId + " .section09__wrap__modalList").on(
        "click",
        ".section09__wrap__list__item__detail__more",
        function () {
          $(this).closest(".section09__wrap__list__item__detail").fadeOut();
          $("body").css("overflow", "auto");
        }
      );
      $(sectionId + " .section09__wrap__archive__list").on(
        "click",
        ".section09__wrap__archive__list__item__link",
        function () {
          var postId = $(this).attr("class").split("--")[1];
          $(
            sectionId +
              " .section09__wrap__archive__list__item__detail--" +
              postId
          ).fadeIn();
          $("body").css("overflow", "hidden");
        }
      );
      $(sectionId + " .section09__wrap__archive__modalList").on(
        "click",
        ".section09__wrap__archive__list__item__detail__more",
        function () {
          $(this)
            .closest(".section09__wrap__archive__list__item__detail")
            .fadeOut();
          $("body").css("overflow", "auto");
        }
      );
      $(sectionId + " .section09__wrap__more--modal").click(() => {
        $(sectionId + " .section09__wrap__archive").fadeIn();
        $("body").css("overflow", "hidden");
      });
    });
    $(".breadcrumb__item--back").click(() => {
      $("[id^='section09_'] .section09__wrap__archive").fadeOut();
      $("body").css("overflow", "auto");
    });
  }
  // section09文字数制御
  jQuery(function ($) {
    function trimText() {
      // 対象クラスをまとめて指定
      var targets = $(
        ".section09__wrap__list__item__link__text, .section09__wrap__archive__list__item__link__text"
      );

      targets.each(function () {
        var originalText = $(this).data("original-text");
        if (!originalText) {
          $(this).data("original-text", $(this).text());
          originalText = $(this).text();
        }

        var windowWidth = $(window).width();
        var limit;

        // 幅による文字数設定（仮）
        if (windowWidth <= 520) {
          limit = 25; // スマホ
        } else if (windowWidth <= 960) {
          limit = 40; // タブレット
        } else {
          limit = 60; // PC
        }

        // 文字カット処理
        var trimmedText =
          originalText.length > limit
            ? originalText.substring(0, limit) + "…"
            : originalText;

        $(this).text(trimmedText);
      });
    }

    // 初期実行
    trimText();

    // リサイズ時にも実行（負荷軽減のため遅延）
    var resizeTimer;
    $(window).on("resize", function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(trimText, 200);
    });
  });

  // セクション10数字セット
  if (enableSection10NUmberSet) {
    const setNumberSection10 = (items) => {
      items.forEach((item, index) => {
        const number = (index + 1).toString().padStart(2, "0");
        item.style.setProperty("--number", `"${number}"`);
      });
    };
    document.querySelectorAll("[id^='section10_']").forEach((section) => {
      const section10Items = section.querySelectorAll(
        ".section10__wrap__list__item"
      );
      setNumberSection10(section10Items);
    });
  }

  // セクション12モーダル
  if (enableSection12Modal) {
    $("[id^='section12_']").each(function () {
      var sectionId = "#" + this.id;
      $(sectionId + " .section12__wrap__list").on(
        "click",
        ".section12__wrap__list__item__link",
        function () {
          var postId = $(this).attr("class").split("--")[1];
          $(
            sectionId + " .section12__wrap__list__item__detail--" + postId
          ).fadeIn();
          $(
            sectionId + " .section12__wrap__list__item__detail__filter"
          ).fadeIn();
          $("body").css("overflow", "hidden");
        }
      );
      $(sectionId + " .section12__wrap__modalList").on(
        "click",
        ".section12__wrap__list__item__detail__more, .section12__wrap__list__item__detail__filter",
        function () {
          $(".section12__wrap__list__item__detail").fadeOut();
          $(".section12__wrap__list__item__detail__filter").fadeOut();
          $("body").css("overflow", "auto");
        }
      );
      $(sectionId + " .section12__wrap__archive__list").on(
        "click",
        ".section12__wrap__archive__list__item__link",
        function () {
          var postId = $(this).attr("class").split("--")[1];
          $(
            sectionId +
              " .section12__wrap__archive__list__item__detail--" +
              postId
          ).fadeIn();
          $(
            sectionId + " .section12__wrap__archive__list__item__detail__filter"
          ).fadeIn();
          $("body").css("overflow", "hidden");
        }
      );
      $(sectionId + " .section12__wrap__archive__modalList").on(
        "click",
        ".section12__wrap__archive__list__item__detail__more, .section12__wrap__archive__list__item__detail__filter",
        function () {
          $(".section12__wrap__archive__list__item__detail").fadeOut();
          $(".section12__wrap__archive__list__item__detail__filter").fadeOut();
          $("body").css("overflow", "auto");
        }
      );
      $(sectionId + " .section12__wrap__more--modal").click(() => {
        $(sectionId + " .section12__wrap__archive").fadeIn();
        $("body").css("overflow", "hidden");
      });
    });
    $(".breadcrumb__item--back").click(() => {
      $("[id^='section12_'] .section12__wrap__archive").fadeOut();
      $("body").css("overflow", "auto");
    });
  }

  // セクション16画像プレビュー
  if (enableSection16ImgPrev) {
    $(document).ready(function () {
      var savedImage = sessionStorage.getItem("uploadedImage");
      if (savedImage) {
        var output = $("#image-preview");
        var img = $("<img>")
          .attr("src", savedImage)
          .css({ maxWidth: "200px", maxHeight: "200px" });
        output.append(img);
        sessionStorage.removeItem("uploadedImage");
      }
      $(document).on("change", "#image-upload", function (event) {
        var output = $("#image-preview");
        output.empty();
        if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            var img = $("<img>")
              .attr("src", e.target.result)
              .css({ maxWidth: "200px", maxHeight: "200px" });
            output.append(img);
            sessionStorage.setItem("uploadedImage", e.target.result);
          };
          reader.readAsDataURL(this.files[0]);
        }
      });
      $(document).on("click", ".mwform-file-delete", function () {
        if ($(this).siblings("#image-upload").length > 0) {
          $("#image-preview").empty();
          $("#image-upload").val("");
          sessionStorage.removeItem("uploadedImage");
        }
      });
    });
  }

  // セクション16セレクトボックス
  if (enableSection16Select) {
    $(document).ready(function () {
      $("[id^='section16_']").each(function () {
        var sectionId = "#" + this.id;
        $(
          sectionId + " .section16__wrap__form__body__row__place select"
        ).hide();
        $(sectionId + " .section16__wrap__form__body__row__place select").after(
          '<div class="custom-select"></div>'
        );
        var customSelect = $(sectionId + " .custom-select");
        customSelect.append('<div class="current-select">ご選択ください</div>');
        var options = $(
          sectionId + " .section16__wrap__form__body__row__place select option"
        )
          .map(function () {
            return "<div>" + $(this).text() + "</div>";
          })
          .get();
        customSelect.append(
          '<div class="custom-select-options">' + options.join("") + "</div>"
        );
        customSelect.find(".current-select").click(function (e) {
          e.stopPropagation();
          $(this).next(".custom-select-options").slideToggle();
          $(this).parent(".custom-select").toggleClass("arrowUp");
        });
        customSelect.find(".custom-select-options div").click(function () {
          var value = $(this).text();
          $(sectionId + " .section16__wrap__form__body__row__place select").val(
            value
          );
          $(this).closest(".custom-select").find(".current-select").text(value);
          $(this).parent(".custom-select-options").slideUp();
          $(this).closest(".custom-select").removeClass("arrowUp");
        });
      });
      $(document).click(function (e) {
        if (
          !$(e.target).closest(
            ".section16__wrap__form__body__row__place .custom-select"
          ).length
        ) {
          $(".custom-select-options").slideUp();
          $(".custom-select").removeClass("arrowUp");
        }
      });
    });
  }

  // セクション16確認ページでボタンにflex追加
  if (enableSection16BtnFlex) {
    window.addEventListener("load", function () {
      var currentUrl = window.location.pathname;
      if (currentUrl.includes("contact-confirmation")) {
        var btnBox = document.querySelector(
          ".section16__wrap__form__body__btnBox"
        );
        if (btnBox) {
          btnBox.classList.add("flex");
        }
      }
    });
  }

  // セクション16確認、送信ボタンにmainColor追加
  if (enableSection16BtnMainColor) {
    $(
      ".section16__wrap__form__body__btnBox__wrap:last-of-type .section16__wrap__form__body__btnBox__btn"
    ).addClass("mainColor");
  }

  // セクション16デイトピッカー
  if (enableSection16DatePicker) {
    var today = new Date();
    var year = today.getFullYear();
    var month = ("0" + (today.getMonth() + 1)).slice(-2);
    var day = ("0" + today.getDate()).slice(-2);
    var formattedDate = year + "/" + month + "/" + day;
    $("#datepicker").attr("placeholder", formattedDate);
    $("#datepicker").datepicker({
      dateFormat: "yy/mm/dd",
      minDate: 3,
    });
  }

  // セクション16のlabelにaLink追加
  $(".section16__wrap__form__body__row__place label").addClass("aLink");

  setTimeout(function () {
    $(".section16__wrap__form__body__row__place .current-select").addClass(
      "aLink"
    );
  }, 1000);

  $(".section16__wrap__form__body__row__place label").addClass("aLink").css({
    display: "inline",
  });
});
