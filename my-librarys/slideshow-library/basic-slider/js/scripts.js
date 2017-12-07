
var i = 0;
var images = ["img/slide1.jpg","img/slide2.jpg","img/slide3.jpg"];
var time = 4000;

/* Image List */



/* Change Image */
function changeImg() {
    /* Image Src */
    document.slide.src = images[i];

    if(i < images.length - 1){
        i++;
    }else {
        i = 0;
    }
    setTimeout(changeImg,time);
}

function autoLoad() {
    $("#ladebalken").animate({"width" : "1200px"},4000,function () {
       $(this).css("width","0");
    });
}

setInterval("autoLoad()", 4000);
addEventListener("load",changeImg);
