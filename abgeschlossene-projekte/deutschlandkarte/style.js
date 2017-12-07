
sourceImage = new Image();

function changeImage(target,image){
    sourceImage.src = image;
    document.getElementById(target).src = sourceImage.src;
}
