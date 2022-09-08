console.log("hola que mas");

const btn = document.getElementById("pregunta-btn");
console.log(btn);
var preguntas = document.getElementById("contenedor");

btn.addEventListener("click", crearPregunta);

function crearPregunta(){

    /*
    var node = document.createElement("div");

    node.className = "pregunta";
    */

    var divPregunta = "<div class=\"pregunta\">";

    divPregunta +=          "<label for=\"\">escribe la pregunta</label>";
    divPregunta +=          "<input type=\"text\">";

    divPregunta +=    "</div>";

    preguntas.innerHTML += divPregunta;


    /*
    var textnode = document.createTextNode(divPregunta);

    node.appendChild(divPregunta);

    preguntas.appendChild(node);
    */

}

