const menuBtn = document.querySelector(".header__burger");
let nav = document.querySelector(".header__ul");
menuBtn.addEventListener("click", function () {
  nav.classList.toggle("header__ul--activo");
});

  
