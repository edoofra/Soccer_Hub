function reveal(){
    info = document.getElementsByClassName("playerContact");
    for(var i = 0; i < info.length; i++){
        info[i].style.display = "";
    }
    button = document.getElementsByClassName("ContactButton");
    button.style.display = "none"; 
}