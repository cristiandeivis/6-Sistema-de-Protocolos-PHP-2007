<?
	require ("../db.inc.php");
	$query = "select * from cadastra_protocolo where codigo_proto = '$checkbox[0]'";
	$query = mysql_query($query) or die (mysql_error());
	$rowe    = mysql_fetch_object($query);
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="91%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="22"> <div align="center"><font face="Courier New, Courier, mono">- 
        P R O T O C O L O -</font></div></td>
  </tr>
  <tr> 
    <td height="22"><div align="center"><font size="2" face="Courier New, Courier, mono">DATA: 
        <?=$rowe->data?>
        </font></div></td>
  </tr>
  <tr> 
    <td height="22"><font size="2" face="Courier New, Courier, mono">Empresa: 
      <?=$rowe->empresa?>
      </font></td>
  </tr>
</table>
<table width="91%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><font size="2" face="Courier New, Courier, mono">- 
        RELA&Ccedil;&Atilde;O DE DOCUMENTOS -</font></div></td>
  </tr>
</table>
<table width="91%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="32%"><div align="center"><font size="2" face="Courier New, Courier, mono">D 
        E S C R I &Ccedil; &Atilde; O</font></div></td>
    <td width="15%"><div align="center"><font size="2" face="Courier New, Courier, mono">VENCIMENTO</font></div></td>
    <td width="20%"><div align="center"><font size="2" face="Courier New, Courier, mono">V 
        A L O R</font></div></td>
    <td width="33%"><div align="center"><font face="Courier New, Courier, mono">O 
        B S</font></div></td>
  </tr>
</table>
<table width="91%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <?
for ($x = 0; $x < count($checkbox); $x++){
$query = "select * from cadastra_protocolo where codigo_proto = '$checkbox[$x]'";
$query = mysql_query($query) or die (mysql_error());
$row    = mysql_fetch_object($query);
?>
  <tr bgcolor="#666666"> 
    <td width="1%" bgcolor="#CCCCCC"><div align="right"><font size="2"></font></div></td>
    <td width="31%" bgcolor="#CCCCCC"><font size="2" face="Courier New, Courier, mono"> 
      <?=$row->documento?>
      </font></td>
    <td width="15%" bgcolor="#CCCCCC"> <div align="center"><font size="2" face="Courier New, Courier, mono"> 
        <?=$row->vencimento?>
        </font></div></td>
    <td width="20%" bgcolor="#CCCCCC"> <div align="center"><font size="2" face="Courier New, Courier, mono"> 
        <?=$row->valor?>
        </font></div></td>
    <td width="33%" bgcolor="#CCCCCC"> <div align="center"><font size="2" face="Courier New, Courier, mono"> 
        <?=$row->obs?>
        </font></div></td>
  </tr>
  <? } ?>
</table>
<br>
<table width="91%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><font size="2" face="Courier New, Courier, mono">DECLARO TER RECEBIDO OS DOCUMENTOS ACIMA DESCRITOS</font></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="91%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td><div align="center"><font size="2" face="Courier New, Courier, mono">______/______/______</font></div></td>
    <td><div align="center">_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _</div></td>
  </tr>
  <tr>
    <td><div align="center"><font size="2" face="Courier New, Courier, mono">DATA</font></div></td>
    <td><div align="center"><font size="2" face="Courier New, Courier, mono">ASSINATURA</font></div></td>
  </tr>
</table>
</body>
</html>
