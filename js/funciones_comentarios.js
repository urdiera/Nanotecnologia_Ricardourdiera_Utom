$(document).ready(function() {

    //guardar comentario en la base de datos
    $(document).on('click', '#btn_comentarios', function(e) {
        e.preventDefault();
        var nombre = $('#name').val();
        var correo = $('#email').val();
        var comentario = $('#comentario').val();
        var fec = new Date();
        var fecha = fec.getFullYear() + "-" + (fec.getMonth()+1) + "-" + fec.getDate();
        $.ajax({
            url:'funciones_php/funciones.php',
            type: 'POST',
            data: {
                'save': 1,
                'name': nombre,
                'email': correo,
                'comment': comentario,
                'date': fecha,
            },
            success: function(respuesta){
            $('#name').val('');
            $('#email').val('');
            $('#comentario').val('');
            $('#area_comentarios').append(respuesta);
            }
        })
    
    });

});