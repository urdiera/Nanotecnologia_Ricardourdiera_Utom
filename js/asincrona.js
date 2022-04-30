//inicializar el query

//funcion con flecha
//const hola = () => console.log("Hola mundo");
//Funcion con nombre
//function buscar (query){}


$(document).ready(function(){
    ocultar();
    mostrar();
});

//calback
function ocultar(){
    setTimeout(function(){
        $('#img_derecha').hide(2000, function(){
            console.log("Ya se ha ocultado :D");
        });
    }, 3000)
}

function mostrar(){
    setTimeout(function(){
        $('#img_derecha').show(2000);
    }, 6000);
    fecha();
}

function fecha(){
    const saluda = ()=>{
        console.log("Hello word jajaja");
    };
    setTimeout(saluda, 2000);
    promesa1("https://www.microsoft.com/es-mx");
}

//promesas
function promesa1(url){
    const promise = fetch(url);
    promise.then(resultado => {
        console.log("Resultado: " + resultado)
        ocultar();
    })
    .catch(error => {
        console.log("error: " + error);
    })
}

//Agregar la extension moesif cors// acess control allow origin-ubblock 