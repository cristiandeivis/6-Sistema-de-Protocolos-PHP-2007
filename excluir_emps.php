<?
	include ("db.inc.php");	  //chamando banco de dados
    $query = "delete from cadastra_empresa where codigo_emp = '$codigo_emp' limit 1";
    mysql_query ($query) or die ("Ocorreu Um Erro na Exclusão".mysql_error());
    echo "<script> window.location = 'alteracao_empresa_index.php';</script>";
?>
