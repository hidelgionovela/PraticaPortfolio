<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <title>Apagar Encomenda</title>
</head>

<body>
        <?php require __DIR__ . '/../../app/Db/db.php'; ?>

        <?php
        $id = $_GET['idd'];

        delete("Delete From formacao WHERE id = :id", ['id' => $id]);

        header('Location:editaFormacao.php');

        ?>

</body>

</html>