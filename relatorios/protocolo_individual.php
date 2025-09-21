<?
	require ("../db.inc.php");
	$query = "select * from cadastra_empresa where nome_empresa = '$empresa'";
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
<table width="91%" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC">
  <tr> 
    <td height="22" colspan="4"> <div align="center"><font face="Courier New, Courier, mono"><br>
        <img src="../imagens_fundo/logo%202.gif" width="67" height="53" align="middle">- 
        P R O T O C O L O -<br>
        <br>
        </font></div></td>
  </tr>
  <tr> 
    <td height="22" colspan="4"><div align="center"><font size="2" face="Courier New, Courier, mono">DATA: 
        <?=@$data?>
        </font></div></td>
  </tr>
  <tr> 
    <td height="22" colspan="4"><font size="2" face="Courier New, Courier, mono">Empresa: 
      <?=$rowe->nome_empresa?>
      </font></td>
  </tr>
  <tr> 
    <td height="22" colspan="4"><div align="center"><font size="2" face="Courier New, Courier, mono">- 
        RELA&Ccedil;&Atilde;O DE DOCUMENTOS -</font></div></td>
  </tr>
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
<table width="91%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF"> 
    <?
	$query = "select * from cadastra_protocolo where data = '$data' and empresa = '$rowe->nome_empresa'";
	$query = mysql_query($query) or die (mysql_error());
	while($row = mysql_fetch_object($query)){
	?>
    <td width="3%"><div align="left"><strong><font size="2" face="Courier New, Courier, mono"><img src="../imagens_fundo/seta.gif" width="19" height="21"> 
        </font></strong></div></td>
    <td width="29%"><strong><font size="2" face="Courier New, Courier, mono">
      <?=$row->documento?>
      </font></strong></td>
    <td width="15%"> <div align="center"><strong><font size="2" face="Courier New, Courier, mono"> 
        <?=$row->vencimento?>
        </font></strong></div></td>
    <td width="20%"> <div align="center"><strong><font size="2" face="Courier New, Courier, mono"> 
        <?=$row->valor?>
        </font></strong></div></td>
    <td width="33%"> <div align="center"><strong><font size="2" face="Courier New, Courier, mono"> 
        <?=$row->obs?>
        </font></strong></div></td>
  </tr>
  <? } ?>
</table>
<div align="center"><br>
  ----------------------------------------------------------------------------------------------------------------------</div>
<table width="91%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td><font size="2" face="Courier New, Courier, mono">DECLARO TER RECEBIDO 
      OS DOCUMENTOS ACIMA DESCRITOS</font></td>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><font face="Courier New, Courier, mono"><font size="1">- NTC 
  Cont&aacute;bil Ltda - Rua Cel Serafim de Moura, 110 Lages SC CNPJ: 00.374.592/0001-01 
  -</font></font></p>
</body>
</html>
