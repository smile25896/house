$(document).ready(function () {
  let tabList = document.querySelectorAll(".m-search-for-lists li");
  tabList = Array.apply(null, tabList);
  tabList.forEach((item) => {
    item.addEventListener("click", handleClickTab);
  });

  // let selects = document.querySelectorAll(".search-select");
  // selects = Array.apply(null, selects);
  // selects.forEach((item) => {
  //   item.addEventListener("click", handleClickDropdown);
  // });

  // document.addEventListener("click", blurDropdown);

  $(".dropdown-box a").on("click", function (event) {
    let isShow = event.target.parentNode.classList.contains("show1");
    $(".dropdown-box").removeClass("show1");
    console.dir(event.target.parentNode);
    if (isShow) {
      event.target.parentNode.classList.remove("show1");
    } else {
      event.target.parentNode.classList.add("show1");
    }
    // $(this).parent().toggleClass("show1");
  });
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

// function blurDropdown() {
//   console.log("blur");
//   let dropdowns = document.querySelectorAll(".dropdown");
//   dropdowns = Array.apply(null, dropdowns);
//   dropdowns.forEach((item) => {
//     item.classList.remove("active");
//   });

//   let dropdownButtons = document.querySelectorAll(".dropdown-button");
//   dropdownButtons = Array.apply(null, dropdownButtons);
//   dropdownButtons.forEach((item) => {
//     item.classList.remove("active");
//   });
// }

function handleClickTab(e) {
  let tabList = document.querySelectorAll(".m-search-for-lists li");
  tabList = Array.apply(null, tabList);
  tabList.forEach((item) => {
    item.classList.remove("is-active");
  });

  e.target.classList.add("is-active");
}

// function handleClickDropdown(e) {
//   console.log("click");
//   e.preventDefault();
//   console.dir(e.target);
//   let target = e.target;
//   console.log("." + target.dataset.dropdown);
//   if (target.classList.contains("active")) {
//     document
//       .querySelector("." + target.dataset.dropdown)
//       .classList.remove("active");
//     target.classList.remove("active");
//   } else {
//     document
//       .querySelector("." + target.dataset.dropdown)
//       .classList.add("active");
//     target.classList.add("active");
//   }
// }
