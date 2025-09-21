<?
	require ("../db.inc.php");
	$query = "select * from cadastra_empresa where codigo_emp = '$empresa'";
	$query = mysql_query($query) or die (mysql_error());
	$rowe    = mysql_fetch_object($query);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>NTC - Protocolo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?
	for ($x = 0; $x < count($empresa); $x++){	
?>
<?
	$query = "select * from cadastra_protocolo where data = '$data' and empresa = '$empresa[$x]'";
	$query = mysql_query($query) or die (mysql_error());
	if (mysql_num_rows($query) > 0){
?>
<table width="91%" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
  <tr bgcolor="#FFFFFF"> 
    <td height="22" colspan="4"> <div align="center"><font face="Courier New, Courier, mono"> 
        <img src="../imagens_fundo/logo%202.gif" width="71" height="53" align="middle"> 
        - P R O T O C O L O - </font></div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" colspan="4"> 
      <div align="center"><font size="2" face="Courier New, Courier, mono">DATA: 
        <?=@$data?>
        </font></div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" colspan="4"><font size="2" face="Courier New, Courier, mono">Empresa: 
      <?=$empresa[$x]?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" colspan="4"> 
      <div align="center"><font size="2" face="Courier New, Courier, mono">- 
        RELA&Ccedil;&Atilde;O DE DOCUMENTOS -</font></div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="32%" height="22"><div align="center"><font size="2" face="Courier New, Courier, mono">D 
        E S C R I &Ccedil; &Atilde; O</font></div></td>
    <td width="21%"><div align="center"><font size="2" face="Courier New, Courier, mono">VENCIMENTO</font></div></td>
    <td width="16%"><div align="center"><font size="2" face="Courier New, Courier, mono">V 
        A L O R</font></div></td>
    <td width="31%"><div align="center"><font face="Courier New, Courier, mono">O B S</font></div></td>
  </tr>
</table>
<div align="center"></div>
<table width="91%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <?
	while($row = mysql_fetch_object($query)){
  ?>
  <tr bgcolor="#666666"> 
    <td width="3%" height="21" bgcolor="#FFFFFF"> <div align="right"><strong><font color="#000000" size="2" face="Courier New, Courier, mono"><img src="../imagens_fundo/seta.gif" width="19" height="21"></font></strong></div></td>
    <td width="29%" bgcolor="#FFFFFF"><div align="left"></div>
      <div align="left"><strong><font color="#000000" size="2" face="Courier New, Courier, mono"> 
        <?=$row->documento?>
        </font></strong></div></td>
    <td width="21%" bgcolor="#FFFFFF"> <div align="center"><strong><font color="#000000" size="2" face="Courier New, Courier, mono"> 
        <?=$row->vencimento?>
        </font></strong></div></td>
    <td width="16%" bgcolor="#FFFFFF"> <div align="center"><strong><font color="#000000" size="2" face="Courier New, Courier, mono"> 
        <?=$row->valor?>
        </font></strong></div></td>
    <td width="31%" bgcolor="#FFFFFF"> <div align="center"><strong><font color="#000000" size="2" face="Courier New, Courier, mono"> 
        <?=$row->obs?>
        </font></strong></div></td>
  </tr>
  <? } ?>
</table>
<div align="center"> -------------------------------------------------------------------------------------------------------------------- 
  <br>
</div>
<table width="91%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><font size="2" face="Courier New, Courier, mono">DECLARO TER RECEBIDO OS DOCUMENTOS ACIMA DESCRITOS</font></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
<div align="center"> 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font face="Courier New, Courier, mono"><font size="1">Ntc Cont&aacute;bil 
    Ltda - Rua Cel Serafim de Moura, 110 Lages SC CNPJ: 00.374.592/0001-01</font></font> 
    <?		
		}
			if ($x < (count($empresa)-1)){
				echo "<br style='page-break-after:always;'>";
			}
		}
	?>
</div>
</html>