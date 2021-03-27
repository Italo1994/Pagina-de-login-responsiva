function dropdown(id) {
    let identificador = id;
    let myDisplay = document.getElementById(identificador).style.display;

    if(myDisplay == "none") {
        document.getElementById(identificador).style.display = "inline-block";
    }
    else if(myDisplay != "none"){
        document.getElementById(identificador).style.display = "none";
    }
}