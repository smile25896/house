$(document).ready(function () {
  setSelectsEvent();
});

function setSelectsEvent() {
  let selects = getSelects();

  selects.forEach((item) => {
    item.addEventListener("click", handleClickSelect);
  });
}

function getSelects() {
  let selects = document.querySelectorAll(".m-select");
  return Array.apply(null, selects);
}

function handleClickSelect(e) {
  let target = e.target;
  while (target.tagName !== "P") {
    target = target.parentNode;
  }
  let status = target.classList.contains("is-active");
  target = target.parentNode;

  let selects = getSelects();
  selects.forEach((item) => {
    toggleSelect(item, false);
  });

  if (!status) {
    toggleSelect(target, !status);
  }
}

function toggleSelect(selectNodem, status) {
  if (status) {
    selectNodem.querySelector("p").classList.add("is-active");
    selectNodem.querySelector(".item").classList.add("is-active");
  } else {
    selectNodem.querySelector("p").classList.remove("is-active");
    selectNodem.querySelector(".item").classList.remove("is-active");
  }
}
