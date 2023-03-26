$('.owl-carousel').owlCarousel({
    loop:true,
    items: 5,
    margin:20,
    autoplay: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        576:{
            items:2,
            nav:false
        },
        768:{
            items:3,
            nav:false
        },
        992:{
            nav:true,
            items: 5,
        },
        1200:{
            nav:true,
            items: 5,
        },
        1400:{
            nav:true,
            items: 5,
        },
    }
})