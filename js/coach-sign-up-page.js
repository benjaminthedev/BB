//Become a coach page

const vendorText = document.querySelectorAll('.form-row-wide label');
Array.from(vendorText).forEach(function () {
    vendorText[1].textContent = "Coach Name *";
});

window.addEventListener('load', function () {
    const note = document.getElementsByClassName('wcpv-field-note');
    note[0].textContent = "This is the name that visitors will see on your profile";
});

document.querySelector('.page-id-434 .entry-content h2').style.display = "none";
document.querySelector('.page-id-434 .entry-content p').textContent = "Submit the form below to become a coach.";