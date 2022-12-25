
var formIniciarSesion = document.getElementById('formEstadoAnimo')
console.log('Datos de Registro estado de Animo')

formIniciarSesion.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formIniciarSesion);

    console.log('Datos de Registro')
    console.log(datos.get('resumenDia'))
    console.log(datos.get('emocionDia'))
    console.log(datos.get('comentariosEstadoAnimo'))
    console.log(datos.get('idConsulta'))
    console.log(datos.get('idSesion'))




    fetch('../Clases/registraEstadoAnimo.php',{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {

            if(data === 'exito'){
                alert("Datos Registrados");
                window.location="../html/sesionCli.php";
            }

            if(data==='error'){
                alert("Error al Registrar: Avisar a Sistemas");
            }

            console.log(data)
        } )
})
