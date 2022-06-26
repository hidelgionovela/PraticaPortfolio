<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <title>Apagar Curso</title>
</head>

<body>
        <?php require __DIR__ . '/../../app/Db/db.php'; ?>

        <?php
        $id = $_GET['idd'];

        delete("Delete From certificacoes WHERE id = :id", ['id' => $id]);

        header('Location:gerirCurso.php');

        ?>

</body>

</html>