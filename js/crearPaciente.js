var formularioPaciente = document.getElementById('registrarPaciente');
var respuesta = document.getElementById('respuesta');


formularioPaciente.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formularioPaciente);

    console.log(datos.get('nombresPac'))
    console.log(datos.get('rutPac'))

    fetch('../Clases/crearPaciente.php',{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {

            if(data === 'siExiste'){
                alert("Ya existe un usuario para este Rut");
                respuesta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Existe
                </div>
                `
            }
            if(data==='usuarioCreado'){
                alert("Se ha creado correctamente el usuario para el rut "+ datos.get('rutPac'));
                window.location="../html/iniciarSesion.php";
            }
        } )
})
