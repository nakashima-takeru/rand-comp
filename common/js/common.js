// header__drawer-menu
function navi() {
  var menuBtn = $('header .header__menu button');
  var drawerMenu = $("header .header__drawer-menu");
  var drawerMenuContainer = $(".header__drawer-menu-container");

  menuBtn.on('click', function() {
    $(this).toggleClass('active');
    $('header .header__drawer-menu').toggleClass('active');
    drawerMenuResizeHandler();
  });
  function drawerMenuResizeHandler() {
    drawerMenuContainer.outerWidth($(window).outerWidth());
    if (drawerMenu.hasClass('active')) {
      drawerMenu.outerWidth($(window).outerWidth());
    } else {
      drawerMenu.width(0);
    }
  }
  $(window).on("resize", drawerMenuResizeHandler);
  drawerMenuResizeHandler();

  $('.header__drawer-menu .anchor').on('click',function() {
    menuBtn.removeClass('active');
    drawerMenu.removeClass('active');
    drawerMenuResizeHandler();
  } );
}

$(function(){
  navi()
});

// スムーススクロール
$(function(){
  $('a[href^="#"]').click(function(){
    let speed = 500;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

// ページトップボタン
$(function() {
  var pagetop = $('.page_top');
  // ボタン非表示
  pagetop.hide();
  // 100px スクロールしたらボタン表示
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function() {
    $('body, html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});