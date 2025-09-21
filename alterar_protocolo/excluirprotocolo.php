<?
	include ("../db.inc.php");	  //chamando banco de dados
    $query = "delete from cadastra_protocolo where codigo_proto = '$codigo_proto' limit 1";
    mysql_query ($query) or die ("Ocorreu Um Erro na Exclusão".mysql_error());
	echo "<script> alert ('Protocolo Excluido com Sucesso'); </script>";
    echo "<script> window.location = 'pergunta_alterar.php'; </script>";
?>