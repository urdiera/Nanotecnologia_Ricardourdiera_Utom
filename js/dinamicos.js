function mover(){
    window.scroll({
        top: 2100,  //es el movimiento en el eje y
        left: 0,    //Es el movimieno e el eje x
        behaviour: 'smooth'  // es la forma en que se mueve, smooth, instant
    });
}

function pintar(){
    let simbolo = document.getElementById("simbolo");
    simbolo.style.color = '#FF0000';
}

function despintar(){
    let simbolo = document.getElementById("simbolo");
    simbolo.style.color = '#ffffff';
}

window.onscroll = function(){desaparecer()};

function desaparecer(){
    let simb = document.getElementById("simbolo2");
    if(document.body.scrollTo > 200 || document.documentElement.scrollTo > 300){
        simb.style.color = '#AA0000';
        $('#imagen2').hide();
        setTimeout(function(){
            $('#imagen2').show();
        }, 1000);
    }else{
        simb.style.color ='#CCFFDD';
    
  }
}

