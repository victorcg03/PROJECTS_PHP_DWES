function categorias() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var lista = document.createElement("ul");
      var cats = JSON.parse(this.response);
      var salida = "<ul>";
      for (var i = 0; i < cats.length; i++) {
        var elem = document.createElement("li");
        elem.innerHTML = cats[i]["nombre"];
        lista.appendChild(elem);
      }
      var body = document.getElementById("principal");
      body.innerHTML = "";
      body.appendChild(lista);
    }
  }
  xhttp.open("GET", "ajax_categoriasJSONdatos.php", true);
  xhttp.send();
  return false;
}

