let zoneStrArray = [
  `<li data-idx="0">中正區<i></i></li><li data-idx="1">大同區<i></i></li><li data-idx="2">中山區<i></i></li><li data-idx="3">松山區<i></i></li><li data-idx="4">大安區<i></i></li><li data-idx="5">萬華區<i></i></li><li data-idx="6">信義區<i></i></li><li data-idx="7">士林區<i></i></li><li data-idx="8">北投區<i></i></li><li data-idx="9">內湖區<i></i></li><li data-idx="10">南港區<i></i></li><li data-idx="11">文山區<i></i></li>`,
  `<li data-idx="0">萬里區<i></i></li><li data-idx="1">金山區<i></i></li><li data-idx="2">板橋區<i></i></li><li data-idx="3">汐止區<i></i></li><li data-idx="4">深坑區<i></i></li><li data-idx="5">石碇區<i></i></li><li data-idx="6">瑞芳區<i></i></li><li data-idx="7">平溪區<i></i></li><li data-idx="8">雙溪區<i></i></li><li data-idx="9">貢寮區<i></i></li><li data-idx="10">新店區<i></i></li><li data-idx="11">坪林區<i></i></li><li data-idx="12">烏來區<i></i></li><li data-idx="13">永和區<i></i></li><li data-idx="14">中和區<i></i></li><li data-idx="15">土城區<i></i></li><li data-idx="16">三峽區<i></i></li><li data-idx="17">樹林區<i></i></li><li data-idx="18">鶯歌區<i></i></li><li data-idx="19">三重區<i></i></li><li data-idx="20">新莊區<i></i></li><li data-idx="21">泰山區<i></i></li><li data-idx="22">林口區<i></i></li><li data-idx="23">蘆洲區<i></i></li><li data-idx="24">五股區<i></i></li><li data-idx="25">八里區<i></i></li><li data-idx="26">淡水區<i></i></li><li data-idx="27">三芝區<i></i></li><li data-idx="28">石門區<i></i></li>`,
  `<li data-idx="0">仁愛區<i></i></li><li data-idx="1">信義區<i></i></li><li data-idx="2">中正區<i></i></li><li data-idx="3">中山區<i></i></li><li data-idx="4">安樂區<i></i></li><li data-idx="5">暖暖區<i></i></li><li data-idx="6">七堵區<i></i></li>`,
  `<li data-idx="0">南竿鄉<i></i></li><li data-idx="1">北竿鄉<i></i></li><li data-idx="2">莒光鄉<i></i></li><li data-idx="3">東引鄉<i></i></li>`,
  `<li data-idx="0">宜蘭市<i></i></li><li data-idx="1">頭城鎮<i></i></li><li data-idx="2">礁溪鄉<i></i></li><li data-idx="3">壯圍鄉<i></i></li><li data-idx="4">員山鄉<i></i></li><li data-idx="5">羅東鎮<i></i></li><li data-idx="6">三星鄉<i></i></li><li data-idx="7">大同鄉<i></i></li><li data-idx="8">五結鄉<i></i></li><li data-idx="9">冬山鄉<i></i></li><li data-idx="10">蘇澳鎮<i></i></li><li data-idx="11">南澳鄉<i></i></li><li data-idx="12">釣魚台<i></i></li>`,
  `<li data-idx="0">釣魚台<i></i></li>`,
  `<li data-idx="0">東區<i></i></li><li data-idx="1">北區<i></i></li><li data-idx="2">香山區<i></i></li>`,
  `<li data-idx="0">竹北市<i></i></li><li data-idx="1">湖口鄉<i></i></li><li data-idx="2">新豐鄉<i></i></li><li data-idx="3">新埔鎮<i></i></li><li data-idx="4">關西鎮<i></i></li><li data-idx="5">芎林鄉<i></i></li><li data-idx="6">寶山鄉<i></i></li><li data-idx="7">竹東鎮<i></i></li><li data-idx="8">五峰鄉<i></i></li><li data-idx="9">橫山鄉<i></i></li><li data-idx="10">尖石鄉<i></i></li><li data-idx="11">北埔鄉<i></i></li><li data-idx="12">峨眉鄉<i></i></li>`,
  `<li data-idx="0">中壢區<i></i></li><li data-idx="1">平鎮區<i></i></li><li data-idx="2">龍潭區<i></i></li><li data-idx="3">楊梅區<i></i></li><li data-idx="4">新屋區<i></i></li><li data-idx="5">觀音區<i></i></li><li data-idx="6">桃園區<i></i></li><li data-idx="7">龜山區<i></i></li><li data-idx="8">八德區<i></i></li><li data-idx="9">大溪區<i></i></li><li data-idx="10">復興區<i></i></li><li data-idx="11">大園區<i></i></li><li data-idx="12">蘆竹區<i></i></li>`,
  `<li data-idx="1">頭份市<i></i></li><li data-idx="2">三灣鄉<i></i></li><li data-idx="3">南庄鄉<i></i></li><li data-idx="4">獅潭鄉<i></i></li><li data-idx="5">後龍鎮<i></i></li><li data-idx="6">通霄鎮<i></i></li><li data-idx="7">苑裡鎮<i></i></li><li data-idx="8">苗栗市<i></i></li><li data-idx="9">造橋鄉<i></i></li><li data-idx="10">頭屋鄉<i></i></li><li data-idx="11">公館鄉<i></i></li><li data-idx="12">大湖鄉<i></i></li><li data-idx="13">泰安鄉<i></i></li><li data-idx="14">銅鑼鄉<i></i></li><li data-idx="15">三義鄉<i></i></li><li data-idx="16">西湖鄉<i></i></li><li data-idx="17">卓蘭鎮<i></i></li>`,
  `<li data-idx="1">東區<i></i></li><li data-idx="2">南區<i></i></li><li data-idx="3">西區<i></i></li><li data-idx="4">北區<i></i></li><li data-idx="5">北屯區<i></i></li><li data-idx="6">西屯區<i></i></li><li data-idx="7">南屯區<i></i></li><li data-idx="8">太平區<i></i></li><li data-idx="9">大里區<i></i></li><li data-idx="10">霧峰區<i></i></li><li data-idx="11">烏日區<i></i></li><li data-idx="12">豐原區<i></i></li><li data-idx="13">后里區<i></i></li><li data-idx="14">石岡區<i></i></li><li data-idx="15">東勢區<i></i></li><li data-idx="16">和平區<i></i></li><li data-idx="17">新社區<i></i></li><li data-idx="18">潭子區<i></i></li><li data-idx="19">大雅區<i></i></li><li data-idx="20">神岡區<i></i></li><li data-idx="21">大肚區<i></i></li><li data-idx="22">沙鹿區<i></i></li><li data-idx="23">龍井區<i></i></li><li data-idx="24">梧棲區<i></i></li><li data-idx="25">清水區<i></i></li><li data-idx="26">大甲區<i></i></li><li data-idx="27">外埔區<i></i></li><li data-idx="28">大安區<i></i></li>`,
  `<li data-idx="1">芬園鄉<i></i></li><li data-idx="2">花壇鄉<i></i></li><li data-idx="3">秀水鄉<i></i></li><li data-idx="4">鹿港鎮<i></i></li><li data-idx="5">福興鄉<i></i></li><li data-idx="6">線西鄉<i></i></li><li data-idx="7">和美鎮<i></i></li><li data-idx="8">伸港鄉<i></i></li><li data-idx="9">員林市<i></i></li><li data-idx="10">社頭鄉<i></i></li><li data-idx="11">永靖鄉<i></i></li><li data-idx="12">埔心鄉<i></i></li><li data-idx="13">溪湖鎮<i></i></li><li data-idx="14">大村鄉<i></i></li><li data-idx="15">埔鹽鄉<i></i></li><li data-idx="16">田中鎮<i></i></li><li data-idx="17">北斗鎮<i></i></li><li data-idx="18">田尾鄉<i></i></li><li data-idx="19">埤頭鄉<i></i></li><li data-idx="20">溪州鄉<i></i></li><li data-idx="21">竹塘鄉<i></i></li><li data-idx="22">二林鎮<i></i></li><li data-idx="23">大城鄉<i></i></li><li data-idx="24">芳苑鄉<i></i></li><li data-idx="25">二水鄉<i></i></li>`,
  `<li data-idx="1">中寮鄉<i></i></li><li data-idx="2">草屯鎮<i></i></li><li data-idx="3">國姓鄉<i></i></li><li data-idx="4">埔里鎮<i></i></li><li data-idx="5">仁愛鄉<i></i></li><li data-idx="6">名間鄉<i></i></li><li data-idx="7">集集鎮<i></i></li><li data-idx="8">水里鄉<i></i></li><li data-idx="9">魚池鄉<i></i></li><li data-idx="10">信義鄉<i></i></li><li data-idx="11">竹山鎮<i></i></li><li data-idx="12">鹿谷鄉<i></i></li>`,
  `<li data-idx="1">西區<i></i></li>`,
  `<li data-idx="1">梅山鄉<i></i></li><li data-idx="2">竹崎鄉<i></i></li><li data-idx="3">阿里山鄉<i></i></li><li data-idx="4">中埔鄉<i></i></li><li data-idx="5">大埔鄉<i></i></li><li data-idx="6">水上鄉<i></i></li><li data-idx="7">鹿草鄉<i></i></li><li data-idx="8">太保市<i></i></li><li data-idx="9">朴子市<i></i></li><li data-idx="10">東石鄉<i></i></li><li data-idx="11">六腳鄉<i></i></li><li data-idx="12">新港鄉<i></i></li><li data-idx="13">民雄鄉<i></i></li><li data-idx="14">大林鎮<i></i></li><li data-idx="15">溪口鄉<i></i></li><li data-idx="16">義竹鄉<i></i></li><li data-idx="17">布袋鎮<i></i></li>`,
  `<li data-idx="1">大埤鄉<i></i></li><li data-idx="2">虎尾鎮<i></i></li><li data-idx="3">土庫鎮<i></i></li><li data-idx="4">褒忠鄉<i></i></li><li data-idx="5">東勢鄉<i></i></li><li data-idx="6">台西鄉<i></i></li><li data-idx="7">崙背鄉<i></i></li><li data-idx="8">麥寮鄉<i></i></li><li data-idx="9">斗六市<i></i></li><li data-idx="10">林內鄉<i></i></li><li data-idx="11">古坑鄉<i></i></li><li data-idx="12">莿桐鄉<i></i></li><li data-idx="13">西螺鎮<i></i></li><li data-idx="14">二崙鄉<i></i></li><li data-idx="15">北港鎮<i></i></li><li data-idx="16">水林鄉<i></i></li><li data-idx="17">口湖鄉<i></i></li><li data-idx="18">四湖鄉<i></i></li><li data-idx="19">元長鄉<i></i></li>`,
  `<li data-idx="1">東區<i></i></li><li data-idx="2">南區<i></i></li><li data-idx="3">北區<i></i></li><li data-idx="4">安平區<i></i></li><li data-idx="5">安南區<i></i></li><li data-idx="6">永康區<i></i></li><li data-idx="7">歸仁區<i></i></li><li data-idx="8">新化區<i></i></li><li data-idx="9">左鎮區<i></i></li><li data-idx="10">玉井區<i></i></li><li data-idx="11">楠西區<i></i></li><li data-idx="12">南化區<i></i></li><li data-idx="13">仁德區<i></i></li><li data-idx="14">關廟區<i></i></li><li data-idx="15">龍崎區<i></i></li><li data-idx="16">官田區<i></i></li><li data-idx="17">麻豆區<i></i></li><li data-idx="18">佳里區<i></i></li><li data-idx="19">西港區<i></i></li><li data-idx="20">七股區<i></i></li><li data-idx="21">將軍區<i></i></li><li data-idx="22">學甲區<i></i></li><li data-idx="23">北門區<i></i></li><li data-idx="24">新營區<i></i></li><li data-idx="25">後壁區<i></i></li><li data-idx="26">白河區<i></i></li><li data-idx="27">東山區<i></i></li><li data-idx="28">六甲區<i></i></li><li data-idx="29">下營區<i></i></li><li data-idx="30">柳營區<i></i></li><li data-idx="31">鹽水區<i></i></li><li data-idx="32">善化區<i></i></li><li data-idx="33">大內區<i></i></li><li data-idx="34">山上區<i></i></li><li data-idx="35">新市區<i></i></li><li data-idx="36">安定區<i></i></li>`,
  `<li data-idx="1">前金區<i></i></li><li data-idx="2">苓雅區<i></i></li><li data-idx="3">鹽埕區<i></i></li><li data-idx="4">鼓山區<i></i></li><li data-idx="5">旗津區<i></i></li><li data-idx="6">前鎮區<i></i></li><li data-idx="7">三民區<i></i></li><li data-idx="8">楠梓區<i></i></li><li data-idx="9">小港區<i></i></li><li data-idx="10">左營區<i></i></li><li data-idx="11">仁武區<i></i></li><li data-idx="12">大社區<i></i></li><li data-idx="13">岡山區<i></i></li><li data-idx="14">路竹區<i></i></li><li data-idx="15">阿蓮區<i></i></li><li data-idx="16">田寮區<i></i></li><li data-idx="17">燕巢區<i></i></li><li data-idx="18">橋頭區<i></i></li><li data-idx="19">梓官區<i></i></li><li data-idx="20">彌陀區<i></i></li><li data-idx="21">永安區<i></i></li><li data-idx="22">湖內區<i></i></li><li data-idx="23">鳳山區<i></i></li><li data-idx="24">大寮區<i></i></li><li data-idx="25">林園區<i></i></li><li data-idx="26">鳥松區<i></i></li><li data-idx="27">大樹區<i></i></li><li data-idx="28">旗山區<i></i></li><li data-idx="29">美濃區<i></i></li><li data-idx="30">六龜區<i></i></li><li data-idx="31">內門區<i></i></li><li data-idx="32">杉林區<i></i></li><li data-idx="33">甲仙區<i></i></li><li data-idx="34">桃源區<i></i></li><li data-idx="35">那瑪夏區<i></i></li><li data-idx="36">茂林區<i></i></li><li data-idx="37">茄萣區<i></i></li>`,
  `<li data-idx="1">南沙<i></i></li>`,
  `<li data-idx="1">西嶼鄉<i></i></li><li data-idx="2">望安鄉<i></i></li><li data-idx="3">七美鄉<i></i></li><li data-idx="4">白沙鄉<i></i></li><li data-idx="5">湖西鄉<i></i></li>`,
  `<li data-idx="1">金湖鎮<i></i></li><li data-idx="2">金寧鄉<i></i></li><li data-idx="3">金城鎮<i></i></li><li data-idx="4">烈嶼鄉<i></i></li><li data-idx="5">烏坵鄉<i></i></li>`,
  `<li data-idx="1">三地門鄉<i></i></li><li data-idx="2">霧台鄉<i></i></li><li data-idx="3">瑪家鄉<i></i></li><li data-idx="4">九如鄉<i></i></li><li data-idx="5">里港鄉<i></i></li><li data-idx="6">高樹鄉<i></i></li><li data-idx="7">鹽埔鄉<i></i></li><li data-idx="8">長治鄉<i></i></li><li data-idx="9">麟洛鄉<i></i></li><li data-idx="10">竹田鄉<i></i></li><li data-idx="11">內埔鄉<i></i></li><li data-idx="12">萬丹鄉<i></i></li><li data-idx="13">潮州鎮<i></i></li><li data-idx="14">泰武鄉<i></i></li><li data-idx="15">來義鄉<i></i></li><li data-idx="16">萬巒鄉<i></i></li><li data-idx="17">崁頂鄉<i></i></li><li data-idx="18">新埤鄉<i></i></li><li data-idx="19">南州鄉<i></i></li><li data-idx="20">林邊鄉<i></i></li><li data-idx="21">東港鎮<i></i></li><li data-idx="22">琉球鄉<i></i></li><li data-idx="23">佳冬鄉<i></i></li><li data-idx="24">新園鄉<i></i></li><li data-idx="25">枋寮鄉<i></i></li><li data-idx="26">枋山鄉<i></i></li><li data-idx="27">春日鄉<i></i></li><li data-idx="28">獅子鄉<i></i></li><li data-idx="29">車城鄉<i></i></li><li data-idx="30">牡丹鄉<i></i></li><li data-idx="31">恆春鎮<i></i></li><li data-idx="32">滿州鄉<i></i></li>`,
  `<li data-idx="1">綠島鄉<i></i></li><li data-idx="2">蘭嶼鄉<i></i></li><li data-idx="3">延平鄉<i></i></li><li data-idx="4">卑南鄉<i></i></li><li data-idx="5">鹿野鄉<i></i></li><li data-idx="6">關山鎮<i></i></li><li data-idx="7">海端鄉<i></i></li><li data-idx="8">池上鄉<i></i></li><li data-idx="9">東河鄉<i></i></li><li data-idx="10">成功鎮<i></i></li><li data-idx="11">長濱鄉<i></i></li><li data-idx="12">太麻里鄉<i></i></li><li data-idx="13">金峰鄉<i></i></li><li data-idx="14">大武鄉<i></i></li><li data-idx="15">達仁鄉<i></i></li>`,
  `<li data-idx="1">新城鄉<i></i></li><li data-idx="2">秀林鄉<i></i></li><li data-idx="3">吉安鄉<i></i></li><li data-idx="4">壽豐鄉<i></i></li><li data-idx="5">鳳林鎮<i></i></li><li data-idx="6">光復鄉<i></i></li><li data-idx="7">豐濱鄉<i></i></li><li data-idx="8">瑞穗鄉<i></i></li><li data-idx="9">萬榮鄉<i></i></li><li data-idx="10">玉里鎮<i></i></li><li data-idx="11">卓溪鄉<i></i></li><li data-idx="12">富里鄉<i></i></li>`,
];

$(document).ready(function () {
  setSearchTypeOptionEvent();
  setChangeDistrictFilterEvent();
  setClickDistrictEvent();
  setClickZoneEvent();
  setHouseTypeEvent();
  setRangeEvent();
  setPyeongTypeEvent();
  setMoreOptionEvent();
});

function getSearchTypeOption() {
  let nodeList = document.querySelectorAll("div[data-name='searchMode'] li");
  return Array.apply(null, nodeList);
}

function setSearchTypeOptionEvent() {
  getSearchTypeOption().forEach((item) => {
    item.addEventListener("click", handleClickSearchTypeOption);
  });
}

function handleClickSearchTypeOption(e) {
  if (e.target.dataset.searchMode === "region") {
    document.querySelector("div .cont").textContent = "區域找";
    document
      .querySelector("div[data-name='searchMode'] li[data-searcg-for='region']")
      .classList.add("is-active");
    document
      .querySelector("div[data-name='searchMode'] li[data-searcg-for='num']")
      .classList.remove("is-active");
  } else if (e.target.dataset.searchMode === "num") {
    document.querySelector("div .cont").textContent = "物件編號找";
    document
      .querySelector("div[data-name='searchMode'] li[data-search-for='region']")
      .classList.remove("is-active");
    document
      .querySelector(
        "div[data-name='searchMode'] li[data-search                                                                                                                                                                                            -for='num']"
      )
      .classList.add("is-active");
  }
}

function setChangeDistrictFilterEvent() {
  document
    .querySelector("div[data-name='zone'] .city .close")
    .addEventListener("click", clickDistrictFilter);
}

function clickDistrictFilter() {
  let district = document.querySelector("div[data-name='district']");
  let zone = document.querySelector("div[data-name='zone']");

  district.classList.add("is-active");
  district.querySelector("p").classList.add("is-active");
  district.querySelector(".item").classList.add("is-active");
  district.style.display = "block";

  zone.classList.remove("is-active");
  zone.style.display = "none";
}

function getDistricts() {
  let nodeList = document.querySelectorAll("div[data-name='district'] .col li");
  return Array.apply(null, nodeList);
}

function setClickDistrictEvent() {
  let districts = getDistricts();
  districts.forEach((item) => {
    item.addEventListener("click", handleClickDistrict);
  });
}

function handleClickDistrict(e) {
  let districtName = e.target.textContent;
  let districtIndex = e.target.dataset.idx;
  let districts = getDistricts();

  document.querySelector("[data-name='district'] p > span.tit").textContent =
    districtName + "全區";
  document.querySelector("[data-name='zone'] p > span.tit").textContent =
    districtName + "全區";
  document.querySelector("[data-name='zone'] .item .city-name").textContent =
    districtName;

  document.querySelector("div[data-name='zone']>.item .col").innerHTML =
    zoneStrArray[districtIndex];
  districts.forEach((item) => {
    item.classList.remove("is-active");
  });

  districts[districtIndex].classList.add("is-active");

  let district = document.querySelector("div[data-name='district']");
  let zone = document.querySelector("div[data-name='zone']");

  zone.classList.add("is-active");
  zone.querySelector("p").classList.add("is-active");
  zone.querySelector(".item").classList.add("is-active");
  zone.style.display = "block";

  district.classList.remove("is-active");
  district.style.display = "none";

  setClickZoneEvent();
  document
    .querySelector("div[data-name='zone'] .all")
    .classList.add("is-active");

  setDistrictAndZoneText();
}

function getZones() {
  let nodeList = document.querySelectorAll("div[data-name='zone'] .col li");
  return Array.apply(null, nodeList);
}

function setClickZoneEvent() {
  let zones = getZones();
  zones.forEach((item) => {
    item.addEventListener("click", handleClickZone);
  });

  document
    .querySelector("div[data-name='zone'] .all")
    .addEventListener("click", handleClickAllZone);
}

function handleClickZone(e) {
  e.target.classList.toggle("is-active");
  if (e.target.classList.contains("is-active")) {
    document
      .querySelector("div[data-name='zone'] .all")
      .classList.remove("is-active");
  } else if (
    !getZones().some((item) => {
      return item.classList.contains("is-active");
    })
  ) {
    document
      .querySelector("div[data-name='zone'] .all")
      .classList.add("is-active");
  }
  setDistrictAndZoneText();
}

function handleClickAllZone(e) {
  let zones = getZones();
  zones.forEach((item) => {
    item.classList.remove("is-active");
  });

  document
    .querySelector("div[data-name='zone'] .all")
    .classList.add("is-active");

  setDistrictAndZoneText();
}

function setDistrictAndZoneText() {
  let text = document.querySelector(
    "div[data-name='zone'] .city-name"
  ).textContent;

  let selectedZones = querySelectorAllArray(
    "div[data-name='zone'] .col li.is-active"
  );
  if (selectedZones.length > 0) {
    text += "-" + selectedZones.map((item) => item.textContent).join(",");
  } else {
    text += "全區";
  }
  document.querySelector("[data-name='zone'] p > span.tit").textContent = text;
}

function getHouseTypes() {
  let nodeList = document.querySelectorAll("div[data-name='houseType'] ul li");
  return Array.apply(null, nodeList);
}

function setHouseTypeEvent() {
  let houseTypes = getHouseTypes();
  houseTypes.forEach((item) => {
    item.addEventListener("click", handleClickHouseType);
  });
}

function handleClickHouseType(e) {
  let target = e.target;
  while (target.tagName !== "LI") {
    target = target.parentNode;
  }
  if (target.classList.contains("all")) {
    getHouseTypes().forEach((item) => {
      item.classList.remove("is-active");
    });
    target.classList.add("is-active");
  } else {
    target.classList.toggle("is-active");
    if (target.classList.contains("is-active")) {
      document
        .querySelector("div[data-name='houseType'] ul li.all")
        .classList.remove("is-active");
    } else if (
      !getHouseTypes().some((item) => {
        return item.classList.contains("is-active");
      })
    ) {
      document
        .querySelector("div[data-name='houseType'] ul li.all")
        .classList.add("is-active");
    }
  }
  setHouseTypeText();
}

function setHouseTypeText() {
  let text = "";

  let selected = querySelectorAllArray(
    "div[data-name='houseType'] li.is-active .type-name"
  );
  if (selected.length > 0) {
    text = selected.map((item) => item.textContent).join(",");
  }
  console.log(text);
  document.querySelector("[data-name='houseType'] .cont").textContent = text;
}

function setRangeEvent() {
  let inputs = querySelectorAllArray(
    "[data-name='price'] input[type='tel'], [data-name='houseRoom'] input[type='tel'], [data-name='ping'] input[type='tel'], [data-name='houseYear'] input[type='tel'], [data-name='houseFloor'] input[type='tel']"
  );
  inputs.forEach((item) => {
    item.addEventListener("change", handleChangeRangeInput);
  });
}

function handleChangeRangeInput(e) {
  setRangeText(e.target.dataset.type);
}

function setRangeText(type) {
  let text = "";
  let unit = {
    price: "萬",
    houseRoom: "房",
    ping: "坪",
    houseYear: "年",
    houseFloor: "樓",
  };
  if (type === "ping") {
    text +=
      document.querySelector("[data-name='ping'] ul li.is-active").textContent +
      " ";
  }
  let inputs = querySelectorAllArray(`[data-name='${type}'] input[type='tel']`);
  if (inputs[0].value !== "" && inputs[1].value !== "") {
    if (Number(inputs[0].value) < Number(inputs[1].value)) {
      text += `${inputs[0].value}${unit[type]} - ${inputs[1].value}${unit[type]}`;
    } else {
      text += `${inputs[1].value}${unit[type]} - ${inputs[0].value}${unit[type]}`;
    }
  } else if (inputs[0].value !== "") {
    text += `${inputs[0].value}${unit[type]}以上`;
  } else if (inputs[1].value !== "") {
    text += `${inputs[1].value}${unit[type]}以下`;
  } else {
    text += "不限";
  }
  document.querySelector(`[data-name='${type}'] .cont`).textContent = text;
}

function setPyeongTypeEvent() {
  querySelectorAllArray("[data-name='ping'] ul li").forEach((item) => {
    item.addEventListener("click", handleClickPyeongType);
  });
}

function handleClickPyeongType(e) {
  let pyeongTypes = querySelectorAllArray("[data-name='ping'] ul li");
  pyeongTypes.forEach((item) => {
    item.classList.remove("is-active");
  });

  let target = e.target;
  while (target.tagName !== "LI") {
    target = target.parentNode;
  }

  target.classList.add("is-active");

  setRangeText("ping");
}

function setMoreOptionEvent() {
  let options = querySelectorAllArray(
    "[data-name='purpose'] .item ul li, [data-name='parkingType'] .item ul li, [data-name='position'] .item ul li, [data-name='around'] .item ul li, [data-name='featured'] .item ul li"
  );

  options.forEach((item) => {
    item.addEventListener("click", handleMoreOption);
  });
}

function handleMoreOption(e) {
  let typeDiv = e.target;
  while (typeDiv.dataset.name === undefined) {
    typeDiv = typeDiv.parentNode;
  }
  let type = typeDiv.dataset.name;

  let options = querySelectorAllArray(`[data-name='${type}'] .item ul li`);
  if (e.target.classList.contains("all")) {
    options.forEach((item) => {
      item.classList.remove("is-active");
    });
    e.target.classList.add("is-active");
  } else {
    e.target.classList.toggle("is-active");
    if (e.target.classList.contains("is-active")) {
      document
        .querySelector(`[data-name='${type}'] .item ul li.all`)
        .classList.remove("is-active");
    } else if (!options.some((item) => item.classList.contains("is-active"))) {
      document
        .querySelector(`[data-name='${type}'] .item ul li.all`)
        .classList.add("is-active");
    }
  }
}

function querySelectorAllArray(string) {
  let nodeList = document.querySelectorAll(string);
  return Array.apply(null, nodeList);
}
