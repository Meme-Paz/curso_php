// Constante para guardar todos los elementos del formulario ajax
const form_ajax = document.querySelectorAll(".formAjax");

// Función para manejar el envío del formulario ajax
function enviar_formAjax(e) {
    e.preventDefault(); // Evitar que el formulario se envíe de la manera convencional

    // Pregunta al usuario si realmente desea enviar el formulario
    let enviar = confirm("¿Enviar formulario?");

    if (enviar == true) {
        // Crea un objeto FormData para recopilar los datos del formulario
        let data = new FormData(this);

        // Obtiene el método (GET o POST) del formulario
        let metodo = this.getAttribute("method");

        // Obtiene la URL de acción del formulario
        let accion = this.getAttribute("action");

        // Crea un objeto Headers
        let encabezado = new Headers();

        // Configuración para la solicitud Fetch
        let config = {
            method: metodo,   // Método de la solicitud (GET o POST)
            headers: encabezado,   // Encabezados de la solicitud
            mode: 'cors',   // Modo de solicitud (cors, no-cors, same-origin, etc.)
            cache: 'no-cache',   // Configuración de la caché de la solicitud
            body: data   // Datos que se envían en el cuerpo de la solicitud
        };

        // Realiza la solicitud Fetch con la configuración proporcionada
        // Envia una solicitud al servidor con los datos del formulario
        fetch(accion, config)
            .then(respuesta => respuesta.text())
            .then(respuesta => {
                // Muestra la respuesta recibida del servidor
                alert(respuesta);
            });
    }
}

// Asigna la función enviar_formAjax a todos los formularios seleccionados
form_ajax.forEach(formularios => {
    formularios.addEventListener("submit", enviar_formAjax);
});

