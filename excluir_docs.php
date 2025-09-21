<?
	include ("db.inc.php");	  //chamando banco de dados
    $query = "delete from cadastra_documentos where codigo_doc = '$codigo_doc' limit 1";
    mysql_query ($query) or die ("Ocorreu Um Erro na Exclusão".mysql_error());
    echo "<script> window.location = 'alteracao_documento_index.php';</script>";
?>
