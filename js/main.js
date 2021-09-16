var menu = document.querySelector(".menu")
var ham = document.querySelector(".hamburger")

ham.addEventListener("click", ()=>{
    menu.classList.toggle("active")
})

$(function() {
    $(".slider").slick({
        dots: false,
        autoplay:true,
        speed:150,
        infinite: true,
        centerMode: true,
        slidesToShow:2,
        slidesToScroll: 1,
        
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow:1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              }
            },
          ]
      });
})


$(function() {
  $(".slide").slick({
      dots: false,
      autoplay:true,
      speed:150,
      infinite: true,
      centerMode: true,
      nextArrow:'#next1',
      prevArrow:'#next',
      slidesToShow:3,
      slidesToScroll: 1,
      
      responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow:1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
            }
          },
        ]
    });
})