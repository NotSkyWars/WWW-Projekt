

document.getElementById("dropbutton").addEventListener("touchstart",changeMenu() );
function changeMenu(event){
  
  var button =  document.getElementById("dropdown-content");
  if(button.style.display != "none"){
    button.style.display = "none";
    document.getElementById("dropbutton").innerHTML = "Projekte <strong>◄</strong>";
  }else{
    button.style.display="block";
    document.getElementById("dropbutton").innerHTML = "Projekte <strong>▼</strong>";

  }
  console.log("press2");
}

function changeLanguage(){
  var button = document.getElementById("language");
  if(button.innerHTML == "🇩🇪"){
    
    button.innerHTML = "🇬🇧";
  }else {button.innerHTML = "🇩🇪";}
}