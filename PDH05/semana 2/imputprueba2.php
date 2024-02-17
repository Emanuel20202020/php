<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>datos transferidos del formulario</h1>
    <?php 
//form loging.php --------> transferencia de datos
    echo "el usuario ingresado es...";
    echo "<br>";
    echo $_POST['username'];   //datos probienen del formulario
    ?>
</body>
</html>