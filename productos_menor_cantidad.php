<?php
    $dataPoints = array( 
    	array("y" => 3373.64, "label" => "Germany" ),
    	array("y" => 2435.94, "label" => "France" ),
    	array("y" => 1842.55, "label" => "China" ),
    	array("y" => 1828.55, "label" => "Russia" ),
    	array("y" => 1039.99, "label" => "Switzerland" ),
    	array("y" => 765.215, "label" => "Japan" ),
    	array("y" => 612.453, "label" => "Netherlands" )
    );

    $link=mysqli_connect("localhost","root","");//coneccion a phpmyadmin
    mysqli_select_db($link,"inventory_system");//link hacia la bd

    $test=array ();//creacion array

    $count=0;//contador iniciando de cero
    $res=mysqli_query($link,"select name, quantity from products where quantity <=10");//seleccion de tablas
    while($row=mysqli_fetch_array($res)){//bucles para recorrido de datos

        $test[$count]["label"]=$row["name"];
        $test[$count]["y"]=$row["quantity"];
        $count=$count+1;

    }


    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function() {
    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light2",
    	title:{
    		text: "Productos con menor cantidad"
    	},
    	axisY: {
    		title: "Numero de productos"
    	},
    	data: [{
    		type: "column",
    		yValueFormatString: "#,##0.##",
    		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();
    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>                              