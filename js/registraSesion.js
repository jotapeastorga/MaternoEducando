
var formIniciarSesion = document.getElementById('formRegistrarSesion')


formIniciarSesion.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formIniciarSesion);

    console.log('Datos de ANulare')
    console.log(datos.get('mesCita'))
    console.log(datos.get('diaCita'))
    console.log(datos.get('rutCita'))
    console.log(datos.get('bloqueCita'))
    console.log(datos.get('estadoCita'))
    console.log(datos.get('nombreCita'))
    console.log(datos.get('registroSesionTexto'))
    console.log(datos.get('resumenSesionTexto'))


    fetch('../Clases/registroSesion.php',{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {

            if(data === 'exito'){
                alert("Datos Registrados");
                window.location="../html/prxHorPro.php";
            }

            if(data==='error'){
                alert("Error al Registrar: Avisar a Sistemas");
            }

            console.log(data)
        } )
})
