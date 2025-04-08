document.querySelectorAll('.heart-btn').forEach(button => {
  button.addEventListener('click', function (event) {
    event.preventDefault();
    event.stopPropagation();
    this.classList.toggle('clicked');
  });
});


let count = 0;
const likeBtn = document.querySelector('.like-btn');
const likeCount = document.querySelector('#likeCount');

if (likeBtn !== null) {
  likeBtn.addEventListener('click', (event) => {
    event.preventDefault();

    const isLiked = likeBtn.style.color === "rgb(229, 42, 42)"; // Check if the button is red

    likeBtn.style.color = isLiked ? "transparent" : "#e52a2a";
    count += isLiked ? -1 : 1;

    if (count > 0) {
      likeCount.textContent = count;
    } else {
      likeCount.textContent = '';
    }

  });
}

if(document.getElementById('cvUpload') !== null){
    document.getElementById('cvUpload').addEventListener('change', function() {
      let fileName = this.files.length > 0 ? this.files[0].name : "No file chosen";
      document.getElementById('file-name').textContent = fileName;
  });
}



$(document).ready(function () {
  if ($(window).width() < 1239) {
    $('.head-nav li').each(function() {
      var $this = $(this);
      var $submenu = $this.children('.submenu');
      var $link = $this.find('a');
      
      if ($submenu.length) {
          var submenuOpened = false;

          // When clicking on the menu item
          $this.on('click', function(e) {
              // If the submenu is already opened, allow navigation
              if (submenuOpened) {
                  return true; // Allow navigation to the link
              }

              // Prevent default action if submenu is not opened
              e.preventDefault();

              // Toggle the submenu visibility
              $submenu.toggleClass('active');
              submenuOpened = $submenu.hasClass('active'); // Track the submenu state
          });

          // When clicking the link
          $link.on('click', function(e) {
              // If submenu is not opened, prevent the link redirection
              if (!submenuOpened) {
                  e.preventDefault();
              }
          });
      }
    });
  }
  $('.product-main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.product-thumbnail-slider',
    responsive : [
      {
        breakpoint: 992,  // At 992px and below
        settings: {
            slidesToShow: 1,  // Show only 1 slide
            slidesToScroll: 1,
            dots :true
        }
      }
    ]

  });

  $('.product-thumbnail-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.product-main-slider',
      dots: false,
      focusOnSelect: true
  });

  // FAQ tab js open   
  $('ul.tabs li').on('click', function () {
    // get the data attribute
    var tab_id = $(this).attr('data-tab');
    // remove the default classes
    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');
    // add new classes on mouse click
    $(this).addClass('current');
    $('#' + tab_id).addClass('current');
  });
  // FAQ tab js close 

  // FAQ tab js mobile open   
  $('#select-box').on('change', function () {
    // get the data attribute
    var tab_id = $(this).find(":selected").val();
    // remove the default classes
    $('.tab-content').removeClass('current');
    // add new classes on mouse click
    $(this).addClass('current');
    $('#' + tab_id).addClass('current');
  });
  // FAQ tab js mobile close    

  // banner slider js open 
  $('.banr').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [

      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true

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
  // banner slider js close   

  // Adv Manufacturing slider open

  $('.multiple-items').slick({
    infinite: true,
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 3,

    responsive: [

      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true

        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // Adv Manufacturing slider close        

  // FAQ slider open    

  $('.faq_fade_effct').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: true,
    cssEase: 'linear'
  });

  // FAQ slider close

  // case studies slider open    

  $('.case-studies-item').slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',

    responsive: [

      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true

        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // case studies slider close

  //client slide open
  $(document).ready(function () {
    $('.client-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 3000,
      arrows: false,
      dots: false,
      cssEase: 'linear',
      pauseOnHover: true,
      pauseOnFocus: true,
      infinite: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3
          }
        }
      ]
    });
  });
  //client slide close

  $('.experience-fade-efct').slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: true,
    cssEase: 'linear'
  });


  // case studies slider open

  $(document).ready(function () {
    $('.acc-head').click(function () {
      $(this).next().slideToggle(500);
      $(this).toggleClass('active');
    })
  });

  // case studies slider close    

  $('[data-fancybox="gallery"]').fancybox({

  });
  $('[data-fancybox="gallery-1"]').fancybox({

  });
  $('[data-fancybox="gallery-2"]').fancybox({

  });
  $('[data-fancybox="gallery-3"]').fancybox({

  });
  $('[data-fancybox="gallery-4"]').fancybox({

  });
  $('[data-fancybox="gallery-5"]').fancybox({

  });
  $('[data-fancybox="surat-gallery"]').fancybox({

  });
  $('[data-fancybox="Palacia-gallery"]').fancybox({

  });

  $('.project-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 2000,
    arrows: true,
    dots: false,
    cssEase: 'linear',
    pauseOnHover: true,
    pauseOnFocus: true,
    infinite: false,

  });

  $('.marvels-slider').slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 500,
    autoplay: false,
    // autoplaySpeed: 3000,
    // fade: false,
    responsive: [
      {
        breakpoint: 996,
        settings: {
          arrows: false,
        }
      },
    ],
    cssEase: 'linear'
  });

  $('.marvel-image-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: true,
    cssEase: 'linear'

  });

  $('.app-video-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    speed: 3000,
    arrows: true,
    dots: false,
    cssEase: 'linear',
    pauseOnHover: true,
    pauseOnFocus: true,
    infinite: true,
    responsive: [
      {
        breakpoint: 996,
        settings: {
          slidesToShow: 2,
          // slidesToScroll:2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          // slidesToScroll:1

        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          // slidesToScroll: 1,
        }
      },
    ],

  });


  $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    asNavFor: '.vertical-slider'
  });

  $('.vertical-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.main-slider',
    dots: false,
    arrows:false,
    centerMode: true,
    focusOnSelect: true,
    vertical: true,
    responsive : [
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 4,
          centerMode:false
          // slidesToScroll:2
        }
      }
    ]
  });


    $('#showLeft').click(function(){
      $(this).toggleClass('open');
      $(".nav").slideToggle();
  });

   

});




function handleSlider() {
  if ($(window).width() <= 576) {
    // Initialize slider only if it's not already initialized
    if (!$('.blog-slider').hasClass('slick-initialized')) {
      $('.blog-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
              centerMode: true,
              centerPadding: '50px',
            }
          }
        ]
      });
    }
  } else {
    // Destroy slider if it's initialized
    if ($('.blog-slider').hasClass('slick-initialized')) {
      $('.blog-slider').slick('unslick');
    }
  }
}

// Run on page load
handleSlider();

// Run on window resize
$(window).on('resize', function () {
  handleSlider();
});

$(document).ready(function() {
  $('#load-more').on('click', function() {
      let nextPageUrl = $(this).attr('data-next-page');

      if (nextPageUrl) {
          $.get(nextPageUrl, function(data) {
              $('#product-container').append($(data).find('#product-container').html());
              
              let newNextPage = $(data).find('#load-more').attr('data-next-page');
              if (newNextPage) {
                  $('#load-more').attr('data-next-page', newNextPage);
              } else {
                  $('#load-more').remove();
              }
          });
      }
  });
});