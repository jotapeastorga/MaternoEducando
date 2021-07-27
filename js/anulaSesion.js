
var formIniciarSesion = document.getElementById('formAnularSesion')


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


    fetch('../Clases/anularSesion.php',{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {

            if(data === 'exito'){
                alert("Sesion Anulada");
                window.location="../html/home.php";
            }

            if(data==='error'){
                alert("Error al Anular: Avisar a Sistemas");
            }

            console.log(data)
        } )
})
