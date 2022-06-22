//funcion para cambiar el color y estilos cuando se pasa el cursor sobre boton de seleccionar archivo
$("form").on("change", ".file-upload-field", function () {
    $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
})



//funcion para cambiar de color el header y footer del modal 
$("#modal_buton").click(function () {
    $("#modalDocumentacion").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalDocumentacion").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalPoliticas").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalPoliticas").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalFoto").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalFoto").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalRegion").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalRegion").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalReferencias").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalReferencias").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalDependientes").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalDependientes").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalPrecartilla").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalPrecartilla").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalCertificado").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalCertificado").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalActaNaci").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalActaNaci").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalAntecePenales").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalAntecePenales").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalCompDomici").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalCompDomici").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalCartasReco").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalCartasReco").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalCurp").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalCurp").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalInne").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalInne").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalRfc").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalRfc").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalTerminos").find(".modal-header").css("background", "linear-gradient(to left, #ffffff, #DAA520");
    $("#modalTerminos").find(".modal-footer").css("background", "linear-gradient(to left, #ffffff, #DAA520");
});
