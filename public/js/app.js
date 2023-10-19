document.addEventListener('DOMContentLoaded', () => {
  let temperaturaValor = document.getElementById('temperatura-valor');
  let temperaturaDescripcion = document.getElementById('temperatura-descripcion');
  let ubicacion = document.getElementById('ubicacion');
  let vientoVelocidad = document.getElementById('viento-velocidad');

  document.getElementById('username').addEventListener('change', function() {
      const selectedUserId = this.value; // Obtener el ID de usuario seleccionado
      fetch(`/obtenerCiudad/${selectedUserId}`)
          .then(response => response.json())
          .then(data => {
              const ciudad = data.ciudad; // Obtener la ciudad del usuario
              const url = `https://api.openweathermap.org/data/2.5/weather?q=${ciudad}&lang=es&units=metric&appid=c83f26f0e4757dff05ca66433d246020`;
              return fetch(url);
          })
          .then(response => response.json())
          .then(data => {
              let temp = Math.round(data.main.temp);
              temperaturaValor.textContent = `${temp} ° C`;

              let desc = data.weather[0].description;
              temperaturaDescripcion.textContent = desc.toUpperCase();

              ubicacion.textContent = data.name + "," + data.sys.country;

              vientoVelocidad.textContent = `${data.wind.speed} m/s`;

              let iconCode = data.weather[0].icon;
              const urlIcon = `http://openweathermap.org/img/wn/${iconCode}.png`;
              let icono = document.getElementById('icono-animado');
              icono.src = urlIcon;

              console.log(data);
          })
          .catch(error => console.error('Error:', error));
  });
});