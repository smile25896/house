let listFilter = "";

$(document).ready(function () {
  setClickFilterEvent();
});

function getFilter() {
  let filters = document.querySelectorAll(".list-hd-inner>a");
  return Array.apply(null, filters);
}

function setClickFilterEvent() {
  let filters = getFilter();

  filters.forEach((item) => {
    item.addEventListener("click", handleClickChangeFilter);
  });
}

function handleClickChangeFilter(e) {
  let target = e.target.parentElement;
  listFilter = target.dataset.filter;
  postToSearchHouseData();

  let filters = getFilter();
  filters.forEach((item) => {
    item.classList.remove("active");
  });

  target.classList.add("active");
}
