<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <title>Editar Dados</title>
</head>

<body>

        <?php
        require __DIR__ . '/../app/Db/db.php'; ?>
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
                                                        <a href="index.php?idd=<?php echo $dados[$i]['id']; ?>">excluir</a>
                                                </td>


                                <?php
                                                echo "</tr>";
                                        }
                                }
                                ?>



                        </table>

                        <br>
                        <hr style="color:aliceblue ;"><br><br><br>
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
                <h2>Editar Dados Pessoais</h2>

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
</body>

</html>