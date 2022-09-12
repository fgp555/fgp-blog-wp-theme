const nav_ul = document.querySelector(".navbar nav ul");
const nav_btn = document.querySelector(".navbar nav .nav_btn");
const nav_btn_i = document.querySelector(".navbar nav i");

varNum = 0;

function display_block() {
  if (varNum % 2 == 0) {
    nav_ul.style.display = "block";
    nav_btn_i.classList.replace("fa-bars", "fa-times");
  } else {
    nav_ul.style.display = null;
    nav_btn_i.classList.replace("fa-times", "fa-bars");
  }
  varNum++;
}
nav_btn.addEventListener("click", display_block);
