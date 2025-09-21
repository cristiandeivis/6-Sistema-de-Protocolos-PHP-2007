<?
	include ("db.inc.php");
	if (!empty($nome_empresa)){
	$querye = " where nome_empresa  like '%$nome_empresa%' order by nome_empresa";
	}else{ $querye = ""; }
	$query = "select * from cadastra_empresa" . $querye; //query recebe o comando
	$query = mysql_query ($query) or die (mysql_error() . "ocorreu um erro na Seleção das Empresas"); /*o comando mysqll_query joga todos os clientes para a variável query*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Busca de Empresas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style1 {
	font-size: medium;
	color: #FF33FF;
	font-weight: bold;
}
.style2 {color: #000099}
-->
</style>
<script>
function Atualiza(nome_empresa) {
window.opener.document.form1.empresa.value=nome_empresa;
window.close();
}
</script>

</head>
<body>
 <form action="buscar_empresa.php" method="post">
  <p align="center"><strong><img src="imagens_fundo/buscadeempresas.gif" width="149" height="22"></strong></p>
  <table width="83%" border="1" align="center">
    <tr> 
      <td colspan="3"> <div align="left"><font color="#000099" face="Courier New, Courier, mono">Empresa:</font> 
          <input name="nome_empresa" type="text" id="nome_empresa" size="35" value="<?=@$nome_empresa?>">
          <input name="buscar" type="submit" id="buscar" value="OK">
        </div></td>
    </tr>
    <tr> 
      <td width="4%" height="23"> <div align="center"><font color="#000099" size="2" face="Courier New, Courier, mono">C&oacute;d.</font></div></td>
      <td colspan="2"> <div align="center"><font color="#000099" face="Courier New, Courier, mono">Nome 
          Da Empresa</font></div>
        <div align="left"></div></td>
    </tr>
    <? 
  		while ($linha = mysql_fetch_object($query)){
	?>
    <tr> 
      <td height="28"> <div align="center"><font color="#000099" size="2" face="Courier New, Courier, mono"> 
          <?=$linha->codigo_emp?>
          </font></div></td>
      <td width="89%" height="28"> <div align="left"></div>
        <div align="center"> </div>
        <div align="left"><font size="2" face="Courier New, Courier, mono"> 
          <?=$linha->nome_empresa?>
          </font></div></td>
      <td width="7%"><div align="left"><font color="#000099" face="Courier New, Courier, mono"> 
          <input name="Enviar" type="submit" value="enviar" onclick="Atualiza('<?=$linha->nome_empresa?>');">
          </font></div></td>
    </tr>
    <?
  }
	?>
  </table>
</form>
</body>
</html>