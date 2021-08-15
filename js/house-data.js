$(document).ready(function () {
  setSearchButtonDom();
  postToSearchHouseData();
});

function setSearchButtonDom() {
  document
    .querySelector(".search-submit-btn")
    .addEventListener("click", handleSearchClick);
}

function handleSearchClick() {
  postToSearchHouseData();
}

function getRangeData(array, type = "string") {
  let range;
  if (type === "string") {
    range = "";
  } else {
    range = [];
  }
  if (array[0] !== undefined) {
    if (type === "string") {
      if (array[0] !== "0") {
        range += array[0];
      }
    } else {
      if (array[0] !== "0") {
        range.push(array[0]);
      } else {
        range.push("");
      }
    }
  }
  if (type === "string") {
    range += ",";
  }
  let length = array.length;
  if (array[length - 1] !== undefined && array[0] !== "max") {
    if (type === "string") {
      range += array[length - 1];
    } else {
      if (array[length - 1] !== "max") {
        range.push(array[length - 1]);
      } else {
        range.push("");
      }
    }
  }
  if (range === ",") return "";
  return range;
}

function postToSearchHouseData() {
  let Price = getRangeData(priceList);
  let Pyeong = getRangeData(areaList);
  let HouseAge = getRangeData(ageList, "array");
  let Floors = getRangeData(floorList, "array");
  let Rooms = getRangeData(roomList, "array");

  let PyeongType =
    document.querySelector("input[name='pyeongType-type']:checked")?.cheked ??
    "";

  let Car = document.querySelector("input[name='car']:checked")?.cheked ?? "";

  let Keywords =
    document.querySelector("input[name='search-text-keywords']")?.value ?? "";

  let houseTypeInputDom = document.querySelectorAll("input[name='houseType']");
  houseTypeInputDom = Array.apply(null, houseTypeInputDom);

  let RoomsSP = document.querySelector("input[name='roomSp']").checked
    ? "true"
    : "false";

  let Top = document.querySelector("input[name='top']").checked
    ? "true"
    : "false";

  let HouseType = houseTypeInputDom
    .filter((input) => {
      if (input.checked) return true;
    })
    .map((item) => item.value);

  let params = {
    City: selectedCity.city ?? "",
    Dist: selectedCity.towns.length > 0 ? selectedCity.towns.join(",") : "",
    Price,
    Pyeong,
    PyeongType,
    SearchFor: getSearchFor(),
    Page: 1,
    Filiter: "",
    Keywords,
    HouseType,
    HouseAge,
    Rooms,
    RoomsSP,
    Floors,
    Car,
    Top,
  };

  fetch("http://localhost:5500/tmpData/data.json", {
    body: JSON.stringify(params),
    method: "POST",
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (myJson) {
      console.log(myJson);
      setHouseDom(myJson);
    });
}

function setHouseDom(data) {
  let ulDom = document.querySelector(".l-item-list");
  let domStr = "";

  data.forEach((item) => {
    domStr += `<li class="m-list-item">
              <a
                href="#"
                class="item-img"
                title="${item.CaseName}"
              >
                <img
                  alt="${item.CaseName}"
                  src="${item.PicUrl}"
                />
              </a>
              <div class="item-info">
                <a
                  href="/house/detail/${item.CaseSID}"
                  target="_blank"
                  class="item-title ng-scope"
                  title="${item.CaseName}"
                >
                  <h3>${item.CaseName}　${item.Address}</h3>
                </a>
                <div class="item-description">
                  ${item.CaseDes}
                </div>
                <ul class="item-info-detail">
                  <li>${item.CaseTypeName}</li>
                  <li>${item.BuildAge}年</li>
                  <li>${item.CaseFromFloor} ~ ${item.CaseToFloor} / ${
      item.UpFloor
    } 樓</li>
                  <li>建物 ${item.RegArea}坪</li>
                  <li>土地 ${item.LandPin}坪</li>
                  <li>
                    <span>主</span>
                    ${item.PorchArea > 0 ? "<span>+ 陽</span>" : ""}
                    ${item.MainArea + item.PorchArea} 坪
                  </li>
                </ul>
                <div class="item-tags">
                  <img
                    src="./images/IStaging2.png"
                    style="position: relative; top: 3px"
                  /><span class="highlight">新上架</span>
                </div>
              </div>
              <div class="item-price">
                <div class="price"><span class="price-num">${
                  item.Price
                }</span> 萬</div>
                <a
                  href="/house/detail/5029520"
                  target="_blank"
                  class="view-map-btn"
                  >地圖街景</a
                >
              </div>
            </li>`;
  });

  ulDom.innerHTML = domStr;
}

function getSearchFor() {
  return document.querySelector(".m-search-for-lists .tab.is-active").dataset
    .tab;
}
