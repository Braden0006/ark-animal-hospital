let modalBackground = document.getElementById("modal_background");
let card1 = document.getElementById("card1");
let card2 = document.getElementById("card2");
let card3 = document.getElementById("card3");
let card4 = document.getElementById("card4");
let card5 = document.getElementById("card5");
let card6 = document.getElementById("card6");
let card7 = document.getElementById("card7");

let body = document.getElementById("body");

let modal = document.getElementById("modal");
let modal2 = document.getElementById("modal2");
let modal3 = document.getElementById("modal3");
let modal4 = document.getElementById("modal4");
let modal5 = document.getElementById("modal5");
let modal6 = document.getElementById("modal6");
let modal7 = document.getElementById("modal7");

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
}

function card2Clicked() {
    modalBackground.classList.toggle("show_modal_background");
    modal2.classList.toggle("show_modal");
    body.classList.toggle("stop_scrolling");
}

function card3Clicked() {
    modalBackground.classList.add("show_modal_background");
    modal3.classList.add("show_modal");
    body.classList.add("stop_scrolling");
}

function card4Clicked() {
    modalBackground.classList.add("show_modal_background");
    modal4.classList.add("show_modal");
    body.classList.add("stop_scrolling");
}

function card5Clicked() {
    modalBackground.classList.add("show_modal_background");
    modal5.classList.add("show_modal");
    body.classList.add("stop_scrolling");
}

function card6Clicked() {
    modalBackground.classList.add("show_modal_background");
    modal6.classList.add("show_modal");
    body.classList.add("stop_scrolling");
}

function card7Clicked() {
    modalBackground.classList.add("show_modal_background");
    modal7.classList.add("show_modal");
    body.classList.add("stop_scrolling");
}

function hideModal() {
    modalBackground.classList.remove("show_modal_background");
    modal.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

function hideModal2() {
    modalBackground.classList.remove("show_modal_background");
    modal2.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

function hideModal3() {
    modalBackground.classList.remove("show_modal_background");
    modal3.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

function hideModal4() {
    modalBackground.classList.remove("show_modal_background");
    modal4.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

function hideModal5() {
    modalBackground.classList.remove("show_modal_background");
    modal5.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

function hideModal6() {
    modalBackground.classList.remove("show_modal_background");
    modal6.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

function hideModal7() {
    modalBackground.classList.remove("show_modal_background");
    modal7.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

if (card1.addEventListener) {
    card1.addEventListener("click", cardClicked);
    modal.addEventListener("click", hideModal);
}

if (card2.addEventListener) {
    card2.addEventListener("click", card2Clicked);
    modal2.addEventListener("click", hideModal2);
}

if (card3.addEventListener) {
    card3.addEventListener("click", card3Clicked);
    modal3.addEventListener("click", hideModal3);
}

if (card4.addEventListener) {
    card4.addEventListener("click", card4Clicked);
    modal4.addEventListener("click", hideModal4);
}

if (card5.addEventListener) {
    card5.addEventListener("click", card5Clicked);
    modal5.addEventListener("click", hideModal5);
}

if (card6.addEventListener) {
    card6.addEventListener("click", card6Clicked);
    modal6.addEventListener("click", hideModal6);
}

if (card7.addEventListener) {
    card7.addEventListener("click", card7Clicked);
    modal7.addEventListener("click", hideModal7);
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