//var swiper3 = new Swiper('.swiper-container-3',opts);
/*var swiper3 = new Swiper('.swiper-container-3',opts);
var swiper4 = new Swiper('.swiper-container-4',opts);
var swiper5 = new Swiper('.swiper-container-5',opts);*/

(function($, Swiper){
    var options = {
      slidesPerView: 3,
      spaceBetween: 30,
      loops: true,

      nextButton: '.swiper-button-next-3',
      prevButton: '.swiper-button-prev-3',

    };

    var opts = {
      slidesPerView: 4,
      spaceBetween: 30,
      breakpoints:{
        767:{
          slidesPerView: 1,
          spaceBetween: 30
        },
        992:{
          slidesPerView: 3,
          spaceBetween: 30
        }
      },
      grabCursor: true,
      resistance: true,
    };

    var swiperServ = new Swiper('.swiper-container',opts);

    //swiperServ.init();
   

    /*var swiper2 = new Swiper('.swiper-container-3',options);*/

    

    /*swiper2.init();*/
    $('.swiper-wrapper').lightGallery();
    //
    /*
    swiper3.init();
    swiper3.init();
    swiper4.init();
    swiper5.init();
    */

})(jQuery, Swiper);