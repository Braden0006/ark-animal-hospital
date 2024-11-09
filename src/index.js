let modalBackground = document.getElementById("modal_background");
let modal = document.getElementById("modal");
let card1 = document.getElementById("card1");
let card2 = document.getElementById("card2");
let card3 = document.getElementById("card3");
let body = document.getElementById("body");
let modalTitle = document.getElementById("modal_title");
let modalPara = document.getElementById("modal_para");

let bar1 = document.getElementById("bar-1");
let bar2 = document.getElementById("bar-2");
let bar3 = document.getElementById("bar-3");
let menu = document.getElementById("ham-menu");
let dropdownMenu = document.getElementById("dropdown-menu");

let mobileLink = document.getElementsByClassName("navbar_mobile_dropdown_link");

function cardClicked() {
    modalBackground.classList.add("show_modal_background");
    modal.classList.add("show_modal");
    body.classList.add("stop_scrolling");

    modalTitle.innerHTML = "Sam";
    modalPara.innerHTML = "" +
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n" +
        "Quisque consequat, justo nec gravida auctor, sem velit vehicula\n" +
        "augue, id rhoncus lectus elit vel elit. Sed accumsan fermentum\n" +
        "sem, vel fringilla lacus pulvinar non."
}

function card2Clicked() {
    modalBackground.classList.add("show_modal_background");
    modal.classList.add("show_modal");
    body.classList.add("stop_scrolling");

    modalTitle.innerHTML = "Andrew";
    modalPara.innerHTML = "" +
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n" +
        "Quisque consequat, justo nec gravida auctor, sem velit vehicula\n" +
        "augue, id rhoncus lectus elit vel elit. Sed accumsan fermentum\n" +
        "sem, vel fringilla lacus pulvinar non."
}

function card3Clicked() {
    modalBackground.classList.add("show_modal_background");
    modal.classList.add("show_modal");
    body.classList.add("stop_scrolling");

    modalTitle.innerHTML = "Allison";
    modalPara.innerHTML = "" +
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n" +
        "Quisque consequat, justo nec gravida auctor, sem velit vehicula\n" +
        "augue, id rhoncus lectus elit vel elit. Sed accumsan fermentum\n" +
        "sem, vel fringilla lacus pulvinar non."
}

function hideModal() {
    modalBackground.classList.remove("show_modal_background");
    modal.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

card1.addEventListener("click", cardClicked);
modal.addEventListener("click", hideModal);

if (card1.addEventListener) {
    card1.addEventListener("click", cardClicked);
}

if (card2.addEventListener) {
    card2.addEventListener("click", card2Clicked);
}

if (card3.addEventListener) {
    card3.addEventListener("click", card3Clicked);
}

menu.addEventListener("click", () => {
    body.classList.toggle("stop_scrolling");

    bar1.classList.toggle("bar-1");
    bar2.classList.toggle("bar-2");
    bar3.classList.toggle("bar-3");

    dropdownMenu.classList.toggle("navbar_mobile_dropdown_show");
});

for (let i = 0; i < mobileLink.length; i++) {
    mobileLink[i].addEventListener("click", () => {
        body.classList.toggle("stop_scrolling");

        bar1.classList.toggle("bar-1");
        bar2.classList.toggle("bar-2");
        bar3.classList.toggle("bar-3");

        dropdownMenu.classList.toggle("navbar_mobile_dropdown_show");
    })
}