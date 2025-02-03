<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST">
    <input type="number" name="n1" id="n1">
    <input type="number" name="n2" id="n2">
    <button>Enviar consulta</button>
  </form>
  <p>Resultado: <span id="res"></span></p>
  <script>
    document.querySelector("form").addEventListener("submit", function(event){
      event.preventDefault();
      var n1 = document.getElementById("n1").value;
      var n2 = document.getElementById("n2").value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById("res").innerHTML = this.responseText;
        }
      };
      xhttp.open("POST", "E1_sumaPost.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("n1=" + n1 + "&n2=" + n2);
    });
  </script>
</body>
</html>