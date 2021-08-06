let priceList = [];

$(document).ready(function () {
  setPriceCheckboxesEvent();
  setPriceInputEvent();
});

function compare(a, b) {
  if (a === "max") return 1;
  if (b === "max") return -1;
  return Number(a) - Number(b);
}

function setPriceCheckboxesEvent() {
  let priceCheckboxes = getPriceCheckboxes();

  priceCheckboxes.forEach((item) => {
    item.addEventListener("click", handleClickChangePriceCheckbox);
  });
}

function getPriceCheckboxes() {
  let priceCheckboxes = document.querySelectorAll(
    'input[name="search-select-option-price"'
  );
  return Array.apply(null, priceCheckboxes);
}

function handleClickChangePriceCheckbox(e) {
  document.querySelector('input[name="price1"]').value = "";
  document.querySelector('input[name="price2"]').value = "";

  setPriceList(e.target);
  let priceCheckboxes = getPriceCheckboxes();
  if (e.target.value === "unlimit" && e.target.checked) {
    priceCheckboxes.slice(1).forEach((item) => {
      item.checked = false;
    });
  } else if (e.target.value === "unlimit" && !e.target.checked) {
    e.target.checked = true;
  } else if (priceCheckboxes[0].checked) {
    priceCheckboxes[0].checked = false;
  }
}

function setPriceList(target, needCheckMiddle = true) {
  let { value, checked } = target;
  let text = "總價不限";
  if (value === "unlimit") {
    priceList.length = 0;
  } else if (checked) {
    let price = value.split("-");
    priceList.push(price[0]);
    priceList.push(price[1]);
    priceList = priceList.filter(function (item, pos, self) {
      return self.indexOf(item) == pos;
    });
    priceList = priceList.sort(compare);

    if (needCheckMiddle) {
      checkedMiddlePrice(priceList[0], priceList[priceList.length - 1]);
    }
    text = setPriceText();
  } else {
    let count = 0;

    let priceCheckboxes = getPriceCheckboxes();
    for (let i = 1; i < priceCheckboxes.length; i++) {
      if (priceCheckboxes[i].checked) {
        count++;
      }
    }
    let price = value.split("-");
    if (count < 1) {
      priceList.length = 0;
    } else {
      if (price[0] === priceList[0]) {
        priceList.splice(0, 1);
      } else if (price[1] === priceList[priceList.length - 1]) {
        priceList.pop();
      } else {
        priceList = price;
        priceCheckboxes.forEach((item) => {
          item.checked = false;
        });
        target.checked = true;
      }
    }
    text = setPriceText();
  }
  document.querySelector(".search-select-price").textContent = text;
}

function setPriceText() {
  let text = "";
  if (
    priceList.length === 0 ||
    (priceList[0] === "0" && priceList[priceList.length - 1] === "max")
  ) {
    text = "總價不限";
  } else if (priceList[0] === "0" || priceList[0] === "") {
    text = priceList[priceList.length - 1] + "萬以下";
  } else if (
    priceList[priceList.length - 1] === "max" ||
    priceList[priceList.length - 1] === ""
  ) {
    text = priceList[0] + "萬以上";
  } else {
    text = priceList[0] + "萬-" + priceList[priceList.length - 1] + "萬";
  }
  return text;
}

function checkedMiddlePrice(minPrice, maxPrice) {
  let priceCheckboxes = getPriceCheckboxes();
  priceCheckboxes = priceCheckboxes.slice(2);
  priceCheckboxes.pop();
  priceCheckboxes.forEach((item) => {
    let price = item.value.split("-");
    if (
      Number(price[0]) > minPrice &&
      (maxPrice === "max" || Number(price[1]) < maxPrice)
    ) {
      item.checked = true;
      setPriceList(item, false);
    }
  });
}

function setPriceInputEvent() {
  let priceInput1 = document.querySelector('input[name="price1"]');
  let priceInput2 = document.querySelector('input[name="price2"]');

  priceInput1.addEventListener("input", handleInputPrice);
  priceInput2.addEventListener("input", handleInputPrice);

  priceInput1.addEventListener("change", handleChangePrice);
  priceInput2.addEventListener("change", handleChangePrice);
}

function handleInputPrice(e) {
  let priceCheckboxes = getPriceCheckboxes();
  priceCheckboxes.forEach((item) => {
    item.checked = false;
  });
}

function handleChangePrice(e) {
  let priceInput1 = document.querySelector('input[name="price1"]');
  let priceInput2 = document.querySelector('input[name="price2"]');

  priceList.length = 0;
  priceList.push(priceInput1.value);
  priceList.push(priceInput2.value);

  if (priceList[0] !== "" && priceList[1] !== "") {
    priceList.sort(compare);
  }

  let text = setPriceText();
  document.querySelector(".search-select-price").textContent = text;
}
