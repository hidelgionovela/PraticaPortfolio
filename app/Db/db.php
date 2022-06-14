<?php 
define('DATABASE', 'my_portifolio');
define('HOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');

try {
    $db = new PDO ('mysql:host='.HOST.'; dbname='.DATABASE, DBUSER, DBPASS);
    
} catch (Exception $e) {
    echo $e->getMessage();
}



function buscaDado($sql)
	{
	
		$res = array();
		global $db;
		$cmd = $db->prepare($sql);
		$cmd->execute();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}

	function buscaDados($sql)
	{
	
		$res = array();
		global $db;
		$cmd = $db->prepare($sql);
		$cmd->execute();
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
	
function buscaEspecial($sql)
	{
	
		$res = array();
		global $db;
		$cmd = $db->prepare($sql);
		$cmd->execute();
		$res = $cmd->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}

function update($sql = '', $dados = []) :int {
		global $db;
	    
		$stmt  = $db->prepare($sql);
	    
		$stmt->execute($dados);
	    
		return $stmt->rowCount();
	    }


function create($sql = "", $dados = []): int
	    {
		global $db;
	    
		$stmt  = $db->prepare($sql);
	    
		$stmt->execute($dados);
	    
		return $stmt->rowCount();
	    }	



