<?
include ("db.inc.php");
$nome_empresa = $_POST["nome_empresa"];
$query = "update cadastra_empresa set nome_empresa='$nome_empresa'";
$query.= "where codigo_emp = '$codigo_emp'";
mysql_query ($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
echo "<script> alert ('Empresa Alterado Com Sucesso');</script>";
echo "<script> window.location = 'alteracao_empresa_index.php';</script>";
?>