<?PHP
include ("db.inc.php");
$data = $_POST["data"];
$empresa = $_POST["empresa"];
$documento = $_POST["documento"];
$vencimento = $_POST["vencimento"];
$valor = $_POST["valor"];
$obs = $_POST["obs"];
$query = "insert into cadastra_protocolo (data,vencimento,valor,obs)"; //comando SQL
$query .= " values('$data','$vencimento','$valor','$obs')";
mysql_query($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="confirma_cadastro_protocolo.php">
  <p align="center">PROTOCOLO CADASTRADO</p>
  <table width="75%" border="1" align="center">
    <tr> 
      <td width="11%">Data: </td>
      <td width="89%"><div align="center"><? echo $data; ?>&nbsp;</div></td>
    </tr>
    <tr> 
      <td> Empresa: </td>
      <td><div align="center"><? echo $empresa; ?>&nbsp;</div></td>
    </tr>
    <tr> 
      <td>Documento:</td>
      <td><div align="center"><? echo $documento; ?>&nbsp;</div></td>
    </tr>
    <tr> 
      <td>Vencimento: </td>
      <td> <div align="center"><? echo $vencimento; ?></div></td>
    </tr>
    <tr> 
      <td>Valor: </td>
      <td><div align="center"><? echo $valor; ?>&nbsp;</div></td>
    </tr>
    <tr> 
      <td><div align="justify">Observa&ccedil;&otilde;es: </div></td>
      <td><div align="center"><? echo $obs; ?>&nbsp; </div></td>
    </tr>
  </table>
  <p align="center"><a href="cadastra_protocolo.php">voltar</a></p>
</form>
</body>
</html>
