const climaContainer = document.querySelector('#clima-container');
const ubicacion = document.querySelector('#ubicacion');

if (climaContainer && ubicacion) {
    const ciudad = ubicacion.textContent.split(',')[0];
    fetch(`/api/clima/${ciudad}`)
        .then(response => response.json())
        .then(data => {
            const temperaturaValor = document.querySelector('#temperatura-valor');
            const temperaturaDescripcion = document.querySelector('#temperatura-descripcion');
            const iconoAnimado = document.querySelector('#icono-animado');
            const vientoVelocidad = document.querySelector('#viento-velocidad');
            temperaturaValor.textContent = `${Math.round(data.main.temp)} ° C`;
            temperaturaDescripcion.textContent = data.weather[0].description;
            iconoAnimado.src = `http://openweathermap.org/img/wn/${data.weather[0].icon}.png`;
            vientoVelocidad.textContent = `${data.wind.speed} m/s`;
        })
        .catch(error => console.error(error));
}