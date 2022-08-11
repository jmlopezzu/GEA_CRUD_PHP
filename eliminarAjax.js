
function eliminarConAjax(id){
    if(confirm("¿Estás seguro de borrar este registro?")){
        $.ajax({
            type:'post',
            url:'eliminarDatos.php',
            data:{eliminar_dato:id},
            success:function(data){
                $('#borrar'+id).hide();
            }
        })

    }   
}
