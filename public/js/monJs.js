var img = null;
var time;
var inc = 1;
var fish = document.querySelector('#monImage');
fish.style.position = "relative";
fish.style.left = "500px";
function initial(){
    img = document.getElementById("monImag");
    img.style.position = "relative";
    img.style.left = "0px";
    bouge();
}
function bouge(){
    var posx = parseInt(img.style.left);
    if (posx === 0){
        inc = 1;
        document.querySelector('#monImag').src = "./images/wormRight.png";
    }
    if (posx === 1200){
        inc = -1;
        document.querySelector('#monImag').src = "./images/wormLeft.png";
        }

    if (posx >= 0 && posx < 300){
        document.querySelector('#monImage').src="./images/fishSleepLeft.png";
    }
    if (posx >= 300 && posx<600){
        document.querySelector('#monImage').src="./images/fishLeft.png";
    }
    if (posx >= 600 && posx <1100){
        document.querySelector('#monImage').src="./images/fishRight.png";
    }
    if (posx >= 1100 && posx < 1200 ){
        document.querySelector('#monImage').src="./images/fishSleepRight.png";
    }
    img.style.left = parseInt(img.style.left) + inc + "px";
        time = setTimeout(function(){
            bouge();
        },5);
}
