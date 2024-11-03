let modalBackground = document.getElementById("modal_background");
let modal = document.getElementById("modal");
let card = document.getElementById("card");
let body = document.getElementById("body");

function cardClicked() {
    modalBackground.classList.add("show_modal_background");
    modal.classList.add("show_modal");
    body.classList.add("stop_scrolling");
}

function hideModal() {
    modalBackground.classList.remove("show_modal_background");
    modal.classList.remove("show_modal");
    body.classList.remove("stop_scrolling");
}

card.addEventListener("click", cardClicked);
modal.addEventListener("click", hideModal);