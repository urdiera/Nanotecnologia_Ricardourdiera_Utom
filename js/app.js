setTimeout(function(){
    modificarDom();
}, 3000);

modificarDom();

function modificarDom(){
    var form = document.getElementById("Face");
    form.style.backgroundColor = "blue";
    let boton = document.getElementById("instagram");
    instagram.style.color = "red";
    let botones = document.getElementById("youtube");
    youtube.style.color = "green";


    

    const inputs = document.getElementsByClassName("btn-gamp");
    for(var i = 0; i < inputs.length; i++){
    console.log(inputs[1]);
}
inputs[1].style.textAlign = "center";

const nombres = document.getElementsByName("name");
nombres[0].style.fontSize = "12px"



const parrafos = document.getElementsByTagName("p");
for(var i = 0; i < parrafos.length; i++){
    parrafos[i].style.fontStyle = "italic";
}


const menu = document.getElementById("naved");
console.log(menu);
menu.children.innerText = "contacto";
menu.firstElementChild.style = "color: blue;";
menu.lastElementChild.style = "color: red;";
menu.parentElement.style = "background-color: #AAAAAA;";
menu.previousElementSibling.style = "color: yellow;";
document.getElementById("container").nextElementSibling.style ="color: pink;";


}

//texto se cambie cada 5 minutos 
/*setTimeout(function (){
    modificar1();
}, 5000);

function modificar1(){
    var uno = document.getElementById("primero");
    uno.style.fontSize = "20px";
    uno.style.fontFamily = "Arial";
}

setTimeout(function (){
    modificar2();
}, 10000);

function modificar2(){
    var dos = document.getElementById("segundo");
    dos.style.fontSize = "18px";
    dos.style.fontFamily = "Consolas";
}

setTimeout(function (){
    modificar3();
}, 15000);

function modificar3(){
    var tres = document.getElementById("tercer");
    tres.style.fontSize = "30px";
    tres.style.fontFamily = "Ravie";
}

setTimeout(function (){
    modificarp4();
}, 20000);

function modificarp4(){
    var cuatro = document.getElementById("cuarto");
    cuatro.style.fontSize = "22px";
    cuatro.style.fontFamily = "Consolas";}
*/



const querys = document.querySelector(".contact-page"); //primer nombre de css
querys.style.fontFamily = "verdana";

const avanzado = document.querySelector(".tu_gmail  #exampleInputEmail3");
avanzado.style.borderColor = "red";
avanzado.style.borderWidth = "3 px";


const divs = document.querySelectorAll("div");
const clases = document.querySelectorAll(".tu_gmail");
const nombres = document.querySelectorAll('[name="name"]');
divs[10].style.textShadow = "3px 3px 3px red";
clases[0].style.textShadow = "3px 3px 3px blue";
nombres[0].style.textShadow = "3px 3px 3px green";

//lo de la clase que se esta viendo 22 de febrero del 2022
const parrafo = document.createElement("p");
    parrafo.id = "parrafo-nod";
    parrafo.textContent = "hello inges jajajaja ";

const div = document.getElementById("divisor");
div.appendChild(parrafo);


const imagen = document.createElement("imagen");
imagen.src = "img/9.jpg";
imagen.alt="imagen chida";
div.appendChild(imagen);

parrafo.remove();
imagen.remove();

//etiqueta html
div.innerHTML = "<b>Hello word</b>";
div.innerHTML = "<p>el parrafo de ejemplo</p>";
div.innerHTML = '<span style="color: red;">Fotos</span>';

const parrafos = document.createElement("p");
const span = document.createElement("span");

const texto = document.createTextNode("Hola ing");
const comentario = document.createComment("Comentario");

const clon = parrafo.cloneNode();
clon.textContent = "clon del primer comentario";

parrafo.id="parrafo_nodo";
parrafo.className = "title";
parrafo.style = "color: red; fontSize: 25px";

console.log(parrafo.isConnected());
parrafo.textContent = "esto es una prueba jaja";

bloque.appendChild(parrafo)
bloque.appendChild(span);
bloque.appendChild(texto);
bloque.appendChild(comentario);


//Aprezca una foto al dar clic en el boton
function mostrar_imagen(id) {
    img = document.getElementById(id);
    img.innerHTML = '<img src="https://geeksvalley.com/wp-content/uploads/2016/12/mcp3008.jpg" />';
    
}
 function ocultar_imagen(id) {
    img = document.getElementById(id);
    img.innerHTML = '';
}

//segunda imagen
function mostrar_foto(id) {
    img = document.getElementById(id);
    img.innerHTML = '<img src="https://www.mouser.mx/images/marketingid/2017/img/QFP-64_Microchip.png?v=052020.0915" />';
    
}
 function ocultar_foto(id) {
    img = document.getElementById(id);
    img.innerHTML = '';
}


//video
function mostrar_video(id) {
    img = document.getElementById(id);
    img.innerHTML = '<iframe  width="560" height="315" src="https://www.youtube.com/embed/H__t6h6iA48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> ';
    
}
 function ocultar_video(id) {
    img = document.getElementById(id);
    img.innerHTML = '';
}

function mostrar_video2(id) {
    img = document.getElementById(id);
    img.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/g1NRw99E8OY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    
}
 function ocultar_video2(id) {
    img = document.getElementById(id);
    img.innerHTML = '';
}


//Sugundo boton
function aparecerImagen(){
    const imagen = document.createElement("img");
    imagen.src= "img/9.jpg";
    imagen.style="width:100px; height:100px; border:none;";
    imagen.alt= "nano"
    let contenedor = document.createElement("div");
    contenedor.id = "div-imagen";
    contenedor.appendChild(imagen);
    document.getElementById("bloque").appendChild(contenedor);
    const boton2 = document.createElement("input");
    boton2.id = "boton2";
    boton2.value= "Borrar Imagen";
    boton2.type = "button";
    bloque.appendChild(boton2);
    boton2.addEventListener("click", function (e){
        e.preventDefault();
        borrarImagen();
        boton2.remove();
    });

    const boton = document.createElement("input");
boton.id = "boton";
boton.value = "Aparece Imagen";
boton.type = "button";
boton.addEventListener("click", function(e) {
    e.preventDefault();
    aparecerImagen();
});

    function borrarImagen(){
        let contenedor = document.getElementById("div-imagen");
        contenedor.remove();
    }
}

function ponerEstilo(){
    const parrafo = document.querySelector(".estilo1");
    console.log(parrafo);
    parrafo.className = "estilo1 estilo2 estilos3";
    console.log(parrafo.className);
}

function quitarEstilo(){
    const classess = document.querySelector(".estilo1");
    console.log(classess);
    classess.classList.remove("estilo3");
    console.log(classess);
}





//Tarea  en el cuaderno
//Buscar investigar que otros metodos o funciones se pueden usar 
//para modificar el dom