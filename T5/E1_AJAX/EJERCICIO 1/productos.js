document.getElementById("boton").addEventListener("click", leer_datos);
function leer_datos() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      const productos = JSON.parse(this.responseText);
      crearTablaProductos(productos);
    }
  };
  xhttp.open("GET", "E1_productos.json", true);
  xhttp.send();
}
function crearTablaProductos(productos) {
  var tabla = document.createElement("table");
  var keys = Object.keys(productos[0]);
  var encabezado = crearFila(keys, "th");
  tabla.appendChild(encabezado);
  productos.forEach(producto => {
    var fila = crearFila(Object.values(producto), "td");
    tabla.appendChild(fila);
  });

  document.getElementById("contenido").innerHTML = "";
  document.getElementById("contenido").appendChild(tabla);
}
function crearFila(datos, tipo){
  var fila = document.createElement("tr");
  for (var i = 0; i < datos.length; i++) {
    var celda = document.createElement(tipo);
    var texto = document.createTextNode(datos[i]);
    celda.appendChild(texto);
    fila.appendChild(celda);
  }
  return fila;
}