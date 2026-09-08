"use strict";
// 記事カードをスクロールでふわっと表示する（トップページ限定）
window.addEventListener("scroll", function () {
  const scrollY = window.scrollY;
  const windowHeight = window.innerHeight;
  const cards = document.querySelectorAll(".article-card");

  cards.forEach(function (card) {
    const cardTop = card.getBoundingClientRect().top + scrollY;

    if (scrollY + windowHeight > cardTop + 60) {
      card.classList.add("is-visible");
    }
  });
});
window.dispatchEvent(new Event("scroll"));

("use strict");

//その1 アンダーライン
window.addEventListener("scroll", function () {
  const scroll = window.scrollY;
  const windowHeight = window.innerHeight;
  const lines = document.querySelectorAll(".underline-target");

  // //画面に入った瞬間に発火させたい場合！
  // lines.forEach(function (line) {
  //     const distanceToLine = line.offsetTop;
  //     if (scroll + windowHeight > distanceToLine) {
  //         line.classList.add("underline-active");
  //     }
  // });

  //画面の真ん中で発火させたい場合！
  lines.forEach(function (line) {
    //ユーザーのデバイス画面の真ん中を計算する 一番上のpx + 画面の高さの半分
    const lineMiddle = line.offsetTop + line.offsetHeight / 2;
    //いまいる高さの真ん中の位置を計算する
    const screenMiddle = scroll + windowHeight / 2;

    if (screenMiddle > lineMiddle) {
      line.classList.add("underline-active");
    }
  });
});

// その2-1 画像をフェードインさせる（右から）
window.addEventListener("scroll", function () {
  const scroll = window.scrollY;
  const windowHeight = window.innerHeight;
  const images = document.querySelectorAll(".right-invisible");

  images.forEach(function (image) {
    //ユーザーのデバイス画面の真ん中を計算する 一番上のpx + 画面の高さの半分
    const imageMiddle = image.offsetTop + image.offsetHeight / 2;
    //いまいる高さの真ん中の位置を計算する
    const screenMiddle = scroll + windowHeight / 2;

    if (screenMiddle > imageMiddle) {
      image.classList.add("right-is-active");
    }
  });
});

//その2-2 画像をフェードインさせる（左から）
window.addEventListener("scroll", function () {
  const scroll = window.scrollY;
  const windowHeight = window.innerHeight;
  const images = document.querySelectorAll(".left-invisible");

  //画面に入った瞬間に発火させたい場合！
  images.forEach(function (image) {
    const distanceToImage = image.offsetTop;
    if (scroll + windowHeight > distanceToImage) {
      image.classList.add("left-is-active");
    }
  });
});

// // 綺麗なお手本！！！
// const images = document.querySelectorAll("".img-in-visible");

// window.addEventListener("scroll", () => {
//     const triggerPoint = window.scrollY + window.innerHeight;

//     images.forEach(image => {
//         if (triggerPoint > image.offsetTop) {
//             image.classList.add("img-is-active");
//         }
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
  const btn = document.querySelector(".scrollTop");

  window.addEventListener("scroll", function () {
    const scroll = window.scrollY;
    // console.log(scroll);

    if (scroll > 4700) {
      btn.classList.add("show");
    } else {
      btn.classList.remove("show");
    }
  });

  btn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});

// ハンバーガーメニュー
const hamburger = document.querySelector(".hamburger");
const mobileMenu = document.querySelector("#mobile-menu");
const mobileMenuClose = document.querySelector("#mobile-menu-close");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
  mobileMenu.classList.toggle("is-open");
});

mobileMenuClose.addEventListener("click", () => {
  hamburger.classList.remove("is-active");
  mobileMenu.classList.remove("is-open");
});
