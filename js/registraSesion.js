
var formIniciarSesion = document.getElementById('formRegistrarSesion')
console.log('Datos de Registro')

formIniciarSesion.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formIniciarSesion);

    console.log('Datos de Registro')
    console.log(datos.get('registroSesionTexto'))
    console.log(datos.get('resumenSemana'))
    console.log(datos.get('actividadesPsico'))
    console.log(datos.get('idConsulta'))


    fetch('../Clases/registroSesion.php',{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {

            if(data === 'exito'){
                alert("Datos Registrados");
                window.location="../html/listadoPacientes.php";
            }

            if(data==='error'){
                alert("Error al Registrar: Avisar a Sistemas");
            }

            console.log(data)
        } )
})
