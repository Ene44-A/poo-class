<?php
    require('../controller/C_listarPersonas.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Panchito</title>
</head>

<body>
    <div class="container container-fluid p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!$personas){
                        echo"</tr>";
                        echo"</td>";
                        echo"No hay datos para mostrar";
                        echo"</td>";
                        echo"</tr>";
                    }else{
                    foreach($personas as $persona){
                        echo"</tr>";
                        echo"</td>".$persona[`documento`]."</td>";
                        echo"</td>".$persona[`nombre`]."</td>";
                        echo"</td>".$persona[`edad`]."</td>";
                        echo"</td>".$persona[`FK_id_ciudad`]."</td>";
                        echo "</tr>";
                    }
                    }
                
                ?>
            </tbody>
        </table>
    <a class="btn btn-success" role="button">Añadir persona</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>