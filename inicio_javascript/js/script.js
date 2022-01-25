document.getElementById("enviar").onclick =()=>{
    var e = document.querySelector("ul");
    e.innerHTML = "";
    let opcion = document.getElementById("opcion").value;
    let divImagenes = document.getElementById("imagenes");
    for (i=0; i<opcion; i++){
        let imagenVisual = document.createElement("img");
        imagenVisual.src="./img/navidad.jpg";
        divImagenes.append(imagenVisual);
    }
    console.log(opcion);

}

