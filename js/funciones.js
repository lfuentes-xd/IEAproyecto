//estos son para borrar
$(document).ready(function () {
    $(document).on('click', '#btn_eliminar', function () {
        var id2 = $(this).closest('tr').find('#val1').text();

        $('#exampleModalE').modal('show');

        $('#id2').val(id2);
    });
});

//este es para ocultar el modal de borrar
$(document).ready(function () {
    $(document).on('click', '#quita', function () {
        $('#exampleModalE').modal('hide')
    });
});
//este es para ocultar el modal de borrar
$(document).ready(function () {
    $(document).on('click', '#quitar', function () {
        $('#exampleModalE').modal('hide')
    });
});

//para el modal de cambiar
$(document).ready(function () {
    $(document).on('click', '#cambiar', function () {
        var id = $(this).closest('tr').find('#val1').text();
        var nombre = $(this).closest('tr').find('#val2').text();
        var precio = $(this).closest('tr').find('#val3').text();
        var cantidad = $(this).closest('tr').find('#val4').text();
        var ex = $(this).closest('tr').find('#val5').text();

        $('#edit').modal('show');


        $('#valor1').val(id);
        $('#valor2').val(nombre);
        $('#valor3').val(precio);
        $('#valor4').val(cantidad);
        $('#valor5').val(ex);

    });
});
//para cerrar el modal de cambiar
$(document).ready(function () {
    $(document).on('click', '#ce2', function () {
        $('#edit').modal('hide')
    });
});

//para cerrar el modal de cambiar 
$(document).ready(function () {
    $(document).on('click', '#ce', function () {
        $('#edit').modal('hide')
    });
});

//alertify para cancelar 
function cancelar(){
    alertify.set('notifier','position', 'top-center');
    alertify.error('operacion cancelada');
}

//alertify de confirmado
function adelante(){
    alertify.set('notifier','position', 'top-center');
    alertify.success('operacion realizada');
}

//para el modal de un nuevo registro 
$(document).ready(function(){
    $(document).on('click','#nuevo',function(){
        $('#exampleModal').modal('show')
    }); 
});

//para cerrar el modal de nuevo registro
$(document).ready(function(){
    $(document).on('click','#cerrar',function(){
        $('#exampleModal').modal('hide')
    });
});

$(document).ready(function(){
    $(document).on('click','#cerrar2',function(){
        $('#exampleModal').modal('hide')
    });
});


 