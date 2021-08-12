$(document).ready(function () {
  setHouseDom();
});

function setHouseDom() {
  let ulDom = document.querySelector(".l-item-list");
  let domStr = "";

  data1.forEach((item) => {
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
