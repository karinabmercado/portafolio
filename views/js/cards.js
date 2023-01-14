$(".tarjetas").on("click", ".btnEditCard", function(){
    let idCard = $(this).attr("idCard");
    let datos = new FormData();
	datos.append("idCard", idCard);
	$.ajax({
		url: "controllers/editar.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){
            console.log(respuesta["nombre"]);
            $("#editarNombreProyecto").val(respuesta["nombre"]);
            $("#editarDescripcionProyecto").val(respuesta["descripcion"]);
            $("#editarNombreImagenProyecto").val(respuesta["imagen"]);
            $("#editarUrlProyecto").val(respuesta["url"]);
            $("#idCard").val(respuesta["id"]);

     	}

	})
})