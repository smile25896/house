let listSort = "";

$(document).ready(function () {
  setClickSortOptionEvent();
});

function getSortOption() {
  let sortOptions = document.querySelectorAll(".list-sort-option");
  return Array.apply(null, sortOptions);
}

function setClickSortOptionEvent() {
  let sortOptions = getSortOption();

  sortOptions.forEach((item) => {
    item.addEventListener("click", handleClickChangeSortOption);
  });
}

function handleClickChangeSortOption(e) {
  let target = e.target;
  while (target.tagName !== "A") {
    target = target.parentNode;
  }
  listSort = target.dataset.od;
  postToSearchHouseData();

  document.querySelector(".list-sort-handler.m-select-box").textContent =
    e.target.textContent;
}
