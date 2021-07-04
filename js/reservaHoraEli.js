var buscarHoraEli = document.getElementById('reservarHoraEli')

    buscarHoraEli.addEventListener('submit', function (e) {
        e.preventDefault();

        var fecha = new FormData(buscarHoraEli);
        var arrayDeCadenas = fecha.get('diaReserva').split("-");
        var bloque = fecha.get('bloqueEli');


        for (var i = 0; i < arrayDeCadenas.length; i++) {
            console.log(arrayDeCadenas[i]);
        }
        var anno = arrayDeCadenas[0];
        var mes = arrayDeCadenas[1];
        var dia = arrayDeCadenas[2];

        console.log("Eli")
        console.log("dia" + dia)
        console.log("mes" + mes)
        console.log("año" + anno)


        const datos = new FormData();
        datos.append('dia', dia);
        datos.append('mes', mes);
        datos.append('anno', anno);
        datos.append('bloque', bloque);


        fetch('../Clases/reservaHoraEli.php', {
            method: 'POST',
            body: datos
        })
            .then(res => res.json())
            .then(data => {

                if (data === 'sinHoras') {
                    alert("sin horas disponibles");
                    console.log(data)


                }

                if (data === 'sinSesion') {
                    alert("Favor inicie Sesion");
                    console.log(data)
                    window.location = "../html/iniciarSesion.php";


                }

                if(data === 'reservaExitosa'){
                    alert("Reserva Exitosa Para el " + dia +"-"+mes+"-"+anno);
                    console.log(data)
                }

                if(data === 'errorAlReservar'){
                    alert("Reserva Exitosa Para el " + dia +"-"+mes+"-"+anno);
                    console.log(data)
                }

            })
    })

