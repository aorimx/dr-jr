
function post(url,data,successCallback,failCallback)//QUITAR DE AQUÍ
{
    console.log(url);
    $.ajax({
        'url':url,
        type:'POST',
        'data':data,
        cache:false,
        contentType:false,
        processData:false,
         
        //dataType:"json"
        success:successCallback, 
        error: failCallback
    });
}

function contactoEnviarMensajeBtn_click()
{
	console.log("enviando mensaje");
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
    formData.append('apellidos',   $("input[name='apellidos']").val() );
    formData.append('email',   $("input[name='email']").val() );
    formData.append('asunto',  $("select[name='asunto']").val() );
    formData.append('mensaje',   $("textarea[name='mensaje']").val() );

	post('send-form.php',formData,function(data){
        swal({
            title:"¡ LISTO !",
            text:"¡ gracias por tu mensaje, nos comunicaremos con usted a la brevedad posible",
            type: "success",
            confirmButtonColor: '#55b7e6',
        });
		console.log("Exito al enviar el corre");
		console.log(data);
	},function(data){
		console.log("Error al enviar el corre");
		console.log(data);
    });	
    return false;
}


function contactoEnviarDatos(){
    console.log("enviando datos");
	var formData = new FormData();
    formData.append('nombre',   $("input[name='nombre']").val() );
    formData.append('apellidos',   $("input[name='apellidos']").val() );
    formData.append('email',   $("input[name='email']").val() );
    formData.append('fecha',   $("input[name='fecha']").val() );
    formData.append('pais',   $("select[name='pais']").val() );
    formData.append('estado',   $("input[name='estado']").val() );
    formData.append('asunto',   $("select[name='asunto']").val() );
    formData.append('mensaje',   $("textarea[name='mensaje']").val() );

	post('send-data.php',formData,function(data){
		console.log("Exito al enviar datos");
		console.log(data);
	},function(data){
		console.log("Error al enviar datos");
		console.log(data);
    });	
    return false;
}

