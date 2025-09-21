<?PHP
include ("..\db.inc.php");
$query = "select * from cadastra_protocolo"; //query recebe o comando
$query = mysql_query ($query) or die ("ocorreu um erro na Seleção das Empresas"); /*o comando mysqll_query joga todos os clientes para a variável query*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
</div>
<form name="form1" method="post" action="protocolo.php">
  <p align="center">Relat&oacute;rio Individual</p>
  <table width="97%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td><div align="center"><font size="1" face="Courier New, Courier, mono">C&oacute;d</font></div></td>
      <td width="10%"><div align="center">Data</div></td>
      <td width="10%"><div align="center"><font size="1" face="Courier New, Courier, mono">Empresa</font></div></td>
      <td width="23%"><div align="center"><font size="1" face="Courier New, Courier, mono">Documento</font></div></td>
      <td width="14%"><div align="center"><font size="1" face="Courier New, Courier, mono">Vencimento</font></div></td>
      <td width="10%"><div align="center"><font size="1" face="Courier New, Courier, mono">Valor</font></div></td>
      <td width="19%"><div align="center"><font size="1" face="Courier New, Courier, mono">Obs</font></div></td>
    </tr>
    <? 
  		while ($linha = mysql_fetch_object($query)){
  ?>
    <tr> 
      <td width="7%" height="21"><div align="center"><font size="1" face="Courier New, Courier, mono"> 
          <?=$linha->codigo_proto?>
          </font></div></td>
      <td><div align="center"> <font size="1" face="Courier New, Courier, mono"> 
          <?=$linha->documento ?>
          </font></div></td>
      <td><div align="center"><font size="1" face="Courier New, Courier, mono"> 
          <?=$linha->empresa?>
          </font></div></td>
      <td><div align="center"> <font size="1" face="Courier New, Courier, mono"> 
          <?=$linha->documento?>
          </font></div></td>
      <td><div align="center"> <font size="1" face="Courier New, Courier, mono"> 
          <?=$linha->vencimento?>
          </font></div></td>
      <td><div align="center"> <font size="1" face="Courier New, Courier, mono"> 
          <?=$linha->valor?>
          </font></div></td>
      <td><div align="center"> <font size="1" face="Courier New, Courier, mono"> 
          <?=$linha->obs?>
          </font></div></td>
    </tr>
    <?
  }
	?>
  </table>
  <p align="center"> 
    <input type="submit" name="Submit3" value="Visualizar">
  </p>
</form>
<div align="center"></div>
<p align="center">&nbsp; </p>
</body>
</html>
