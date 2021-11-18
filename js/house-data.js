$(document).ready(function () {
  setSearchButtonDom();
  postToSearchHouseData();
  getHouseCategory();
  setPagination();
});

let totalPage = 0;
let currentPage = 1;
let categories = [];

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
      range += array[0];
    } else {
      range.push(array[0]);
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
      range.push(array[length - 1]);
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
    document.querySelector("input[name='pyeongType-type']:checked")?.value ??
    "";

  let Car = document.querySelector("input[name='car']:checked")?.value ?? "";

  let Keywords =
    document.querySelector("input[name='search-text-keywords']")?.value ?? "";

  let houseTypeInputDom = document.querySelectorAll("input[name='houseType']");
  houseTypeInputDom = Array.apply(null, houseTypeInputDom);

  let RoomsSP = document.querySelector("input[name='roomSp']")?.checked
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
    Page: currentPage,
    Keywords,
    HouseType,
    HouseAge,
    Rooms,
    RoomsSP,
    Floors,
    Car,
    Top,
    Sort: listSort,
    Filter: listFilter,
  };

  fetch("http://localhost:5500/tmpData/data.json", {
    body: JSON.stringify(params),
    method: "POST",
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (myJson) {
      setHouseDom(myJson.data);
      totalPage = myJson.totalPage;
      setPagination();
    });
}

function setHouseDom(data) {
  let ulDom = document.querySelector(".l-item-list");
  let domStr = "";

  data.forEach((item) => {
    domStr += `<li class="m-list-item">
              <a
                href="javascript:void(0)"
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
                  class="item-title"
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

function setPagination() {
  let disablePrev = currentPage === 1 ? "disabled" : "";
  let disableNext = currentPage === totalPage ? "disabled" : "";
  let domString = `
<li class="pagination-prev ${disablePrev}">
  <span data-page="${currentPage - 1}">&lt;</span>
</li>`;
  if (currentPage <= 6) {
    for (let i = 1; i <= totalPage && i <= 10; i++) {
      let active = "";
      if (i === currentPage) {
        active = "active";
      }
      domString += `<li class="pagination-page ${active}">
      <span data-page="${i}">${i}</span>
    </li>`;
    }
  } else if (currentPage + 4 <= totalPage) {
    for (let i = currentPage - 5; i <= currentPage + 4; i++) {
      let active = "";
      if (i === currentPage) {
        active = "active";
      }
      domString += `<li class="pagination-page ${active}">
      <span data-page="${i}">${i}</span>
    </li>`;
    }
  } else {
    let prevCount = 9 - (totalPage - currentPage);
    for (let i = currentPage - prevCount; i <= totalPage; i++) {
      let active = "";
      if (i === currentPage) {
        active = "active";
      }
      domString += `<li class="pagination-page ${active}">
      <span data-page="${i}">${i}</span>
    </li>`;
    }
  }

  domString += `
<li class="pagination-next ${disableNext}">
  <span data-page="${currentPage + 1}">&gt;</span>
</li>`;

  document.querySelector("ul.pagination").innerHTML = domString;

  let pageDoms = getPageButtonDom();
  pageDoms.forEach((item) => {
    item.addEventListener("click", clickPage);
  });
}

function getPageButtonDom() {
  let pageDoms = document.querySelectorAll("ul.pagination li");
  return Array.apply(null, pageDoms);
}

function clickPage(e) {
  let page = Number(e.target.dataset.page);
  if (page < 1 || page > totalPage) {
    return;
  }
  currentPage = Number(e.target.dataset.page);

  setPagination();
  postToSearchHouseData();
}

function getHouseCategory() {
  fetch("http://168.odin-eye.com/product/category_name", {
    method: "GET",
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (myJson) {
      categories = myJson;
      setCategoryDom();
    });
}

function setCategoryDom() {
  let domStr = `<li class="tab is-active" data-tab="all">全部用途</li>`;
  categories.forEach((item) => {
    domStr += `<li class="tab" data-tab="${item.id}">${item.name}</li>`;
  });
  document.querySelector(".m-search-for-lists").innerHTML = domStr;
  setTabEvent();
}
