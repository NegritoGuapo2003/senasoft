console.log("hola que mas");

const btn = document.getElementById("pregunta-btn");
console.log(btn);
var preguntas = document.getElementById("contenedor");

btn.addEventListener("click", crearPregunta);

var indicePregunta = 0;

function crearPregunta(){

    /*
    var node = document.createElement("div");

    node.className = "pregunta";
    */

    var divPregunta = "<div class=\"pregunta\">";

    divPregunta +=          "<label for=\"\">Escribe la pregunta</label>";
    divPregunta +=          `<input type=\"text\" name='pregunta${indicePregunta++}'>`;

    divPregunta +=    "</div>";

    preguntas.innerHTML += divPregunta;


    /*
    var textnode = document.createTextNode(divPregunta);

    node.appendChild(divPregunta);

    preguntas.appendChild(node);
    */

}

