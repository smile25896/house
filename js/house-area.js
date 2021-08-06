let areaList = [];

$(document).ready(function () {
  setAreaCheckboxesEvent();
  setAreaInputEvent();
});

function compare(a, b) {
  if (a === "max") return 1;
  if (b === "max") return -1;
  return Number(a) - Number(b);
}

function setAreaCheckboxesEvent() {
  let areaCheckboxes = getAreaCheckboxes();

  areaCheckboxes.forEach((item) => {
    item.addEventListener("click", handleClickChangeAreaCheckbox);
  });
}

function getAreaCheckboxes() {
  let areaCheckboxes = document.querySelectorAll(
    'input[name="search-select-option-area"'
  );
  return Array.apply(null, areaCheckboxes);
}

function handleClickChangeAreaCheckbox(e) {
  setAreaList(e.target);
  let areaCheckboxes = getAreaCheckboxes();
  if (e.target.value === "unlimit" && e.target.checked) {
    areaCheckboxes.slice(1).forEach((item) => {
      item.checked = false;
    });
  } else if (e.target.value === "unlimit" && !e.target.checked) {
    e.target.checked = true;
  } else if (areaCheckboxes[0].checked) {
    areaCheckboxes[0].checked = false;
  }
}

function setAreaList(target, needCheckMiddle = true) {
  let { value, checked } = target;
  let text = "坪數不限";
  if (value === "unlimit") {
    areaList.length = 0;
  } else if (checked) {
    let area = value.split("-");
    areaList.push(area[0]);
    areaList.push(area[1]);
    areaList = areaList.filter(function (item, pos, self) {
      return self.indexOf(item) == pos;
    });
    areaList = areaList.sort(compare);

    if (needCheckMiddle) {
      checkedMiddleArea(areaList[0], areaList[areaList.length - 1]);
    }
    text = setAreaText();
  } else {
    let count = 0;

    let areaCheckboxes = getAreaCheckboxes();
    for (let i = 1; i < areaCheckboxes.length; i++) {
      if (areaCheckboxes[i].checked) {
        count++;
      }
    }
    let area = value.split("-");
    if (count < 1) {
      areaList.length = 0;
    } else {
      if (area[0] === areaList[0]) {
        areaList.splice(0, 1);
      } else if (area[1] === areaList[areaList.length - 1]) {
        areaList.pop();
      } else {
        areaList = area;
        areaCheckboxes.forEach((item) => {
          item.checked = false;
        });
        target.checked = true;
      }
    }
    text = setAreaText();
  }
  document.querySelector(".search-select-area").textContent = text;
}

function setAreaText() {
  let text = "";
  if (
    areaList.length === 0 ||
    (areaList[0] === "0" && areaList[areaList.length - 1] === "max")
  ) {
    text = "坪數不限";
  } else if (areaList[0] === "0" || areaList[0] === "") {
    text = areaList[areaList.length - 1] + "坪以下";
  } else if (
    areaList[areaList.length - 1] === "max" ||
    areaList[areaList.length - 1] === ""
  ) {
    text = areaList[0] + "坪以上";
  } else {
    text = areaList[0] + "坪-" + areaList[areaList.length - 1] + "坪";
  }
  return text;
}

function checkedMiddleArea(minArea, maxArea) {
  let areaCheckboxes = getAreaCheckboxes();
  areaCheckboxes = areaCheckboxes.slice(2);
  areaCheckboxes.pop();
  areaCheckboxes.forEach((item) => {
    let area = item.value.split("-");
    if (
      Number(area[0]) > minArea &&
      (maxArea === "max" || Number(area[1]) < maxArea)
    ) {
      item.checked = true;
      setAreaList(item, false);
    }
  });
}

function setAreaInputEvent() {
  let areaInput1 = document.querySelector('input[name="area1"]');
  let areaInput2 = document.querySelector('input[name="area2"]');

  areaInput1.addEventListener("input", handleInputArea);
  areaInput2.addEventListener("input", handleInputArea);

  areaInput1.addEventListener("change", handleChangeArea);
  areaInput2.addEventListener("change", handleChangeArea);
}

function handleInputArea(e) {
  let areaCheckboxes = getAreaCheckboxes();
  areaCheckboxes.forEach((item) => {
    item.checked = false;
  });
}

function handleChangeArea(e) {
  let areaInput1 = document.querySelector('input[name="area1"]');
  let areaInput2 = document.querySelector('input[name="area2"]');

  areaList.length = 0;
  areaList.push(areaInput1.value);
  areaList.push(areaInput2.value);

  if (areaList[0] !== "" && areaList[1] !== "") {
    areaList.sort(compare);
  }

  let text = setAreaText();
  console.log(text);
  document.querySelector(".search-select-area").textContent = text;
}
