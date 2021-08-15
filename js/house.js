$(document).ready(function () {
  setHouseTypeEvent();
  setCarEvent();

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

  postToSearchHouseData();
}

function handleClickMoreFilter(e) {
  e.target.classList.toggle("is-active");

  document
    .querySelector(".m-search-more-filter-block")
    .classList.toggle("is-active");
}

function setFilterCount() {
  let count = 0;
  if (
    floorList.length > 0 ||
    document.querySelector("input[name='top']").checked
  ) {
    count++;
  }
  if (ageList.length > 0) {
    count++;
  }
  if (
    roomList.length > 0 ||
    document.querySelector("input[name='roomSp']").checked
  ) {
    count++;
  }
  if (getHouseTypeDom().some((item) => item.checked)) {
    count++;
  }
  if (getCarDom().some((item) => item.checked)) {
    count++;
  }

  document.querySelector(".filter-count").textContent = count;
}

function getHouseTypeDom() {
  let houseTypeInputDom = document.querySelectorAll("input[name='houseType']");
  return Array.apply(null, houseTypeInputDom);
}

function setHouseTypeEvent() {
  let houseTypeDom = getHouseTypeDom();
  houseTypeDom.forEach((item) => {
    item.addEventListener("change", handleChangeHouseType);
  });
}

function handleChangeHouseType() {
  setFilterCount();
}

function getCarDom() {
  let carInputDom = document.querySelectorAll("input[name='car']");
  return Array.apply(null, carInputDom);
}

function setCarEvent() {
  let carDom = getCarDom();
  carDom.forEach((item) => {
    item.addEventListener("change", handleChangeCar);
  });
}

function handleChangeCar(e) {
  if (e.target.checked) {
    let carDom = getCarDom();
    carDom.forEach((item) => {
      item.checked = false;
    });
    e.target.checked = true;
  }

  setFilterCount();
}
