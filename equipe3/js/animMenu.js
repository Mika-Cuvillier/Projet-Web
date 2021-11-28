var dernierScrollTop = 0;

navbar = document.getElementById("site-navigation");

window.addEventListener("scroll", function(){
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > dernierScrollTop){
        navbar.style.left = "-1980px";
    }
    else{
        navbar.style.left = "0";
    }
    dernierScrollTop = scrollTop;
})