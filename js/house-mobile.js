$(document).ready(function () {
  setSearchBarToggleEvent();
  setSelectsEvent();
  setMoreFilterToggleEvent();
});

function setSearchBarToggleEvent() {
  let searchBar = document.querySelector(".m-search-bar a");
  let closeIcon = document.querySelector(".m-search i.close");

  searchBar.addEventListener("click", () => {
    handleClickSearchBar();
  });
  closeIcon.addEventListener("click", () => {
    handleClickSearchBar(false);
  });
}

function handleClickSearchBar(isShow) {
  if (isShow !== undefined) {
    if (isShow) {
      document.querySelector(".m-search-bar").classList.add("is-hide");
      document.querySelector(".m-list-buy").classList.add("is-hide");
      document.querySelector(".m-search").classList.add("is-active");
    } else {
      document.querySelector(".m-search-bar").classList.remove("is-hide");
      document.querySelector(".m-list-buy").classList.remove("is-hide");
      document.querySelector(".m-search").classList.remove("is-active");
    }
  } else {
    document.querySelector(".m-search-bar").classList.toggle("is-hide");
    document.querySelector(".m-list-buy").classList.toggle("is-hide");
    document.querySelector(".m-search").classList.toggle("is-active");
  }
}

function setMoreFilterToggleEvent() {
  let moreFilterButton = document.querySelector(".more-filter");

  moreFilterButton.addEventListener("click", handleClickMoreFilter);
}

function handleClickMoreFilter() {
  let moreFilterBlock = document.querySelector(".more-filter-block");
  let moreFilterButton = document.querySelector(".more-filter");
  moreFilterBlock.classList.toggle("on");
  moreFilterBlock.classList.toggle("off");

  if (moreFilterBlock.classList.contains("on")) {
    moreFilterButton.textContent = "-更少條件";
  } else {
    moreFilterButton.textContent = "+更多條件";
  }
}

function setSelectsEvent() {
  let selects = getSelects();
  let selects2 = getSelects2();

  selects.forEach((item) => {
    item.addEventListener("click", handleClickSelect);
  });
  selects2.forEach((item) => {
    item.addEventListener("click", handleClickSelect2);
  });
}

function getSelects() {
  let selects = document.querySelectorAll(".m-select p");
  return Array.apply(null, selects);
}

function getSelects2() {
  let selects = document.querySelectorAll(".m-type p");
  return Array.apply(null, selects);
}

function handleClickSelect(e) {
  let target = e.target;
  while (target.tagName !== "P") {
    target = target.parentNode;
  }
  let status = target.classList.contains("is-active");

  let selects = getSelects();
  selects.forEach((item) => {
    toggleSelect(item, false);
  });

  if (!status) {
    toggleSelect(target, !status);
  }
}

function handleClickSelect2(e) {
  let target = e.target;
  while (target.tagName !== "P") {
    target = target.parentNode;
  }
  let status = target.classList.contains("is-active");

  let selects = getSelects2();
  selects.forEach((item) => {
    toggleSelect(item, false);
  });

  if (!status) {
    toggleSelect(target, !status);
  }
}

function toggleSelect(selectNodem, status) {
  if (status) {
    selectNodem.classList.add("is-active");
    selectNodem.parentNode.querySelector(".item").classList.add("is-active");
  } else {
    selectNodem.classList.remove("is-active");
    selectNodem.parentNode.querySelector(".item").classList.remove("is-active");
  }
}
