<?
include ("../db.inc.php");
$documento = $_POST["documento"];
$vencimento = $_POST["vencimento"];
$valor = $_POST["valor"];
$obs = $_POST["obs"];
$query = "update cadastra_protocolo set documento='$documento',vencimento='$vencimento',valor='$valor',obs='$obs'";
$query.= "where codigo_proto = '$codigo_proto'";
mysql_query ($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
echo "<script> alert ('Protocolo Alterado Com Sucesso');</script>";
echo "<script> window.location = 'pergunta_alterar.php';</script>";
?>