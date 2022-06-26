<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Novo Curso e Certificaçao</title>
</head>

<body>
    <h2>Novo Curso e Certificaçao</h2>
   <?php require __DIR__ . '/../../app/Db/db.php';?>

    <?php
    $inicio = ''; // int4
   // $fim = ''; //int4
    $descricao = ''; //varchar
    $instituicao = ''; //varchar


    ?>

    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <p>
            <label>Ano</label><br>
            <input type="number" name="Inicio" class="field" value="<?php echo $inicio; ?>">
        </p>
        <!-- <p>
            <label>Ano de Fim</label><br>
            <input type="number" name="Fim" class="field" value="<?php echo $fim; ?>">
        </p> -->

        <p>
            <label>Instituicao</label><br>
            <input type="text" name="Instituicao" class="field" value="<?php echo $instituicao; ?>">
        </p>

        <p>
            <label>Descrição</label><br>
            <!-- <input type="text" name="descricao" class="field" value="<?php echo $descricao; ?>"> -->
            <textarea class="field" name="Descricao" rows="4">
                <?php echo $descricao; ?>
		    </textarea>
        </p>



        <hr>

        <p style="text-align: right">
            <input type="submit" value="Gravar">
        </p>
        <a href="../index.php" style="text-align: right">Voltar</a>
    </form>



    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $inicio = $_POST['Inicio']; // int4
//     $fim = $_POST['Fim']; //int4
    $descricao = $_POST['Descricao']; //varchar
    $instituicao = $_POST['Instituicao']; //varchar


         //var_dump($_POST);


        $sql = "INSERT INTO certificacoes (Ano, Descricao, Instituicao ) VALUES (:Inicio, :Descricao, :Instituicao)";
        $dados = [
            'Inicio' => $inicio,
        //     'Fim' => $fim,
            'Descricao' => $descricao,
            'Instituicao' => $instituicao

        ];

        create($sql, $dados);
        
    }
    ?>
</body>

</html>