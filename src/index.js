let modalBackground = document.getElementById("modal_background");
let modal = document.getElementById("modal");
let card = document.getElementById("card");

function cardClicked() {
    modalBackground.classList.add("show_modal_background");
    modal.classList.add("show_modal");
}

function hideModal() {
    modalBackground.classList.remove("show_modal_background");
    modal.classList.remove("show_modal");
}

card.addEventListener("click", cardClicked);
modal.addEventListener("click", hideModal);