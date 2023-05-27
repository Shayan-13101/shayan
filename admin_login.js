const formOpenBtn = document.querySelector("#form_open");
home = document.querySelector(".home");
form_container = document.querySelector(".form_container");
formCloseBtn = document.querySelector(".form_close");

formOpenBtn.addEventListener("click",() => home.classList.add("show"));
formCloseBtn.addEventListener("click",() => home.classList.remove("show"));