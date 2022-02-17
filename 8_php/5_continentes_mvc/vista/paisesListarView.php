<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body>
    `<h1>Pises de <?php echo $continente?> </h1>
    <ul>
        <?php
        foreach($paises as $pais){
            echo "<li><a href='paisesListarController.php?idContinente=".$continente->getContinenteId(). "'>".$continente->getContinenteNombre()."</li>";
        }
        ?>
    </ul>
</body>
</html>