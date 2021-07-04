
var formIniciarSesion = document.getElementById('formIniciarSesion')
var respuestaLogin = document.getElementById('respuestaLogin')


formIniciarSesion.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formIniciarSesion);

    console.log(datos.get('rutPacIni'))
    console.log(datos.get('pasPacIni'))

    fetch('../Clases/validarInicioSesion.php',{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {

            if(data === 'exito'){
                window.location="../html/sesionCli.php";
               /* respuesta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Existe
                </div>
                `*/
            }
            if(data === 'profesional'){
                window.location="../html/sesionPro.php";
                /* respuesta.innerHTML = `
                 <div class="alert alert-danger" role="alert">
                     Existe
                 </div>
                 `*/
            }

            if(data==='error'){
                alert("Favor valide la información");
                respuestaLogin.innerHTML = `
                    <div class="inputFormulario" background-color="#00FF00">
Datos incorrectos
                    </div>
                `
            }
        } )
})