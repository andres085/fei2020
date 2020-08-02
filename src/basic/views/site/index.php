<?php

$this->title = "Herramienta D&D";
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Herramienta D&D</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--FONT AWESOME 5-->
    <script src="https://kit.fontawesome.com/b458f559f0.js" crossorigin="anonymous"></script>

    <style>
        .botones {
            height: 15vh;
            font-size: larger;
        }
    </style>

</head>



<body>

    <div class="container-fluid">

        <div class="row" style="height: 40vh;">

            <div class="col-md-12" style="text-align: center;">

                <br><br>
                <p>
                    <h1>Bienvenido</h1>
                    <h3>Hoy voy a ser:</h3>
                </p>

            </div>

        </div>


        <div class="row">

            <div class="col-md-2">

            </div>

            <div class="col-md-8">
                <div class="container">
                    <button type="button" class="btn btn-outline-dark btn-block botones" onclick="window.location.href='moduloplayer'">
                        JUGADOR
                    </button>
                    <br>
                    <h2 style="text-align: center; margin: 10px;">- O -</h2>
                    <br>
                    <a><button type="button" class="btn btn-outline-dark btn-block botones">
                            DUNGEON MASTER
                        </button></a>
                </div>
            </div>

            <div class="col-md-2">
            </div>

        </div>

        <div class="row h-20">

            <div class="col-md-12">
            </div>

        </div>
    </div>

</body>

</html>