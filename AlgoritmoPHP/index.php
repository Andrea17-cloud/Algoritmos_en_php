<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAREA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class= "container">
        <div class= "row gap-2">
            <?php 
            for($number=2; $number<=1000; $number++){
                
                $contador=0;
                for($i=2; $i<$number; $i++){
                    if ($number % $i == 0 ){
                        $contador++;
                    }
                }
                if($contador==0){
                    echo " <div class='col-1 btn btn-success'>$number</div>";
                }
            }

            ?>
        </div>


        <div>
            <?php    
            $inicial=10;
            for($signo=1; $signo<=$inicial; $signo++){

                for($vueltas=1; $vueltas<=$signo; $vueltas++){
                    echo "*";
                }

                echo "<br>";

            }
            for($signo=$inicial; $signo>1; $signo--){

                for($vueltas=2; $vueltas<=$signo; $vueltas++){
                    echo "*";
                }

                echo "<br>";

            }
            ?>
        </div>
    </div>
    

</body>
</html>