$(document).ready(function(){
    console.log("Ready!");
});


 /*OnClick Event*/

function ImageClick() {
    console.log("FlipReady!");
    
    var Triangle = document.getElementById("Triangle").src;
    console.log(Triangle);
    
    if (Triangle.indexOf("tri_green.png") != -1){
        document.getElementById("Triangle").src = "images/tri_red.png";
       

    } else {
        document.getElementById("Triangle").src = "images/tri_green.png";
        

    }
      };