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
        },
        1600:{
            items:4
        }
    }
})






// PRODUCTS
$('.products').owlCarousel({
    loop:true,
    margin:20,
   autoplay:true,
   autoplayTimeout:000,
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
        },
        1600:{
            items:4
        }
    }
})