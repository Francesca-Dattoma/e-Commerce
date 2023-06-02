// swiper homepage


let thumbs = document.querySelectorAll(".thumb img");
let large = document.querySelector(".large img");
let largeCaption = document.querySelector(".caption span");

for(let thumb of thumbs){
  thumb.onmouseover = function(){
    large.src = this.src;
    largeCaption.innerHTML = this.alt;

    for(item of thumbs){
      item.classList.remove("selected");
    }

    this.classList.add("selected");
  }
}







let swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



