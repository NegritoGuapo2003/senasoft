console.log("hola que mas");

const btn = documento.getElementById("pregunta-btn");
const preguntas = documento.getElementById("contenedor");

btn.onclick = () => {

    const divPregunta = "<div class=\"pregunta\">";

    divPregunta +=          "<label for=\"\">escribe la pregunta</label>";
    divPregunta +=          "<input type=\"text\">";

    divPregunta +=      "</div>";

    preguntas.appendChild(divPregunta);


}