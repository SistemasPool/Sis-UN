function procesa_formulario(){
    var carnet=document.getElementById("carnet").value
    var url="select_rciv.php";
    $.ajax({
        type:"post",
        url:url,
        data:{carnet:carnet},
        success:function(datos){
            $("#mostrardatos").html(datos);
        }
    }
)
}