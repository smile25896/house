$(document).ready(function () {
  let tabList = document.querySelectorAll(".m-search-for-lists li");
  tabList = Array.apply(null, tabList);
  tabList.forEach((item) => {
    item.addEventListener("click", handleClickTab);
  });

  $(".dropdown-box a").on("click", function (event) {
    let isShow = event.target.parentNode.classList.contains("show1");
    $(".dropdown-box").removeClass("show1");
    if (isShow) {
      event.target.parentNode.classList.remove("show1");
    } else {
      event.target.parentNode.classList.add("show1");
    }
  });

  document
    .querySelector(".search-more-fliter-switcher")
    .addEventListener("click", handleClickMoreFilter);
});

$("body").on("click", function (e) {
  if (
    !$(".dropdown-box").is(e.target) &&
    $(".dropdown-box").has(e.target).length === 0 &&
    $(".show1").has(e.target).length === 0
  ) {
    $(".dropdown-box").removeClass("show1");
  }
});

function handleClickTab(e) {
  let tabList = document.querySelectorAll(".m-search-for-lists li");
  tabList = Array.apply(null, tabList);
  tabList.forEach((item) => {
    item.classList.remove("is-active");
  });

  e.target.classList.add("is-active");
}

function handleClickMoreFilter(e) {
  e.target.classList.toggle("is-active");

  document
    .querySelector(".m-search-more-filter-block")
    .classList.toggle("is-active");
}
