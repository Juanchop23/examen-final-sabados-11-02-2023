function validar() {

    respuesta = document.getElementById('respuesta').value;

    if (respuesta == "") {
        alert("Por favor completa los campos");
        return false;
    } else if (respuesta === "si") {
        return true;
    }
    else if (respuesta === "no"){
        alert("Usted no consume gaseosa")
        return false;
    } 
    else{
        alert("Introduzca la información en minúscula y sin tilde");
        return false;
    }
}


//OCULTANDO EL SÍ DE LA BD
document.getElementById("sitoma").style.display = "none";