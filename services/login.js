const firstDot = document.getElementById("dotBtn1")
const secondDot = document.getElementById("dotBtn2")
const thirdDot = document.getElementById("dotBtn3")
const slide1 = document.getElementById("carousel-1")
const slide2 = document.getElementById("carousel-2")
const slide3 = document.getElementById("carousel-3")
const logForm = document.getElementById("login-form")

//MANUAL OF CAROUSEL
firstDot.addEventListener("click", function () {
    slide1.style.display = "block"
    slide2.style.display = "none"
    slide3.style.display = "none"
})
secondDot.addEventListener("click", function () {
    slide1.style.display = "none"
    slide2.style.display = "block"
    slide3.style.display = "none"
})
thirdDot.addEventListener("click", function () {
    slide1.style.display = "none"
    slide2.style.display = "none"
    slide3.style.display = "block"
})

//AUTOMATION OF CAROUSEL
let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("img-slides");
    let dots = document.getElementsByClassName("dot");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    if (slideIndex > slides.length) { slideIndex = 1 }
    dots[slideIndex - 1].className += " active";
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3500);

    document.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const error = urlParams.get('error');
        const toastContainers = document.getElementsByClassName('toast-container');

        if (error === '1') {
            Array.from(toastContainers).forEach((container) => {
                container.style.visibility = 'visible';
                document.getElementById("error-cont").innerText = "Error code 1: Account does not exist.";

            });
            setTimeout(() => {
                Array.from(toastContainers).forEach((container) => {
                    container.style.visibility = 'hidden';
                });
            }, 3000);
        } else if (error === '2') {
            Array.from(toastContainers).forEach((container) => {
                container.style.visibility = 'visible';
                document.getElementById("error-cont").innerText = "Error code 2: The username or password you entered is incorrect.";
            });
            setTimeout(() => {
                Array.from(toastContainers).forEach((container) => {
                    container.style.visibility = 'hidden';
                });
            }, 3000);
        }
    })
}

window.onload = function () {
    if (window.location.search.includes("error")) {
        history.replaceState({}, document.title, window.location.pathname);
    }
}