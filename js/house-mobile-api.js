$(document).ready(function () {
  postToSearchHouseData();
  // loadMoreData();
  document
    .querySelector("#search-button")
    .addEventListener("click", postToSearchHouseData);
});

let totalPage = 0;
let globalPage = 1;
let isLoadingMore = false;

function postToSearchHouseData() {
  fetch("http://localhost:5500/tmpData/data.json?page=" + globalPage, {
    // body: { page, ...JSON.stringify(getApiParams()) },
    // method: "POST",
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (myJson) {
      setHouseDom(myJson.data);
      totalPage = myJson.totalPage;
      isLoadingMore = false;
      setPagination();
    });
}

function getApiParams() {
  let data = {};
  data.SearchMode = document.querySelector(
    "div[data-name='searchMode'] li.is-active"
  ).dataset.searchMode;

  data.City = document.querySelector(
    "div[data-name='zone'] li.city .city-name"
  ).textContent;

  data.Dist = getMoreOptionValue("div[data-name='zone'] .col li.is-active");

  data.Price = getRangeValue("price");
  data.HouseType = getMoreOptionValue(
    "div[data-name='houseType'] ul li.is-active .type-name"
  );
  dataPyeongType = document.querySelector("[data-name='ping'] ul li.is-active")
    .dataset.idx;

  data.Keywords = document.querySelector("[data-name='keyword'] input").value;

  data.Rooms = getRangeValue("houseRoom");
  data.Pyeong = getRangeValue("ping");

  data.Purpose = getMoreOptionValue(
    "div[data-name='purpose'] ul li.is-active",
    true
  );

  data.HouseAge = getRangeValue("houseYear");
  data.PreSale = document.querySelector(
    "[data-name='houseYear'] input[name='preSale']"
  ).checked;

  let isFloor0 = document.querySelector("#checkhouseFloor0").checked;
  data.Floors = getRangeValue("houseFloor", { min: isFloor0 ? "0" : "1" });

  data.Top = document.querySelector("#checkhouseFloor1").checked;

  data.ParkingType = getMoreOptionValue(
    "div[data-name='parkingType'] ul li.is-active",
    true
  );

  data.position = getMoreOptionValue(
    "div[data-name='position'] ul li.is-active",
    true
  );

  data.around = getMoreOptionValue(
    "div[data-name='around'] ul li.is-active",
    true
  );

  data.featured = getMoreOptionValue(
    "div[data-name='featured'] ul li.is-active",
    true
  );
  return data;
}

function getRangeValue(type, defaultValue = {}) {
  let range = querySelectorAllArray(
    `[data-name='${type}'] input[type='tel']`
  ).map((item) => item.value);
  if (range[0] !== "" && range[1] !== "") {
    if (Number(range[0]) > Number(range[1])) {
      let tmp = range[0];
      range[0] = range[1];
      range[1] = tmp;
    }
  } else {
    if (range[0] === "") {
      range[0] = defaultValue.min ?? "0";
    }
    if (range[1] === "") {
      range[1] = defaultValue.max ?? "max";
    }
  }
  return range.join(",");
}

function getMoreOptionValue(str, removeSpace) {
  let selectedOptions = querySelectorAllArray(str)
    .map((item) => {
      if (removeSpace) {
        return item.textContent.replace(/[\n\r]+|[\s]{2,}/g, "").trim();
      } else {
        return item.textContent;
      }
    })
    .join(",");
  if (selectedOptions !== "??????") {
    return selectedOptions;
  }
  return "";
}

function setHouseDom(data) {
  let ulDom = document.querySelector(".m-list-buy ul");
  let domStr = "";

  data.forEach((item) => {
    let roomStr = `${
      item.Room !== undefined && item.Room > 0 ? `${item.Room}???(???)` : ""
    }${
      item.LivingRoom !== undefined && item.LivingRoom > 0
        ? `${item.LivingRoom}???`
        : ""
    }${
      item.BathRoom != undefined && item.BathRoom > 0
        ? `${item.BathRoom}???`
        : ""
    }`;
    domStr += `
    <li class="m-house brand-ut">
          <a class="ga_click_popup" href="/house/detail/${item.CaseSID}" data-href="buyDetail"
            ><figure>
              <img
                src="${item.PicUrl}"
              /><i class="is-vr"></i
              ><m-favorite
                data-id="${item.CaseKey}"
              ></m-favorite>
            </figure>
            <div class="b-house">
              <i class="is-vr"></i>
              <div class="b-house-block">
                <div class="b-house-title">${item.CaseName}</div>
                <address class="b-house-addr">${item.Address}</address>
                <div class="b-house-price"><span>${item.Price}???</span></div>
              </div>
              <div class="b-house-info">
                <span>${item.RegArea}???</span><span>${roomStr}</span
                ><span class="floor">${item.BuildAge}???</span>
              </div>
            </div></a
          >
        </li>`;
  });

  ulDom.innerHTML = domStr;
}

function setPagination() {
  let disablePrev = globalPage === 1 ? "disabled" : "";
  let domString = `
<li class="pagination-prev ${disablePrev}">
  <span data-page="${globalPage - 1}">&lt;</span>
</li>`;
  if (globalPage <= 3) {
    for (let i = 1; i <= totalPage && i <= 5; i++) {
      let active = "";
      if (i === globalPage) {
        active = "active";
      }
      domString += `<li class="pagination-page ${active}">
      <span data-page="${i}">${i}</span>
    </li>`;
    }
  } else if (globalPage + 2 <= totalPage) {
    for (let i = globalPage - 2; i <= globalPage + 2; i++) {
      let active = "";
      if (i === globalPage) {
        active = "active";
      }
      domString += `<li class="pagination-page ${active}">
      <span data-page="${i}">${i}</span>
    </li>`;
    }
  } else {
    let prevCount = 4 - (totalPage - globalPage);
    for (let i = globalPage - prevCount; i <= totalPage; i++) {
      let active = "";
      if (i === globalPage) {
        active = "active";
      }
      domString += `<li class="pagination-page ${active}">
      <span data-page="${i}">${i}</span>
    </li>`;
    }
  }
  let disableNext = globalPage === totalPage ? "disabled" : "";

  domString += `
<li class="pagination-next ${disableNext}">
  <span data-page="${globalPage + 1}">&gt;</span>
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
  globalPage = Number(e.target.dataset.page);

  console.log(globalPage);

  setPagination();
  postToSearchHouseData();
}

// function loadMoreData() {
//   // we will add this content, replace for anything you want to add
//   var more = '<div style="height: 1000px; background: #EEE;"></div>';

//   var wrapper = document;
//   var content = document.querySelector(".m-list-buy ul");
//   // var test = document.getElementById("test");
//   content.innerHTML = more;

//   // cross browser addEvent, today you can safely use just addEventListener
//   function addEvent(obj, ev, fn) {
//     if (obj.addEventListener) obj.addEventListener(ev, fn, false);
//     else if (obj.attachEvent) obj.attachEvent("on" + ev, fn);
//   }

//   // this is the scroll event handler
//   function scroller() {
//     // print relevant scroll info
//     // test.innerHTML =
//     //   wrapper.scrollTop +
//     //   "+" +
//     //   wrapper.offsetHeight +
//     //   "+100>" +
//     //   content.offsetHeight;

//     // add more contents if user scrolled down enough
//     if (
//       wrapper.querySelector("html").scrollTop + 1000 > content.offsetHeight &&
//       !isLoadingMore &&
//       totalPage >= globalPage + 1
//     ) {
//       postToSearchHouseData(globalPage + 1);
//       isLoadingMore = true;
//     }
//   }

//   // hook the scroll handler to scroll event
//   addEvent(wrapper, "scroll", scroller);
// }
