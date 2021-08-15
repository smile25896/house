let ageList = [];

$(document).ready(function () {
  setAgeCheckboxesEvent();
  setAgeInputEvent();
});

function compare(a, b) {
  if (a === "max") return 1;
  if (b === "max") return -1;
  return Number(a) - Number(b);
}

function setAgeCheckboxesEvent() {
  let ageCheckboxes = getAgeCheckboxes();

  ageCheckboxes.forEach((item) => {
    item.addEventListener("click", handleClickChangeAgeCheckbox);
  });
}

function getAgeCheckboxes() {
  let ageCheckboxes = document.querySelectorAll(
    'input[name="search-select-option-age"'
  );
  return Array.apply(null, ageCheckboxes);
}

function handleClickChangeAgeCheckbox(e) {
  setAgeList(e.target);
  let ageCheckboxes = getAgeCheckboxes();
  if (e.target.value === "unlimit" && e.target.checked) {
    console.log("hello");
    ageCheckboxes.slice(1).forEach((item) => {
      item.checked = false;
    });
  } else if (e.target.value === "unlimit" && !e.target.checked) {
    e.target.checked = true;
  } else if (ageCheckboxes[0].checked) {
    ageCheckboxes[0].checked = false;
  }
}

function setAgeList(target, needCheckMiddle = true) {
  let { value, checked } = target;
  if (value === "unlimit") {
    ageList.length = 0;
  } else if (checked) {
    let age = value.split("-");
    ageList.push(age[0]);
    ageList.push(age[1]);
    ageList = ageList.filter(function (item, pos, self) {
      return self.indexOf(item) == pos;
    });
    ageList = ageList.sort(compare);

    if (needCheckMiddle) {
      checkedMiddleAge(ageList[0], ageList[ageList.length - 1]);
    }
  } else {
    let count = 0;

    let ageCheckboxes = getAgeCheckboxes();
    for (let i = 1; i < ageCheckboxes.length; i++) {
      if (ageCheckboxes[i].checked) {
        count++;
      }
    }
    let age = value.split("-");
    if (count < 1) {
      ageList.length = 0;
    } else {
      if (age[0] === ageList[0]) {
        ageList.splice(0, 1);
      } else if (age[1] === ageList[ageList.length - 1]) {
        ageList.pop();
      } else {
        ageList = age;
        ageCheckboxes.forEach((item) => {
          item.checked = false;
        });
        target.checked = true;
      }
    }
  }

  setFilterCount();
}

function checkedMiddleAge(minAge, maxAge) {
  let ageCheckboxes = getAgeCheckboxes();
  ageCheckboxes = ageCheckboxes.slice(2);
  ageCheckboxes.pop();
  ageCheckboxes.forEach((item) => {
    let age = item.value.split("-");
    if (
      Number(age[0]) > minAge &&
      (maxAge === "max" || Number(age[1]) < maxAge)
    ) {
      item.checked = true;
      setAgeList(item, false);
    }
  });
}

function setAgeInputEvent() {
  let ageInput1 = document.querySelector('input[name="age1"]');
  let ageInput2 = document.querySelector('input[name="age2"]');

  ageInput1.addEventListener("input", handleInputAge);
  ageInput2.addEventListener("input", handleInputAge);

  ageInput1.addEventListener("change", handleChangeAge);
  ageInput2.addEventListener("change", handleChangeAge);
}

function handleInputAge(e) {
  let ageCheckboxes = getAgeCheckboxes();
  ageCheckboxes.forEach((item) => {
    item.checked = false;
  });
}

function handleChangeAge(e) {
  let ageInput1 = document.querySelector('input[name="age1"]');
  let ageInput2 = document.querySelector('input[name="age2"]');

  ageList.length = 0;
  ageList.push(ageInput1.value);
  ageList.push(ageInput2.value);

  if (ageList[0] !== "" && ageList[1] !== "") {
    ageList.sort(compare);
  }

  setFilterCount();
}
