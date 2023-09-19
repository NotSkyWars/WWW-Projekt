document.getElementById("previous").addEventListener("onclick",previous)


//fix css animation not playing twice
//fix responsive stuff

var current = 0;
var animation = 0;
function next(){
    if(current + 1 < document.getElementsByClassName("project").length-2){
        console.log(current);
        document.getElementById("rotation-" + current).style.animation = "slide-in"+ animation+" 0.5s forwards";
        document.getElementById("rotation-" + current).style.display = "none";
    
        if(current == 0){document.getElementById("hidden").style.display = "none";document.getElementById("hidden").style.animation = "slide-in"+ animation+" 0.5s forwards"}
    current+= 1;
    for(var i = 0; i< 3; i++){
    var nextcount = current+i;
    if(current+i < document.getElementsByClassName("project").length-1){
    var next = document.getElementById("rotation-" + nextcount);
    next.style.display = "block"; 
    next.style.animation = "slide-in"+ animation+" 0.5s forwards";
}
    
    }
    animation +1 == 2? animation = 0: animation += 1; 
//next.setAttribute('class', next.classList.contains('slide-in') ? 'project slide-out' : 'project slide-in');
    }
}

function previous(){
   if(current >-1 ){
       console.log(current);
       for(var i = 0; i<4; i++){
    var prevcount = current == 0? current: current-1 +i;
    if(i == 3||i == 2 && current == 0 ){
        var a = current-2 +i< document.getElementsByClassName("project").length? current== 0? current+3:current-2 +i : current-3 +i;
    document.getElementById("rotation-" + a).style.display = "none";
    }
    current == 0? document.getElementById("rotation-" + 1).style.animation = "slide-out"+ animation+" 0.5s forwards": document.getElementById("rotation-" + prevcount).style.animation = "slide-out"+ animation+" 0.5s forwards";
       }

       

       if(current+2 == document.getElementsByClassName("project").length-1){
           var last = current-2;
           document.getElementById("rotation-" + last).style.display = "block";
           document.getElementById("rotation-" + last).style.animation = "slide-out"+ animation+" 0.5s forwards";
       }
       current == 0? current: current-= 1;
       if(current == 0){document.getElementById("hidden").style.display = "block";
       document.getElementById("hidden").style.animation = "slide-out"+ animation+" 0.5s forwards"}
    document.getElementById("rotation-" + current).style.display = "block";
    document.getElementById("rotation-" + current).style.animation = "slide-out"+ animation+" 0.5s forwards";
    animation +1 == 2? animation = 0: animation += 1; 
   }
}


window.onload = (event) => {
   setInterval(function(){
    i = 0;
    if(current + 4 < document.getElementsByClassName("project").length){
        document.getElementById("rotation-" + current).style.animation = "slide-in"+ animation+" 0.5s forwards";
        document.getElementById("rotation-" + current).style.animation = "none";
        document.getElementById("rotation-" + current).style.display = "none";
    
    current+= 1;
    for(var i = 0; i< 4; i++){
    var nextcount = current+i;
    var next = document.getElementById("rotation-" + nextcount);
    next.style.display = "block"; 
    next.style.animation = "slide-in"+ animation+" 0.5s forwards";
    next.style.animation = "none";
    animation +1 == 2? animation = 0: animation += 1; 
    }
        }else{
            for(var i = 0; i<4; i++){
                var prevcount = current +i;
                if(i == 3){
                document.getElementById("rotation-" + prevcount).style.display = "none";
                }
                var prev = document.getElementById("rotation-" + prevcount);
                prev.style.animation = "slide-out"+ animation+" 0.5s forwards";
                prev.style.animation = "none";
                   }
                current-= 1;
              
                document.getElementById("rotation-" + current).style.display = "block";
                document.getElementById("rotation-" + current).style.animation = "slide-out"+ animation+" 0.5s forwards";
                document.getElementById("rotation-" + current).style.animation = "none";
                animation +1 == 2? animation = 0: animation += 1; 
        }
        console.log("dasasda" + current);
   },5000000)
  };

  function sleep(delay) {
    var start = new Date().getTime();
    while (new Date().getTime() < start + delay);
}