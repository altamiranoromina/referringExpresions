<?php
	
	$id_persona = $_GET['id_persona'];
	$id_mapa = $_GET['id_mapa'];
	$expresion_referencial = $_GET['expresion_referencial'];
	$numero_mostrado = $_GET['numero_mostrado'];	

        $db = mysql_connect('localhost', 'root', '*root-');

	if($db){
        	mysql_select_db('corpus', $db);

		$sql = mysql_query("insert into expresiones_referenciales (id_persona,id_mapa,expresion_referencial,fecha_hora) values ($id_persona,'$id_mapa','$expresion_referencial',date('now'))", $db);
	
		if ($numero_mostrado=='20')
		{
			$sql = mysql_query("update personas set fecha_hora_fin=date('now') where id_persona='$id_persona'", $db);
		//}

			//mysql_close($db);
		}
	}
	else{

		notify("problem");
	}
?>
