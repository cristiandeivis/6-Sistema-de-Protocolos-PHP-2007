<?PHP
include ("db.inc.php");
if (!empty($nome_documento)){
	$querye = " where nome_documento  like '%$nome_documento%' order by nome_documento";
}else{ $querye = ""; }
$query = "select * from cadastra_documentos"; //query recebe o comando
$query = mysql_query ($query) or die (mysql_error() . "ocorreu um erro na Seleção dos Documentos"); /*o comando mysqll_query joga todos os clientes para a variável query*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Busca de Documentos</title>
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
<!--


function excluircliente(codigo_doc)
	{
	if (confirm("deseja Realmente Excluir esse Valor")){
	window.location = "excluir_docs.php?codigo_doc="+codigo_doc;
	}
	return false;
	}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->//-->
</script>

<script>
function Atualiza(nome_documento) {
window.opener.document.form1.documento.value=nome_documento;
window.close();
}
</script>

</head>
<body>
<form action="buscar_documento.php" method="post">
  <div align="center">
    <p><img src="imagens_fundo/buscadedocumentos.gif" width="161" height="20"></p>
    </div>
  <table width="80%" border="1" align="center">
    <tr> 
      <td colspan="3"> <div align="left"><font color="#000099" face="Courier New, Courier, mono">Documento:</font> 
          <input name="nome_documento" type="text" id="nome_documento" value="<?=@$nome_documento?>" size="35">
          <input name="buscar" type="submit" id="buscar" value="OK">
        </div></td>
    </tr>
    <tr> 
      <td width="4%" height="23"><div align="center"><font color="#000099" size="2" face="Courier New, Courier, mono">C&oacute;d.</font></div></td>
      <td colspan="2"><div align="center"><font color="#000099">Nome Do Documento</font></div></td>
    </tr>
    <? 
  		while ($linha = mysql_fetch_object($query)){
	?>
    <tr> 
      <td height="23"> <div align="center"> <font color="#000099" size="2" face="Courier New, Courier, mono"> 
          <?=$linha->codigo_doc?>
          </font></div></td>
      <td width="89%" height="23"> <div align="center"> </div>
        <div align="left"> <font size="2" face="Courier New, Courier, mono"> 
          <?=$linha->nome_documento?>
          </font></div></td>
      <td width="7%"><input name="Enviar" type="submit" value="enviar" onclick="Atualiza('<?=$linha->nome_documento?>');"></td>
    </tr>
    <?
  }
	?>
  </table>
  </form>
</body>
</html>