<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/css.css">

    <title>Meu Portfolio</title>
    <style>
        th,
        td {
            padding: 6px;
        }

        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            padding: 5px;

        }

        .hidell {
            position: absolute;
            left: 10px;
            top: 0px;
            bottom: 10px;
            z-index: -4;
        }

        img {
            border-radius: 9px;
        }
    </style>

</head>

<body class="bg-dark text-light">
    <?php
    require __DIR__ . '/../../app/Db/db.php';

    $titulo = buscaDado("SELECT * FROM menu;");
    ?>
    <!-- style="position: fixed; position: -webkit-sticky; position: sticky; top: 0;" -->
    <div class="container" id="link0">
        <div class="jumbotron bg-danger" style="position: relative;">
            <h1>Meu Portfólio</h1>
            <p>Hidelgio Novela Estudante de Engenharia UJC! </p>
        </div>

        <div class="sticky jumbotron bg-danger" style="text-align: center; padding: 5px;">

            <a style="display: inline-block; margin-right: 15px; text-decoration: none; color: white; font-size: 16px" href="#link1">
                <?php echo $titulo['titulo1']; ?>
            </a>
            <a style="display: inline-block; margin-right: 15px; text-decoration: none; color: white; font-size: 16px" href="#link2">
                <?php echo $titulo['titulo2']; ?>
            </a>
            <a style="display: inline-block; margin-right: 15px; text-decoration: none; color: white; font-size: 16px" href="#link3">
                <?php echo $titulo['titulo3']; ?>
            </a>
            <a style="display: inline-block; margin-right: 15px; text-decoration: none; color: white; font-size: 16px" href="#link4">
                <?php echo $titulo['titulo4']; ?>
            </a>
            <a style="display: inline-block; margin-right: 15px; text-decoration: none; color: white; font-size: 16px" href="#link5">
                <?php echo $titulo['titulo5']; ?>
            </a>
            <a style="display: inline-block; margin-right: 15px; text-decoration: none; color:white; font-size: 16px" href="#link6">
                <?php echo $titulo['titulo6']; ?>
            </a>
            <a style="display: inline-block; margin-right: 15px; text-decoration: none; color: white; font-size: 16px" href="#link7">
                <?php echo $titulo['titulo7']; ?>
            </a>
            <a style="display: inline-block; margin-right: 10px; text-decoration: none; color:white; font-size: 16px" href="#link8">
                <?php echo $titulo['titulo8']; ?>
            </a>
            <!-- <a style="display: inline-block; margin-right: 10px; text-decoration: none; color:white; font-size: 16px" href="#link8">
                <?php echo $titulo['titulo9']; ?>
            </a> -->


        </div>


        <!-- </div> -->