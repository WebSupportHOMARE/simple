<section class="change">
  <h5 class="change__ttl change__ttl--color">カラーの変更</h5>

  <ul class="change__list change__list--color flex">
    <li class="change__list__item change__list__item--color active">A</li>

    <li class="change__list__item change__list__item--color">B</li>

    <li class="change__list__item change__list__item--color">C</li>

    <li class="change__list__item change__list__item--color">D</li>

    <li class="change__list__item change__list__item--color">E</li>

    <li class="change__list__item change__list__item--color">F</li>

    <li class="change__list__item change__list__item--color">G</li>

    <li class="change__list__item change__list__item--color">H</li>

    <li class="change__list__item change__list__item--color">I</li>

    <li class="change__list__item change__list__item--color">J</li>

    <li class="change__list__item change__list__item--color">K</li>
  </ul>

  <h5 class="change__ttl change__ttl--image">画像の変更</h5>

  <ul class="change__list change__list--image flex">
    <li class="change__list__item change__list__item--image active">ⅰ</li>

    <li class="change__list__item change__list__item--image">ⅱ</li>

    <li class="change__list__item change__list__item--image">ⅲ</li>

    <li class="change__list__item change__list__item--image">ⅳ</li>
  </ul>

  <p class="change__notes">
    ※こちらのメニューは参考ページのみの表示となります。<br>
    実際の制作するサイトには表示されません。
  </p>
</section>

<style>
  .change {
    background: #fff;
    padding: 10px 15px;
    position: fixed;
    right: 0;
    z-index: 20;
    opacity: 0.8;
  }

  .change__ttl {
    font-size: 1.4rem;
    font-weight: bold;
  }

  .change__ttl--image {
    margin-top: 10px;
  }

  .change__list {
    margin-top: 5px;
    font-size: 1.2rem;
  }

  .change__list__item {
    padding: 2px 0;
    width: 20px;
    text-align: center;
    border: 1px solid #333;
    border-radius: 50%;
    margin: 0 3px;
    cursor: pointer;
    user-select: none;
  }

  .change__list__item.active {
    background: #333;
    color: #fff;
  }

  .change__notes {
    margin-top: 5px;
  }

  @media (hover: hover) {
    .change__list__item:hover {
      transform: scale(1.05);
      transition: 0.4s;
    }

    .change__list__item:active {
      transform: scale(0.95);
      transition: 0.1s;
    }
  }

  @media (hover: none) {
    .change__list__item:active {
      transform: scale(0.95);
      transition: 0.01s;
    }
  }
</style>

<script>
  $(() => {
    $(".change__list--color .change__list__item--color").on("click", function() {
      let $parent = $(this).closest(".change__list--color");
      $parent.find(".active").removeClass("active");
      $(this).addClass("active");
      let text = $(this).text();
      $('body').removeClass(function(index, className) {
        return (className.match(/(^|\s)themeColor--\S+/g) || []).join(' ');
      });
      $("body").addClass("themeColor--" + text);
    });
    $(".change__list--image .change__list__item--image").on("click", function() {
      let $parent = $(this).closest(".change__list--image");
      $parent.find(".active").removeClass("active");
      $(this).addClass("active");
      let text = $(this).text();
      $('img').addClass('imageChange');
      $('.imageChange').each(function() {
        var currentSrc = $(this).attr('src');
        var newSrc = currentSrc.replace(/ⅰ|ⅱ|ⅲ|ⅳ/, text);
        $(this).attr('src', newSrc);
      });
    });

    function updateValue() {
      const height0 = $(".header").height();
      const wpadminbarHeight = $("#wpadminbar").length ? $("#wpadminbar").height() : 0;
      $(".change").css("top", height0 + wpadminbarHeight);
    }
    $(window).on("load resize", updateValue);
  });
</script>