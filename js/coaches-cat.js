const btnChange = document.querySelectorAll('a.add_to_cart_button');

btnChange.forEach(function (a, index) {
    console.log(a.innerText);
    a.textContent = "Book Now!";
});