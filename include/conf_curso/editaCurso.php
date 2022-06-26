<?php
 require __DIR__ . '/../../app/Db/db.php'; 

                if (isset ($_POST)) {
                        // $inicio = $_POST['inicio'];
                        $ano = $_POST['ano'];
                        $descricao = $_POST['descricao'];
                        $instituicao = $_POST['instituicao'];
                        $id = $_GET['idUp'];


                        $dados = [
                                // 'Inicio' => $inicio,
                                'Ano' => $ano,
                                'Descricao' => $descricao,
                                'Instituicao' => $instituicao,
                                'id' => $id
                        ];

                        // var_dump($dados);

                        update("update certificacoes set  Ano = :Ano, Descricao = :Descricao, Instituicao = :Instituicao WHERE id = :id", $dados);
                        if (true) {
                             
                                 header('Location:gerirCurso.php');
                        }
                }
        

        ?>
