<?PHP
include ("db.inc.php");
$nome_empresa = $_POST["nome_empresa"];
$query = "insert into cadastra_empresa (nome_empresa)"; //comando SQL
$query .= " values('$nome_empresa')";
echo "<script> alert ('Empresa Cadastrada com Sucesso');</script>";
echo "<script> window.location = 'cadastra_empresa.php';</script>";
mysql_query($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Confirma Cadastro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
</body>
</html>
