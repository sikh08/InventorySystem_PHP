<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/formulario/css/style.css" type="text/css">
    <title>Graficas</title>
</head>
<body>
    <fieldset>
        <legend>Graficas</legend>
        <div class="box">
            <form action="./productos_mayor_cantidad.php" method="post">
                <input id="boton" type="submit" value="productos con mayor cantidad(stock)">
            </form>

            <form action="./productos_menor_cantidad.php" method="post">
                <input id="boton" type="submit" value="productos con menor cantidad(stock)">
            </form>

            <form action="./productos_mas_vendidos.php" method="post">
                <input id="boton" type="submit" value="Productos mas vendidos">
            </form>

            <form action="./ultimas_ventas.php" method="post">
                <input id="boton" type="submit" value="Ultimas ventas">
            </form>
            
            <form action="./todas_ventas.php" method="post">
                <input id="boton" type="submit" value="Mostrar todas las ventas">
            </form>

            <form action="./productos_recientes.php" method="post">
                <input id="boton" type="submit" value="Productos añadidos recientemente">
            </form>
        </div>
    </fieldset>
</body>
</html>