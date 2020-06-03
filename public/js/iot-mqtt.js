var client = "ws" + Math.random; // Create a client instance

var client = new Paho.MQTT.Client("34.202.43.28", 9001, client); // set callback handlers

var sensores = {
    Temperatura: '',
    VelocidadViento: '',
    Radiacion: '',
    PresionAtmoferica: '',
    Humedad: '',
    Precipitacion: '',
    DireccionViento: '',
    CalidadAire: '',
}

client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived; // connect the client

setInterval(guardar, 3000);

client.connect({
    onSuccess: onConnect

});

function onConnect() {
    // Once a connection has been made, make a subscription and send a message.
    console.log("Conectado MQTT.Websoket");
    client.subscribe("IoT/Temperatura");
    client.subscribe("IoT/VelocidadViento");
    client.subscribe("IoT/Radiacion");
    client.subscribe("IoT/PresionAtmoferica");
    client.subscribe("IoT/Humedad");
    client.subscribe("IoT/DireccionViento");
    client.subscribe("IoT/Precipitacion");
    client.subscribe("IoT/CalidadAire");
} // called when the client loses its connection


function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
        console.log("conexion perdida: " + responseObject.errorMessage);
    }

} // called when a message arrives


function onMessageArrived(message) {
    console.log(message.destinationName + ": " + message.payloadString);

    switch (message.destinationName) {
        case "IoT/Temperatura":
            var valor = parseFloat(message.payloadString);
            var gaugeElement = document.getElementById('canvas-temperatura');
            gaugeElement.setAttribute('data-value', valor);
            sensores.Temperatura = valor;
            console.log(message.payloadString);
            break;
        case "IoT/VelocidadViento":
            var valor = parseFloat(message.payloadString);
            var gaugeElement = document.getElementById('canvas-velocidad-viento');
            gaugeElement.setAttribute('data-value', valor);
            sensores.VelocidadViento = valor;
            console.log(message.payloadString);
            break;
        case "IoT/Radiacion":
            var valor = parseFloat(message.payloadString);
            var gaugeElement = document.getElementById('canvas-radiacion');
            gaugeElement.setAttribute('data-value', valor);
            sensores.Radiacion = valor;
            console.log(message.payloadString);
            break;
        case "IoT/PresionAtmoferica":
            var valor = parseFloat(message.payloadString);
            var gaugeElement = document.getElementById('canvas-presion-atmoferica');
            gaugeElement.setAttribute('data-value', valor);
            sensores.PresionAtmoferica = valor;
            console.log(message.payloadString);
            break;
        case "IoT/Humedad":
            var valor = parseFloat(message.payloadString);
            var gaugeElement = document.getElementById('canvas-humedad');
            gaugeElement.setAttribute('data-value', valor);
            sensores.Humedad = valor;
            console.log(message.payloadString);
            break;
        case "IoT/Precipitacion":
            var valor = parseFloat(message.payloadString);
            var gaugeElement = document.getElementById('canvas-precipitacion');
            gaugeElement.setAttribute('data-value', valor);
            sensores.Precipitacion = valor;
            console.log(message.payloadString);
            break;
        case "IoT/DireccionViento":
            var valor = parseFloat(message.payloadString);
            var gaugeElement = document.getElementById('canvas-direccion-viento');
            gaugeElement.setAttribute('data-value', valor);
            sensores.DireccionViento = valor;
            console.log(message.payloadString);
            break;
        case "IoT/CalidadAire":
            var valor = parseFloat(message.payloadString);
            var gaugeElement = document.getElementById('canvas-calidad-aire');
            gaugeElement.setAttribute('data-value', valor);
            sensores.CalidadAire = valor;
            console.log(message.payloadString);
            break;
    }
}

function guardar() {
    //console.log(sensores);
    if (sensores.Temperatura !== '' && sensores.VelocidadViento !== '' && sensores.Radiacion !== '' && sensores.PresionAtmoferica !== '' && sensores.Humedad !== '' && sensores.Precipitacion !== '' && sensores.DireccionViento !== '' && sensores.CalidadAire !== '') {
        const sensoresNuevo = sensores;
        sensores = {
            Temperatura: '',
            VelocidadViento: '',
            Radiacion: '',
            PresionAtmoferica: '',
            Humedad: '',
            Precipitacion: '',
            DireccionViento: '',
            CalidadAire: ''
        };
        
        axios.post('/sensores', sensoresNuevo)
            .then(response => {
                // Obtenemos los datos
                console.log("response", response)
            })
            .catch(e => {
                // Capturamos los errores
                console.log(e)
            })
    } else {
        console.log('Campos vacíos');
    }
}





