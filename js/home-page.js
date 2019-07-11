//View All Btn
const viewAll = document.querySelector('#explore-view-all');
viewAll.addEventListener('click',
    function () {
        window.location = "/coaches/";
    });

//How it works Btn
const howItWorks = document.querySelector('#how-works-sign-up');
howItWorks.addEventListener('click',
    function () {
        window.location = "/my-account/";
    });

//How it works btn coaches
// 
const viewAllNew = document.querySelector('.athlete-section');
viewAllNew.addEventListener('click',
    function () {
        console.log('.athlete-section btn pressed');
        window.location = "/coaches/";
    });

const boxesBG = document.querySelectorAll('.boxes__content--front');

<<<<<<< HEAD
//boxesBG[1].style.backgroundColor = "#38b6ff";
//boxesBG[3].style.backgroundColor = "#38b6ff";
//boxesBG[5].style.backgroundColor = "#38b6ff";
//boxesBG[7].style.backgroundColor = "#38b6ff";
=======

boxesBG[1].style.backgroundColor = "#38b6ff";
boxesBG[3].style.backgroundColor = "#38b6ff";
boxesBG[5].style.backgroundColor = "#38b6ff";
boxesBG[7].style.backgroundColor = "#38b6ff";

>>>>>>> 21e0cc5befcb64599de91ae70a11a0136fae6e8d

// [1, 3, 5, 7].array.forEach(element => {
//     boxesBG.style.backgroundColor = "#38b6ff";
// });

// console.log(boxesBG);