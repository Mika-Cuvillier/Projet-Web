(function(){
    let bout1 = document.getElementById('boutonCarre1');
    console.log(bout1.id);
    let bout2 = document.getElementById('boutonCarre2');
    console.log(bout2.id);
    let bout3 = document.getElementById('boutonCarre3');
    console.log(bout3.id);
    let carrousel = document.querySelector('.imagesCarrousel img');
    let img1 = document.querySelector('.imagesCarrousel img');
    let img2 = document.querySelector('.imagesCarrousel img');
    
    bout1.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateY(0)";
        img1.style.transform = "translateY(0)";
        img2.style.transform = "translateY(0)";
    })
    bout2.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateY(-450px)";
        img1.style.transform = "translateY(-450px)";
        img2.style.transform = "translateY(-450px)";
        //document.querySelector('.carouselAccueil').height = "1400";
        console.log('wow');
        //carrousel.style.height = "1400px"
        //carrousel.style.opacity = "1"
    })
    bout3.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateY(-900px)";
        img1.style.transform = "translateY(-900px)";
        img2.style.transform = "translateY(-900px)";

    })
}())