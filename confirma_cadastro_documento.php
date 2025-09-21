<?PHP
include ("db.inc.php");
$nome_documento = $_POST["nome_documento"];
$query = "insert into cadastra_documentos (nome_documento)"; //comando SQL
$query .= "values ('$nome_documento')";
echo "<script> alert ('Documento Cadastrado com Sucesso');</script>";
echo "<script> window.location = 'cadastra_documento.php';</script>";
mysql_query($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Confirma Cadastro Documento</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
</body>
</html>
