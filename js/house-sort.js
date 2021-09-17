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
  listSort = e.target.dataset.od;
  postToSearchHouseData();

  document.querySelector(".list-sort-handler.m-select-box").textContent =
    e.target.textContent;
}
