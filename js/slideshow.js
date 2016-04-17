var nextSlideTimer = setInterval(nextSlide,  9000);



var nextSlide = function()
 {

$(".slideshow-big-zxc img").animate({left: '250px'});





    $(".galleryPreviewImage > img:first")
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo(".galleryPreviewImage");

    $('.gallerydescription > div:first-child')
    .fadeOut(0)
    .next()
    .fadeIn(0)
    .end()
    .appendTo(".gallerydescription");


    currentImage++;
    $('a.galleryBullets' + currentImage).addClass('active');
    if (currentImage==9){currentImage=1;$('a.galleryBullets' + currentImage).addClass('active');}

}





    $("a.nextslidearrow").click(function() {
    clearInterval(nextSlideTimer);

    $(".galleryPreviewImage > img:first")
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo(".galleryPreviewImage");

    $('.gallerydescription > div:first-child')
    .fadeOut(0)
    .next()
    .fadeIn(0)
    .end()
    .appendTo(".gallerydescription");

    nextSlideTimer = setInterval(nextSlide, 9000)
    setTimeout(nextSlideTimer, 9000)

    $('a.galleryBullets' + currentImage).removeClass('active');
    currentImage++;
    $('a.galleryBullets' + currentImage).addClass('active');
    if (currentImage==9){currentImage=1;$('a.galleryBullets' + currentImage).addClass('active');}

});