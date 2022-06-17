<?php
 require __DIR__ . '/../app/Db/db.php'; 

                if (isset ($_POST)) {
                        $inicio = $_POST['inicio'];
                        $fim = $_POST['fim'];
                        $descricao = $_POST['descricao'];
                        $instituicao = $_POST['instituicao'];
                        $id = $_GET['idUp'];


                        $dados = [
                                'Inicio' => $inicio,
                                'Fim' => $fim,
                                'Descricao' => $descricao,
                                'Instituicao' => $instituicao,
                                'id' => $id
                        ];

                        var_dump($dados);

                        update("update formacao set Inicio = :Inicio, Fim = :Fim, Descricao = :Descricao, Instituicao = :Instituicao WHERE id = :id", $dados);
                        if (true) {
                             
                                 header('Location:editaFormacao.php');
                        }
                }
        

        ?>
