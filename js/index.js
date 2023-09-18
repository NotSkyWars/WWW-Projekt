document.getElementById("previous").addEventListener("onclick",previous)


//fix css animation not playing twice
//fix responsive stuff

var current = 0;
function next(){
    if(current + 1 < document.getElementsByClassName("project").length){

        document.getElementById("rotation-" + current).style.animation = "slide-in 0.5s forwards";
        document.getElementById("rotation-" + current).style.display = "none";
    
    current+= 1;
    for(var i = 0; i< 4; i++){
    var nextcount = current+i;
    var next = document.getElementById("rotation-" + nextcount);
    next.style.display = "block"; 
    next.style.animation = "slide-in 0.5s forwards";
    }
//next.setAttribute('class', next.classList.contains('slide-in') ? 'project slide-out' : 'project slide-in');
    }
}

function previous(){
   if(current >0 ){
       for(var i = 0; i<4; i++){
    var prevcount = current +i;
    if(i == 3){
    document.getElementById("rotation-" + prevcount).style.display = "none";
    }
    var prev = document.getElementById("rotation-" + prevcount);
    prev.style.animation = "slide-in 0.5s forwards";
    prev.style.animation = "slide-out 0.5s forwards";
       }
    current-= 1;
  
    document.getElementById("rotation-" + current).style.display = "block";
    document.getElementById("rotation-" + current).style.animation = "slide-in 0.5s forwards";
    document.getElementById("rotation-" + current).style.animation = "slide-out 0.5s forwards";
   }
    console.log("sdasd");
}


window.onload = (event) => {
   setInterval(function(){
    i = 0;
    if(current + 4 < document.getElementsByClassName("project").length){
        document.getElementById("rotation-" + current).style.animation = "slide-in 0.5s forwards";
        document.getElementById("rotation-" + current).style.animation = "none";
        document.getElementById("rotation-" + current).style.display = "none";
    
    current+= 1;
    for(var i = 0; i< 4; i++){
    var nextcount = current+i;
    var next = document.getElementById("rotation-" + nextcount);
    next.style.display = "block"; 
    next.style.animation = "slide-in 0.5s forwards";
    next.style.animation = "none";
    }
        }else{
            for(var i = 0; i<4; i++){
                var prevcount = current +i;
                if(i == 3){
                document.getElementById("rotation-" + prevcount).style.display = "none";
                }
                var prev = document.getElementById("rotation-" + prevcount);
                prev.style.animation = "slide-out 0.5s forwards";
                prev.style.animation = "none";
                   }
                current-= 1;
              
                document.getElementById("rotation-" + current).style.display = "block";
                document.getElementById("rotation-" + current).style.animation = "slide-out 0.5s forwards";
                document.getElementById("rotation-" + current).style.animation = "none";
        }
        console.log("dasasda" + current);
   },5000000)
  };

  function sleep(delay) {
    var start = new Date().getTime();
    while (new Date().getTime() < start + delay);
}