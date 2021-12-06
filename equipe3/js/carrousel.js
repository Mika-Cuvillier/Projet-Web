(function(){
    let bout1 = document.getElementById('boutonCarre1')
    console.log(bout1.id)
    let bout2 = document.getElementById('boutonCarre2')
    console.log(bout2.id)
    let bout3 = document.getElementById('boutonCarre3')
    console.log(bout3.id)
    let carrousel = document.querySelector('.carouselAccueil')
    
    bout1.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateY(0)"
    })
    bout2.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateY(-45vh)"
        //carrousel.style.opacity = "1"
    })
    bout3.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateY(-90vh)"
    })
}())