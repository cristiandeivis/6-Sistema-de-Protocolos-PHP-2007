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
<form name="form1" method="post" action="protocolo.php">
  <p align="center">RELAT&Oacute;RIO GERAL</p>
  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td height="22">Data: 
        <?  $data2 = mysql_fetch_object($query)?>
        <?=$data2->data?>
      </td>
    </tr>
  </table>
  <table width="97%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td><div align="center"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="1"><font size="1"><font face="Courier New, Courier, mono"><font face="Courier New, Courier, mono"><font face="Courier New, Courier, mono"><font size="1"> 
          <input type="checkbox" name="checkbox2" value="checkbox">
          </font></font></font></font></font></font></font></font></div></td>
      <td>&nbsp;</td>
      <td><div align="center"><font size="1" face="Courier New, Courier, mono">C&oacute;d</font></div></td>
      <td width="19%"><div align="center"><font size="1" face="Courier New, Courier, mono">Empresa</font></div></td>
      <td width="21%"><div align="center"><font size="1" face="Courier New, Courier, mono">Documento</font></div></td>
      <td width="8%"><div align="center"><font size="1" face="Courier New, Courier, mono">Vencimento</font></div></td>
      <td width="8%"><div align="center"><font size="1" face="Courier New, Courier, mono">Valor</font></div></td>
      <td width="33%"><div align="center"><font size="1" face="Courier New, Courier, mono">Obs</font></div></td>
    </tr>
    <? 
  		while ($linha = mysql_fetch_object($query)){
	 ?>
    <tr> 
      <td width="3%" height="21"> <div align="center"><font size="2" face="Courier New, Courier, mono"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="1"><font size="1"><font face="Courier New, Courier, mono"><font face="Courier New, Courier, mono"><font face="Courier New, Courier, mono"><font size="1"> 
          <input name="checkbox[]" type="checkbox" value="<?=$linha->codigo_proto?>" checked>
          </font></font></font></font></font></font></font></font> </font></div></td>
      <td width="5%" height="21"><font size="2" face="Courier New, Courier, mono"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font size="1"><font size="1"><font face="Courier New, Courier, mono"><font face="Courier New, Courier, mono"><font face="Courier New, Courier, mono"><font size="1"> 
        <input type="submit" name="Submit2" value="Ver">
        </font></font></font></font></font></font></font></font></font></td>
      <td width="3%"><div align="center"><font size="1" face="Courier New, Courier, mono"> 
          <?=$linha->codigo_proto?>
          </font></div></td>
      <td><div align="center"> <font size="1" face="Courier New, Courier, mono"> 
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
  <div align="center"></div>
  <p align="center"> 
    <input type="submit" name="Submit3" value="Imprimir">
    <input type="submit" name="Submit4" value="Imprimir Sele&ccedil;&atilde;o">
  </p>
  <p>&nbsp; </p>
</form>
</body>
</html>