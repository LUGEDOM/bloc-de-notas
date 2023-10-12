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
<center><h1>Bloc de notas</h1></center>
<hr>
    <?php 
        $listar = null;
        $directorio = opendir("archivos/");

        while ($elemento = readdir($directorio))
        {
            if ($elemento != '.' && $elemento != '..')
            if (is_dir("archivos/".$elemento))
            {
                $listar .= "<li><a href='archivos/$elemento' target='_blank'>$elemento</a></li>";
            }
            else   
            { 
            $listar .= "<li><a href='archivos/$elemento' target='_blank'>$elemento</a></li>";
            }

        }
    
    ?>
<div class="directorio">
<h2>Directorio de archivos</h2>
<ul style="padding-left: 32px;padding-right: 32px;">
    <?php echo "$listar"  ?>
</ul>
</div>
<center><a href="index.html"><button id="btn-volver"type="button">Inicio</button></a></center>
</body>
</html>