$(".banner-slider").slick({
  autoplay: true,
  infinite: true,
  autoplaySpeed: 5000,
  speed: 300,
  slidesToShow: 1,
  prevArrow:
    "<button type='button' class='p-3 px-4 rounded-full bg-gray-200 absolute bottom-[50%] left-2 z-10'><i class='fa-solid fa-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='p-3 px-4 rounded-full bg-gray-200 absolute bottom-[50%] right-2 z-10'><i class='fa-sharp fa-solid fa-angle-right'></i></button>",
});
$(".flyer-slider").slick({
  autoplay: true,
  infinite: true,
  autoplaySpeed: 3000,
  speed: 300,
  slidesToShow: 1,
  arrows: false,
});
$(".daytrack").slick({
  centerMode: true,
  slidesToShow: 6,
  prevArrow:
    "<button type='button' class='p-3 px-4 rounded-full bg-primary absolute top-2 left-0 z-10'><i class='fa-solid fa-chevron-left text-white'></i></button>",
  nextArrow:
    "<button type='button' class='p-3 px-4 rounded-full bg-primary absolute top-2 right-0 z-10'><i class='fa-sharp fa-solid fa-angle-right text-white'></i></button>",
});
$(".r-daytrack").slick({
  centerMode: true,
  slidesToShow: 2,
  arrows:false,
});


