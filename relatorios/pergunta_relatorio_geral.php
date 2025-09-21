<?PHP
include ("../db.inc.php");
if (!empty($acao)){
//	$querye = "select distinct(empresa) as empresa from cadastra_protocolo "; //query recebe o comando
	//$querye = mysql_query ($querye) or die ("ocorreu um erro na Seleção das Empresas"); /*o comando mysqll_query joga todos os clientes para a variável query*/
}else{
	$query = "";
}

//$query = "select * from cadastra_protocolo"; //query recebe o comando
//$query = mysql_query ($query) or die ("ocorreu um erro na Seleção das Empresas"); /*o comando mysqll_query joga todos os clientes para a variável query*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Protocolo Geral</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
	function pesquisa(){
		data = document.getElementById('data').value;
		document.getElementById('form1').action = 'pergunta_relatorio_geral.php?acao=pesquisar';
		document.getElementById('form1').submit();
	}
</script>

<script>
<!--
function formatar(mascara, documento){
  	var i = documento.value.length;
  	var saida = mascara.substring(0,1);
  	var texto = mascara.substring(i)
  
  	if (texto.substring(0,1) != saida){
		documento.value += texto.substring(0,1);
  }
  
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

<body onLoad="MM_preloadImages('../imagens/botaovoltar_r2_c2_f2.gif')">
<form name="form1" id="form1"  method="post" action="protocolo_geral.php">
  <p align="center"><img src="../imagens_fundo/relatoriogeral.gif" width="126" height="23"></p>
  <table width="97%" border="1" align="center">
    <tr> 
      <td width="5%" height="28"> <div align="left"><font color="#000099" face="Courier New, Courier, mono">Data:</font></div></td>
      <td width="95%"> <div align="left"> 
          <input name="data" type="text" value="<?=@$data?>" id="data" OnKeyPress="formatar('##/##/####', this)">
          <input type="button" name="Button" value="Enviar" onClick="pesquisa()">
        </div></td>
    </tr>
    <?
	if (!empty($data)){
	$query = "select distinct(ce.nome_empresa) as nome_empresa from cadastra_empresa as ce inner join cadastra_protocolo as pc on (pc.empresa = ce.nome_empresa and pc.data = '$data') order by nome_empresa";
	$query = mysql_query($query) or die (mysql_error());
	while ($row = mysql_fetch_object($query)){
    ?>
    <tr> 
      <td height="22"><div align="center"> 
          <input type="checkbox" value="<?=$row->nome_empresa?>" name="empresa[]" id="empresa[]" checked>
        </div></td>
      <td> 
        <?=$row->nome_empresa?>
      </td>
    </tr>
    <? 
	} 
	}
	?>
    <tr> 
      <td height="28" colspan="2"><input type="submit" name="button" id="button" value="Gerar relat&oacute;rio"></td>
    </tr>
  </table>
  <br>
  <table width="85" border="0" align="center" cellpadding="0" cellspacing="0">
    <!-- fwtable fwsrc="site2.png" fwbase="botaovoltar.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
    <tr> 
      <td><img src="../imagens/spacer.gif" width="4" height="1" border="0" alt=""></td>
      <td><img src="../imagens/spacer.gif" width="81" height="1" border="0" alt=""></td>
      <td><img src="../imagens/spacer.gif" width="1" height="1" border="0" alt=""></td>
    </tr>
    <tr> 
      <td colspan="2"><img name="botaovoltar_r1_c1" src="../imagens/botaovoltar_r1_c1.gif" width="85" height="2" border="0" alt=""></td>
      <td><img src="../imagens/spacer.gif" width="1" height="2" border="0" alt=""></td>
    </tr>
    <tr> 
      <td><img name="botaovoltar_r2_c1" src="../imagens/botaovoltar_r2_c1.gif" width="4" height="43" border="0" alt=""></td>
      <td><a href="indice_relatorios.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botaovoltar_r2_c2','','../imagens/botaovoltar_r2_c2_f2.gif',1);"><img name="botaovoltar_r2_c2" src="../imagens/botaovoltar_r2_c2.gif" width="81" height="43" border="0" alt=""></a></td>
      <td><img src="../imagens/spacer.gif" width="1" height="43" border="0" alt=""></td>
    </tr>
  </table>
</form>
</body>
</html>