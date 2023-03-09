$(function () {
    $("#frmReg").submit(function(){
        var datos   = $(this).serialize();
        var url     = $(this).attr("action");
        $.post(url, datos, function(e){
            Swal.fire(
                e.mensaje,
                '',
                e.icono
              )
            $("#frmReg").trigger("reset");
        },'json');
        return false;
    });
    $("#frmRegistrar").submit(function(){
        var datos   = $(this).serialize();
        var url     = $(this).attr("action");
        $.post(url, datos, function(e){
            Swal.fire(
                e.mensaje,
                '',
                e.icono
              )
            $("#frmRegistrar").trigger("reset");
        },'json');
        return false;
    });

    $("#frmRegC").submit(function(){
        var datos   = $(this).serialize();
        var url     = $(this).attr("action");
        $.post(url, datos, function(e){
            Swal.fire(
                e.mensaje,
                '',
                e.icono
              )
            $("#frmRegC").trigger("reset");
        },'json');
        return false;
    });
    $("#frmRegR").submit(function(){
        var datos   = $(this).serialize();
        var url     = $(this).attr("action");
        $.post(url, datos, function(e){
            Swal.fire(
                e.mensaje,
                '',
                e.icono
              )
            $("#frmRegR").trigger("reset");
        },'json');
        return false;
    });
    $("#frmEdit").submit(function(){
        var datos   = $(this).serialize();
        var url     = $(this).attr("action");
        $.post(url, datos, function(e){
            Swal.fire(
                e.mensaje,
                '',
                e.icono
              )
            $("#frmEdit").trigger("reset");
        },'json');
        return false;
    });
    $("#frmEditC").submit(function(){
        var datos   = $(this).serialize();
        var url     = $(this).attr("action");
        $.post(url, datos, function(e){
            Swal.fire(
                e.mensaje,
                '',
                e.icono
              )
        
        },'json');
        return false;
    });
    $("#frmEditR").submit(function(){
        var datos   = $(this).serialize();
        var url     = $(this).attr("action");
        $.post(url, datos, function(e){
            Swal.fire(
                e.mensaje,
                '',
                e.icono
              )
        
        },'json');
        return false;
    });
    $("#apellidos").keyup(function(){
        var x = $(this).val();
        var url = "?controlador=cliente&accion=consultarByApellido";
        $.post(url, "apellidos="+x, function(e){
            $("#resultado").html(e.mensaje);
        },'json');
    });
    $("#mat").keyup(function(){
        var x = $(this).val();
        var url = "?controlador=proveedores&accion=consultarByMatricula";
        $.post(url, "matricula="+x, function(e){
            $("#resultado").html(e.mensaje);
        },'json');
    });

    $("#apellidos").keyup(function() {
        var apellidos = $(this).val();
        var url = "?controlador=cliente&accion=consultarByApellido";
        $.post(url, "apellidos=" + apellidos, function(e) {
            if (apellidos == '') {
                $("#resultado").html('');
            } else {
                $("#resultado").html(e.mensaje);
            }
        }, 'json');
    });
    $("#fecha").keyup(function(){
        var fecha = $(this).val();
        var url ="?controlador=productos&accion=consultarXfecha";

        $.post(url, "fecha="+fecha, function(e){
            if(fecha == ''){
                $("#resultado").html('');
            }else{
                $("#resultado").html(e.mensaje);
            }
        }, 'json');
    });
    
    $("#codigo").keyup(function(){
        var codigo = $(this).val();
        var url ="?controlador=productos&accion=consultarXcodigo";

        $.post(url, "codigo="+codigo, function(e){
            if(codigo == ''){
                $("#resultado").html('');
            }else{
                $("#resultado").html(e.mensaje);
            }
        }, 'json');
    });
 
    $("#procesar").submit(function(){
        var datos = $(this).serialize(); 
        var url = $(this).attr("action"); 
       
        $.post(url , datos, function(e){
            if(e.icono == "error"){
                Swal.fire(
                    "Venta  NO procesada ",
                    '',
                    e.icono
                )
            }else{
                window.location.href = e.URL;
            }
           
           
        },'json');
        return false;
   });
    $("#frmLogin").submit(function(){
        var datos = $(this).serialize(); 
        var url = $(this).attr("action"); 
       
        $.post(url , datos, function(e){
            if(e.icono == "error"){
                Swal.fire(
                    e.mensaje,
                    '',
                    e.icono
                )
            }else{
                window.location.href = e.URL;
            }
           
           
        },'json');
        return false;
   });

   $(document).on('click', '.eliminar', function(e){
    var url = $(this).attr("href");
    var elemento = $(this);
    
    Swal.fire({
        title: '¿estas seguro que quieres hacer esto?',
        text: "No podras revertir los cambios",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, quiero borrarlo',
        cancelButtonText: 'No, quiero conservarlo'
      }).then((result) => {
        if (result.isConfirmed) {
            $.get(url,'',
             function(e){
                $(this).closest("tr").remove(); 
                Swal.fire(
                    // 'Eliminado',
                    // 'El cliente ha sido eliminado.',
                    // 'success'
                    e.mensaje,
                    '',
                    e.icono
                  )
            },'json');
        }
      })
    return false;
});



});
