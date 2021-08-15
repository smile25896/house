let roomList = [];

$(document).ready(function () {
  setRoomCheckboxesEvent();
  setRoomInputEvent();
  setTopRoomSpEvent();
});

function compare(a, b) {
  if (a === "max") return 1;
  if (b === "max") return -1;
  return Number(a) - Number(b);
}

function setRoomCheckboxesEvent() {
  let roomCheckboxes = getRoomCheckboxes();

  roomCheckboxes.forEach((item) => {
    item.addEventListener("click", handleClickChangeRoomCheckbox);
  });
}

function getRoomCheckboxes() {
  let roomCheckboxes = document.querySelectorAll(
    'input[name="search-select-option-room"'
  );
  return Array.apply(null, roomCheckboxes);
}

function handleClickChangeRoomCheckbox(e) {
  document.querySelector('input[name="room1"]').value = "";
  document.querySelector('input[name="room2"]').value = "";

  setRoomList(e.target);
  let roomCheckboxes = getRoomCheckboxes();
  if (e.target.value === "unlimit" && e.target.checked) {
    roomCheckboxes.slice(1).forEach((item) => {
      item.checked = false;
    });
  } else if (e.target.value === "unlimit" && !e.target.checked) {
    e.target.checked = true;
  } else if (roomCheckboxes[0].checked) {
    roomCheckboxes[0].checked = false;
  }
}

function setRoomList(target, needCheckMiddle = true) {
  let { value, checked } = target;
  if (value === "unlimit") {
    roomList.length = 0;
  } else if (checked) {
    let room = value.split("-");
    roomList.push(room[0]);
    roomList.push(room[1]);
    roomList = roomList.filter(function (item, pos, self) {
      return self.indexOf(item) == pos;
    });
    roomList = roomList.sort(compare);

    if (needCheckMiddle) {
      checkedMiddleRoom(roomList[0], roomList[roomList.length - 1]);
    }
  } else {
    let count = 0;

    let roomCheckboxes = getRoomCheckboxes();
    for (let i = 1; i < roomCheckboxes.length; i++) {
      if (roomCheckboxes[i].checked) {
        count++;
      }
    }
    let room = value.split("-");
    if (count < 1) {
      roomList.length = 0;
    } else {
      if (room[0] === roomList[0]) {
        roomList.splice(0, 1);
      } else if (room[1] === roomList[roomList.length - 1]) {
        roomList.pop();
      } else {
        roomList = room;
        roomCheckboxes.forEach((item) => {
          item.checked = false;
        });
        target.checked = true;
      }
    }
  }
  setFilterCount();
}

function checkedMiddleRoom(minRoom, maxRoom) {
  let roomCheckboxes = getRoomCheckboxes();
  roomCheckboxes = roomCheckboxes.slice(2);
  roomCheckboxes.pop();
  roomCheckboxes.forEach((item) => {
    let room = item.value.split("-");
    if (
      Number(room[0]) > minRoom &&
      (maxRoom === "max" || Number(room[1]) < maxRoom)
    ) {
      item.checked = true;
      setRoomList(item, false);
    }
  });
}

function setRoomInputEvent() {
  let roomInput1 = document.querySelector('input[name="room1"]');
  let roomInput2 = document.querySelector('input[name="room2"]');

  roomInput1.addEventListener("input", handleInputRoom);
  roomInput2.addEventListener("input", handleInputRoom);

  roomInput1.addEventListener("change", handleChangeRoom);
  roomInput2.addEventListener("change", handleChangeRoom);
}

function handleInputRoom(e) {
  let roomCheckboxes = getRoomCheckboxes();
  roomCheckboxes.forEach((item) => {
    item.checked = false;
  });
}

function handleChangeRoom(e) {
  let roomInput1 = document.querySelector('input[name="room1"]');
  let roomInput2 = document.querySelector('input[name="room2"]');

  roomList.length = 0;
  roomList.push(roomInput1.value);
  roomList.push(roomInput2.value);

  if (roomList[0] !== "" && roomList[1] !== "") {
    roomList.sort(compare);
  }

  setFilterCount();
}

function setTopRoomSpEvent() {
  document
    .querySelector("input[name='roomSp']")
    .addEventListener("change", handleChangeRoomSp);
}

function handleChangeRoomSp() {
  setFilterCount();
}
