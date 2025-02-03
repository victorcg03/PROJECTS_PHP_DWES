function leerDatos(){
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      const datosJSON = JSON.parse(this.responseText);
      const lista = document.getElementById("lista");
      lista.inerHTML = "";
      datosJSON.forEach(userInfo => {
        const listaItem = document.createElement("li");
        listaItem.textContent = `${userInfo.id} - ${userInfo.name} - ${userInfo.username}`;
        lista.appendChild(listaItem);
      });
    }
  }
  const url = "usuariosAddEventListener.json";;
  xhttp.open("GET", url, true);
  xhttp.send();
}
document.getElementById("boton").addEventListener("click", leerDatos);