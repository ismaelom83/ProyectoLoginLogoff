


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Pagina de detalle</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../WEBBROOT/css/estilosEjer.css">
    </head>
    <body>
       
         <?php
           /**
             * @author Ismael Heras 
             * @since 28/11/2019
             */        
            //iniciamos la sesion.
            session_start();     
            //mostramos la variables superglobalesz
            echo    '<h1>Conexion correcta</h1>';
            echo 'Variables Superglobales';  
            echo '<h3>Variable $Server</h3>';
            echo "<pre style='text-align:left;'>";
            print_r($_SERVER) . '<br>';
            echo "</pre>";
            echo '<h3>Variable Request</h3>';
            print_r($_REQUEST) . '<br>';
               echo '<h3>Variable Session</h3>';
            print_r($_SESSION) .'<br>';
            echo '<br>';         
            phpinfo();
            ?>
        
    </body>
</html>