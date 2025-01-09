const canvas = document.getElementById('signature-pad');
const signaturePad = new SignaturePad(canvas, {
    minWidth: 1,
    maxWidth: 3,
    penColor: "rgb(0, 0, 0)"
});

const canvas2 = document.getElementById('signature-pad2');
const signaturePad2 = new SignaturePad(canvas2, {
    minWidth: 1,
    maxWidth: 3,
    penColor: "rgb(0, 0, 0)"
});

const canvas3 = document.getElementById('date-pad');
const datePad = new SignaturePad(canvas3, {
    minWidth: 1,
    maxWidth: 3,
    penColor: "rgb(0, 0, 0)"
});

document.querySelector('form').addEventListener('submit', function (e) {
    if (!signaturePad.isEmpty()) {
        // Convert the signature to a data URL and store it in the hidden input
        const signatureDataURL = signaturePad.toDataURL();
        document.getElementById('initial').value = signatureDataURL;
    } else {
        alert('Please sign before submitting the form.');
        e.preventDefault(); // Prevent form submission
    }
});

document.querySelector('form').addEventListener('submit', function (e) {
    if (!signaturePad2.isEmpty()) {
        // Convert the signature to a data URL and store it in the hidden input
        const signatureDataURL = signaturePad2.toDataURL();
        document.getElementById('signature2').value = signatureDataURL;
    } else {
        alert('Please sign before submitting the form.');
        e.preventDefault(); // Prevent form submission
    }
});

document.querySelector('form').addEventListener('submit', function (e) {
    if (!datePad.isEmpty()) {
        // Convert the signature to a data URL and store it in the hidden input
        const signatureDataURL = datePad.toDataURL();
        document.getElementById('date').value = signatureDataURL;
    } else {
        alert('Please sign before submitting the form.');
        e.preventDefault(); // Prevent form submission
    }
});

document.getElementById('clear-signature').addEventListener('click', function () {
    signaturePad.clear();
});

document.getElementById('clear-signature2').addEventListener('click', function () {
    signaturePad2.clear();
});

document.getElementById('clear-date').addEventListener('click', function () {
    datePad.clear();
});