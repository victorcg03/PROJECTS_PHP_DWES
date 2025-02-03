<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Número aleatorio: <span id="numero"></span></p>
  <script>
    setInterval(loadDoc, 5000);
    function loadDoc(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById("numero").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "E1_aleatorio.php", true);
      xhttp.send();
    }
  </script>
</body>
</html>