<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="styles.css" rel="stylesheet">
      <title>Block de notas</title>  
</head>
<body>
<center><h1>Bloc de notas</h1>
<hr>
      <?php  

      $Nombre = $_POST['nombre'];
      $Texto = $_POST['texto'];

      $ruta = "archivos/$Nombre.txt";

      $miarchivo = fopen($ruta,'w');

      fwrite($miarchivo, 
            "Nombre: ".$Nombre.
            " Texto: ".$Texto);
            echo "<br>";
            echo "<strong>MENSAJE: </strong><br>";
            echo "<br>";
            echo "Tu archivo se ha guardado correctamente con el nombre <strong>\"$Nombre.txt\"</strong><br>";
            echo "Puedes verlo en el directorio ";
      fclose($miarchivo); 

      ?> 
</body>
<footer>
<br> 
<br>
<a href="index.html"><button id="btn-crear" type="button">Nuevo</button></a>
<a href="ver.html"><button id="btn-volver" type="button">Ver archivos</button></a>
</center>
</footer>
</html>



