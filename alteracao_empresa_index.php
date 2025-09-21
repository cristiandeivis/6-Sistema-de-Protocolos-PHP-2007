<?PHP
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
<title>Altera&ccedil;&atilde;o de Empresas</title>
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
function excluirempresa(codigo_emp)
	{
	if (confirm("Deseja Realmente Excluir a Empresa?")){
	window.location = "excluir_emps.php?codigo_emp="+codigo_emp;
	}
	return false;
	}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

</head>
<body onLoad="MM_preloadImages('imagens/botaovoltar_r2_c2_f2.gif')">
<form action="" method="post" name="form1" id="empresa2">
  <div align="center"><img src="imagens_fundo/empresascadastradas.gif" width="174" height="23"> 
  </div>
  <table width="80%" border="1" align="center">
    <tr> 
      <td colspan="4"> <div align="left"><font color="#000099" face="Courier New, Courier, mono">Empresa:</font> 
          <input name="nome_empresa" type="text" id="nome_empresa2" size="35" value="<?=@$nome_empresa?>">
          <input name="buscar" type="submit" id="buscar2" value="OK">
        </div></td>
    </tr>
    <tr> 
      <td width="6%" height="23"><div align="center"><font color="#000099" size="2" face="Courier New, Courier, mono">C&oacute;d.</font></div></td>
      <td colspan="3"> <div align="center"></div>
        <div align="center"><font color="#0000CC" face="Courier New, Courier, mono">Nome 
          da Empresa</font></div></td>
    </tr>
    <? 
  		while ($linha = mysql_fetch_object($query)){
	?>
    <tr> 
      <td height="28"> <div align="center"><font color="#000099" size="2" face="Courier New, Courier, mono"> 
          <?=$linha->codigo_emp?>
          </font></div></td>
      <td width="74%" height="28"> <div align="center"> </div>
        <font size="2" face="Courier New, Courier, mono"><font size="2"><font face="Courier New, Courier, mono"><div align="center"> 
        </font> <div align="left"><font size="2" face="Courier New, Courier, mono"> 
          <?=$linha->nome_empresa?>
          </font></div></td>
      <td width="10%"><input name="alterar" type="button" id="alterar" value="Alterar" onclick="window.location = 'editar_empresa.php?codigo_emp=<?=$linha->codigo_emp?>';"></td>
      <td width="10%"><input name="excluir" type="button" id="excluir" value="Excluir" onclick="excluirempresa('<?=$linha->codigo_emp?>');"></td>
    </tr>
    <?
  }
	?>
  </table>
  <br>
  <table width="85" border="0" align="center" cellpadding="0" cellspacing="0">
    <!-- fwtable fwsrc="site2.png" fwbase="botaovoltar.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
    <tr> 
      <td><img src="imagens/spacer.gif" alt="" name="undefined_2" width="4" height="1" border="0"></td>
      <td><img src="imagens/spacer.gif" alt="" name="undefined_2" width="81" height="1" border="0"></td>
      <td><img src="imagens/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0"></td>
    </tr>
    <tr> 
      <td colspan="2"><img name="botaovoltar_r1_c1" src="imagens/botaovoltar_r1_c1.gif" width="85" height="2" border="0" alt=""></td>
      <td><img src="imagens/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0"></td>
    </tr>
    <tr> 
      <td><img name="botaovoltar_r2_c1" src="imagens/botaovoltar_r2_c1.gif" width="4" height="43" border="0" alt=""></td>
      <td><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botaovoltar_r2_c2','','imagens/botaovoltar_r2_c2_f2.gif',1);"><img name="botaovoltar_r2_c2" src="imagens/botaovoltar_r2_c2.gif" width="81" height="43" border="0" alt=""></a></td>
      <td><img src="imagens/spacer.gif" alt="" name="undefined_2" width="1" height="43" border="0"></td>
    </tr>
  </table>
  </form>
</body>
</html>