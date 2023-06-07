        
// Website PreLoader
        
// var loader = document.getElementById("mentpreloader");

// window.addEventListener("load", function()
// {
//     loader.style.display="none";
// });

setTimeout(function(){
    $('#powerline-loader').fadeToggle();
  },3000);





// Navbar Transparent

const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-div');
window.onscroll = () => {
    if (window.scrollY > 30) {
        navbar.classList.add('nav-active');
        logo.classList.add('logo-nav-active');
    } else {
        navbar.classList.remove('nav-active');
        logo.classList.remove('logo-nav-active');
    }
};








$('.services').owlCarousel({
    loop:true,
    margin:20,
   autoplay:true,
   autoplayTimeout:3000,
    nav:false,
    responsive:{
        0:{
            items:1,
            autoplayTimeout:1500
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})






// PRODUCTS
$('.products').owlCarousel({
    loop:true,
    margin:20,
   autoplay:true,
   autoplayTimeout:2000,
    nav:false,
    responsive:{
        0:{
            items:1,
            autoplayTimeout:1500
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})