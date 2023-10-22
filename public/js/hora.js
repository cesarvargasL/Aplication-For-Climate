function mostrarFecha() {
    var fecha = new Date();
    var dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    var dia = dias[fecha.getDay()];
    var diaNumero = fecha.getDate();
    var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
    var mes = meses[fecha.getMonth()];
    var año = fecha.getFullYear();
    var fechaCompleta = dia + ", " + diaNumero + " de " + mes + " de " + año;
    document.getElementById("fecha-actual").innerHTML = fechaCompleta;
  }
  setInterval(mostrarFecha, 1000);

function mostrarHora() {
    var fecha = new Date();
    var hora = fecha.getHours();
    var minutos = fecha.getMinutes();
    var horaCompleta = hora + ":" + minutos;
    document.getElementById("hora-actual").innerHTML = horaCompleta;
  }
  setInterval(mostrarHora, 1000);