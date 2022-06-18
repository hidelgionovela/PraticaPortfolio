<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/../../css/bootstrap.min.css">
        <meta charset="utf-8">
        <title>Editar Dados</title>
</head>

<body>

        <?php
        require __DIR__ . '/../../app/Db/db.php'; ?>
        <!-- <img src="../index.php" alt=""> -->
        <div class="container">
                <?php

                $dados = buscaDados("SELECT * FROM `formacao` ORDER BY `formacao`.`Fim` DESC");
                $titulo = buscaDado("SELECT * FROM menu;");

                ?>

                <div>
                        <h2 class="text-danger" id="link3">
                                <?php echo $titulo['titulo3']; ?>
                        </h2>
                        <br>
                </div>
                <div class="formacao">


                        <table style=" width:100%;  ">
                                <tr class="bg-danger" style="color: black;">

                                        <?php

                                        if (count($dados) > 0) {
                                                for ($i = 0; $i < 1; $i++) {

                                                        foreach ($dados[$i] as $k => $v) {
                                                                if ($k != "id") {
                                                                        if ($k != "Ano") {
                                        ?><th colspan="" style="text-align:center;"> <?php echo $k; ?> </th> <?php
                                                                                                        }
                                                                                                }
                                                                                        }
                                                                                }
                                                                        }
                                                                                                                ?>

                                </tr>

                                <?php

                                if (count($dados) > 0) {
                                        for ($i = 0; $i < count($dados); $i++) {
                                                echo "<tr>";

                                                foreach ($dados[$i] as $k => $v) {
                                                        if ($k != "id") {
                                                                echo "<td>" . $v . "</td>";
                                                        }
                                                } ?>

                                                <td>
                                                        <?php
                                                        echo $dados[$i]['id'];
                                                        ?>
                                                        <a href="editaFormacao.php?idUp=<?php echo $dados[$i]['id']; ?>">editar</a>
                                                        <!-- inicializando o metodo get no link com o ponto de interogacao -->
                                                        <a href="deleteFormacao.php?idd=<?php echo $dados[$i]['id']; ?>">excluir</a>
                                                </td>


                                <?php
                                                echo "</tr>";
                                        }
                                }
                                ?>



                        </table>

                        <br>
                        <hr style="color:aliceblue ;">
                        <div style="position: fixed; bottom: 80px; right: 12px; ">
                                <a href="../index.php"> <button type="button">Voltar</button> </a>
                        </div>
                        <br><br><br>
                </div>
        </div>



        <?php
        if (isset($_GET['idUp'])) {
                $idUp = $_GET['idUp'];
                $dado = buscaDado("SELECT * FROM `formacao` where id = $idUp;");
                // var_dump($idUp);
                // var_dump($dado);

                $inicio = $dado['Inicio'];
                $fim = $dado['Fim'];
                $descricao = $dado['Descricao'];
                $instituicao = $dado['Instituicao']



        ?>
                <h2>Editar <?php echo $titulo['titulo3']; ?></h2>

                <!-- <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> -->
                <form method="POST" action="editaFormacao2.php?idUp=<?php echo $idUp; ?>">
                        <p>
                                <label>Ano de Inicio</label><br>
                                <input type="number" name="inicio" class="field" value="<?php echo $inicio; ?>">
                        </p>
                        <p>
                                <label>Ano de Fim</label><br>
                                <input type="number" name="fim" class="field" value="<?php echo $fim; ?>">
                        </p>

                        <p>
                                <label>Descricao</label><br>
                                <!-- <input type="text" name="subTitulo" class="field" value="<?php echo $descricao; ?>"> -->
                                <textarea class="field" name="descricao" rows="8">
                <?php echo $descricao; ?>
		    </textarea>

                        </p>

                        <p>
                                <label>Instituicao</label><br>
                                <!-- <input type="text" name="descricao class="field" value="<?php echo $local; ?>"> -->
                                <textarea class="field" name="instituicao" rows="3">
                <?php echo $instituicao; ?>
		    </textarea>

                        </p>



                        <hr>

                        <p style="text-align: right">
                                <input type="submit" value="Gravar">

                        </p>
                </form>


        <?php
        }
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //         $inicio = $_POST['inicio'];
        //         $fim = $_POST['fim'];
        //         $descricao = $_POST['descricao'];
        //         $instituicao = $_POST['instituicao'];
        //         $id = $_GET['idUp'];


        //         $dados = [
        //                 'Inicio' => $inicio,
        //                 'Fim' => $fim,
        //                 'Descricao' => $descricao,
        //                 'Instituicao' => $instituicao,
        //                 'id' => $id
        //         ];

        //         //var_dump($dados);

        //         update("update formacao set Inicio = :Inicio, Fim = :Fim, Descricao = :Descricao, Instituicao = :Instituicao WHERE id = :id", $dados);
        //         if (true) {
        //                 unset($_GET['idUp']);
        //                  header('Location:../index.php');
        //         }
        // }


        ?>
  <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>