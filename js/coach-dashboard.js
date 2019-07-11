//alert('coach dashboard');

const btnChange = document.querySelectorAll('a.vendor-dashboard-link');

btnChange.forEach(function (a, index) {
    console.log(a.innerText);
    a.textContent = "Coach Dashboard";
});