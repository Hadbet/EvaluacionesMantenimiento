
function obtenerValores() {
    var preguntaUno = document.getElementById('txtPreguntaUno').value;
    var preguntaDos = document.getElementById('txtPreguntaDos').value;
    var preguntaTres = document.getElementById('txtPreguntaTres').value;
    var preguntaCuatro = document.getElementById('txtPreguntaCuatro').value;
    var preguntaCinco = document.getElementById('txtPreguntaCinco').value;
    var preguntaSeis = document.getElementById('txtPreguntaSeis').value;

    var preguntaSiete = document.querySelector('input[name="txtPreguntaSiete"]:checked') ? document.querySelector('input[name="txtPreguntaSiete"]:checked').value : '';
    var preguntaOcho = document.querySelector('input[name="txtPreguntaOcho"]:checked') ? document.querySelector('input[name="txtPreguntaOcho"]:checked').value : '';
    var preguntaNueve = document.querySelector('input[name="txtPreguntaNueve"]:checked') ? document.querySelector('input[name="txtPreguntaNueve"]:checked').value : '';
    var preguntaDiez = document.querySelector('input[name="txtPreguntaDiez"]:checked') ? document.querySelector('input[name="txtPreguntaDiez"]:checked').value : '';
    var preguntaOnce = document.querySelector('input[name="txtPreguntaOnce"]:checked') ? document.querySelector('input[name="txtPreguntaOnce"]:checked').value : '';

    return {
        preguntaUno,
        preguntaDos,
        preguntaTres,
        preguntaCuatro,
        preguntaCinco,
        preguntaSeis,
        preguntaSiete,
        preguntaOcho,
        preguntaNueve,
        preguntaDiez,
        preguntaOnce
    };
}

function validarCampos() {
    var valores = obtenerValores();

    if (!valores.preguntaUno) {
        alert('Por favor, llena el campo de la pregunta uno.');
    } else if (!valores.preguntaDos) {
        alert('Por favor, llena el campo de la pregunta dos.');
    } else if (!valores.preguntaTres) {
        alert('Por favor, llena el campo de la pregunta tres.');
    } else if (!valores.preguntaCuatro) {
        alert('Por favor, llena el campo de la pregunta cuatro.');
    } else if (!valores.preguntaCinco) {
        alert('Por favor, llena el campo de la pregunta cinco.');
    } else if (!valores.preguntaSeis) {
        alert('Por favor, llena el campo de la pregunta seis.');
    } else if (!valores.preguntaSiete) {
        alert('Por favor, selecciona una opción para la pregunta siete.');
    } else if (!valores.preguntaOcho) {
        alert('Por favor, selecciona una opción para la pregunta ocho.');
    } else if (!valores.preguntaNueve) {
        alert('Por favor, selecciona una opción para la pregunta nueve.');
    } else if (!valores.preguntaDiez) {
        alert('Por favor, selecciona una opción para la pregunta diez.');
    } else if (!valores.preguntaOnce) {
        alert('Por favor, selecciona una opción para la pregunta once.');
    }

    var formData = new FormData();
    formData.append('nombre', 'Hadbet Ayari Altamirano');
    formData.append('nomina', '00001606');
    formData.append('comentarios', document.getElementById("txtComentario").value);
    formData.append('respuestaUno', valores.preguntaUno);
    formData.append('respuestaDos', valores.preguntaDos);
    formData.append('respuestaTres', valores.preguntaTres);
    formData.append('respuestaCuatro', valores.preguntaCuatro);
    formData.append('respuestaCinco', valores.preguntaCinco);
    formData.append('respuestaSeis', valores.preguntaSeis);
    formData.append('respuestaSiete', valores.preguntaSiete);
    formData.append('respuestaOcho', valores.preguntaOcho);
    formData.append('respuestaNueve', valores.preguntaNueve);
    formData.append('respuestaDiez', valores.preguntaDiez);
    formData.append('respuestaOnce', valores.preguntaOnce);
    formData.append('cuestionario', cuestionario);


    fetch('https://grammermx.com/Mantenimiento/Evaluaciones/dao/daoInsertarEvaluacion.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let timerInterval;
                Swal.fire({
                    title: "¡Gracias!.Se finalizo la evaluacion",
                    html: "Te regresaremos a la pagina <b></b> milliseconds.",
                    timer: 1500,
                    timerProgressBar: true,
                    icon: "success",
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                            timer.textContent = `${Swal.getTimerLeft()}`;
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.reload();
                    }
                });
            } else {
                console.log("Hubo un error en la operación");
                console.log("Las unidades de almacenamiento que fallaron son: ", data.message);
            }
        });
}
