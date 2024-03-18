
$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 100) {
    $("header").addClass("bg_header");
  } else {
    $("header").removeClass("bg_header");
  }
});


AOS.init({

  once: true

});

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 100) {
    $("header").addClass("scroll");
  } else {
    $("header").removeClass("scroll");
  }
});


$('.testi-slider').slick({
  autoplay: true,
  autoplaySpeed: 1000,
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

const items = document.querySelectorAll(".accordion a");

        function toggleAccordion() {
            const isActive = this.classList.contains('active');

            // Close all items
            items.forEach(item => {
                item.classList.remove('active');
                item.nextElementSibling.classList.remove('active');
            });

            // If the clicked item was not active, open it
            if (!isActive) {
                this.classList.add('active');
                this.nextElementSibling.classList.add('active');
            }
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));


        