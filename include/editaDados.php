<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Dados</title>
</head>
<body>
	<h2>Editar Dados Pessoais</h2>
        <?php
	require __DIR__ . '/../app/Db/db.php';
        
        ?>

	<?php 
		//$id = $_GET['id'];
		$dados = buscaDado("SELECT * FROM autobi;");


		
        $nome=$dados['titulo'];
		$local=$dados['subTitulo'];
		$data=$dados['descricao'];

	 ?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<p>
		<label>Titulo</label><br>
		<input type="text" name="titulo" class="field" value="<?php echo $nome; ?>">
	</p>

	<p>
		<label>Subitulo</label><br>
		<!-- <input type="text" name="subTitulo" class="field" value="<?php echo $local; ?>"> -->
                <textarea class="field" name="subTitulo" rows="5">
                <?php echo $local; ?>
		    </textarea>

	</p>

	<p>
		<label>descricao</label><br>
		<!-- <input type="text" name="descricao class="field" value="<?php echo $local; ?>"> -->
                <textarea class="field" name="descricao" rows="10">
                <?php echo $data; ?>
		    </textarea>

	</p>



	<hr>

	<p style="text-align: right">
		<input type="submit" value="Gravar">
	</p>
</form>


	 <?php 
	 
	 	if ($_SERVER['REQUEST_METHOD']=='POST') {
            $nome=$_POST['titulo'];
            $local=$_POST['subTitulo'];
            $data=$_POST['descricao'];
            $id = $dados['id']; 
           

            $dados = [
                'titulo' => $nome,
                'subTitulo' => $local,
                'descricao' => $data,
                'id' => $id
            ];
            
            update("update autobi set titulo = :titulo, subTitulo = :subTitulo, descricao = :descricao WHERE id = :id", $dados);

	 		header('Location:../index.php');
	 	}
	 	
	  ?>
</body>
</html>