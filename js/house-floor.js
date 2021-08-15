let floorList = [];

$(document).ready(function () {
  setFloorCheckboxesEvent();
  setFloorInputEvent();
  setTopFloorEvent();
});

function compare(a, b) {
  if (a === "max") return 1;
  if (b === "max") return -1;
  return Number(a) - Number(b);
}

function setFloorCheckboxesEvent() {
  let floorCheckboxes = getFloorCheckboxes();

  floorCheckboxes.forEach((item) => {
    item.addEventListener("click", handleClickChangeFloorCheckbox);
  });
}

function getFloorCheckboxes() {
  let floorCheckboxes = document.querySelectorAll(
    'input[name="search-select-option-floor"'
  );
  return Array.apply(null, floorCheckboxes);
}

function handleClickChangeFloorCheckbox(e) {
  setFloorList(e.target);
  let floorCheckboxes = getFloorCheckboxes();
  if (e.target.value === "unlimit" && e.target.checked) {
    floorCheckboxes.slice(1).forEach((item) => {
      item.checked = false;
    });
  } else if (e.target.value === "unlimit" && !e.target.checked) {
    e.target.checked = true;
  } else if (floorCheckboxes[0].checked) {
    floorCheckboxes[0].checked = false;
  }
}

function setFloorList(target, needCheckMiddle = true) {
  let { value, checked } = target;
  if (value === "unlimit") {
    floorList.length = 0;
  } else if (checked) {
    let floor = value.split("-");
    floorList.push(floor[0]);
    floorList.push(floor[1]);
    floorList = floorList.filter(function (item, pos, self) {
      return self.indexOf(item) == pos;
    });
    floorList = floorList.sort(compare);

    if (needCheckMiddle) {
      checkedMiddleFloor(floorList[0], floorList[floorList.length - 1]);
    }
  } else {
    let count = 0;

    let floorCheckboxes = getFloorCheckboxes();
    for (let i = 1; i < floorCheckboxes.length; i++) {
      if (floorCheckboxes[i].checked) {
        count++;
      }
    }
    let floor = value.split("-");
    if (count < 1) {
      floorList.length = 0;
    } else {
      if (floor[0] === floorList[0]) {
        floorList.splice(0, 1);
      } else if (floor[1] === floorList[floorList.length - 1]) {
        floorList.pop();
      } else {
        floorList = floor;
        floorCheckboxes.forEach((item) => {
          item.checked = false;
        });
        target.checked = true;
      }

      // 解決樓層數字不連續的問題
      if (floorList[0] === "6" || floorList === "12") {
        floorList.splice(0, 1);
      } else if (
        floorList[floorList.length - 1] === "2" ||
        floorList[floorList.length - 1] === "7"
      ) {
        floorList.pop();
      }
    }
  }

  setFilterCount();
}

function checkedMiddleFloor(minFloor, maxFloor) {
  let floorCheckboxes = getFloorCheckboxes();
  floorCheckboxes = floorCheckboxes.slice(2);
  floorCheckboxes.pop();
  floorCheckboxes.forEach((item) => {
    let floor = item.value.split("-");
    if (
      Number(floor[0]) > minFloor &&
      (maxFloor === "max" || Number(floor[1]) < maxFloor)
    ) {
      item.checked = true;
      setFloorList(item, false);
    }
  });
}

function setFloorInputEvent() {
  let floorInput1 = document.querySelector('input[name="floor1"]');
  let floorInput2 = document.querySelector('input[name="floor2"]');

  floorInput1.addEventListener("input", handleInputFloor);
  floorInput2.addEventListener("input", handleInputFloor);

  floorInput1.addEventListener("change", handleChangeFloor);
  floorInput2.addEventListener("change", handleChangeFloor);
}

function handleInputFloor(e) {
  let floorCheckboxes = getFloorCheckboxes();
  floorCheckboxes.forEach((item) => {
    item.checked = false;
  });
}

function handleChangeFloor(e) {
  let floorInput1 = document.querySelector('input[name="floor1"]');
  let floorInput2 = document.querySelector('input[name="floor2"]');

  floorList.length = 0;
  floorList.push(floorInput1.value);
  floorList.push(floorInput2.value);

  if (floorList[0] !== "" && floorList[1] !== "") {
    floorList.sort(compare);
  }

  setFilterCount();
}

function setTopFloorEvent() {
  document
    .querySelector("input[name='top']")
    .addEventListener("change", handleChangeTopFloor);
}

function handleChangeTopFloor() {
  setFilterCount();
}
