<?
include ("db.inc.php");
$nome_documento = $_POST["nome_documento"];
$query = "update cadastra_documentos set nome_documento='$nome_documento'";
$query.= "where codigo_doc = '$codigo_doc'";
mysql_query ($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
echo "<script> alert ('Documento Alterado Com Sucesso');</script>";
echo "<script> window.location = 'alteracao_documento_index.php';</script>";
?>