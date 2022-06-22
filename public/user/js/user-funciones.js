// Estilos Modal del reporte
$("#reportdet").click(function () {
    $("#modalRep").find(".form-group").css("with", "100px");
});

//funcion para previzualizar la foto
$(document).ready(function(e){
    $('#img_usu').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#imagenSeleccionada').attr('src',e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
});
