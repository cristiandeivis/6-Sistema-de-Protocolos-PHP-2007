<html>
<head>
<title>cadastra_empresa</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
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
<p>&nbsp;</p><table width="582" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="49" height="19">&nbsp;</td>
    <td width="731"><div align="center"><img src="imagens_fundo/cadastroempresa.gif" width="181" height="29" align="middle"><br>
        <br>
      </div></td>
    <td width="170">&nbsp;</td>
  </tr>
  <tr>
    <td height="118">&nbsp;</td>
    <td valign="top">
<form action="confirma_cadastro_empresa.php" method="post" name="form1" id="form1">
        <table width="90%" border="1" align="center" cellpadding="1">
          <tr> 
            <td width="38%"><div align="center"><font color="#000099" face="Courier New, Courier, mono">Nome 
                da Empresa:</font></div></td>
            <td width="62%"><input name="nome_empresa" type="text" id="nome_empresa" size="41"></td></tr> 
<tr> <td colspan="2"> <div align="left"> <input name="salvar" type="submit" id="salvar" value="Salva"> 
<input name="limpar" type="reset" id="limpar" value="Limpar"> </div></td></tr> 
</table>
        <div align="right"> </div>
      </form>
      
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td><table width="85" border="0" align="center" cellpadding="0" cellspacing="0">
        <!-- fwtable fwsrc="site2.png" fwbase="botaovoltar.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
        <tr> 
          <td><img src="imagens/spacer.gif" width="4" height="1" border="0" alt=""></td>
          <td><img src="imagens/spacer.gif" width="81" height="1" border="0" alt=""></td>
          <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt=""></td>
        </tr>
        <tr> 
          <td colspan="2"><img name="botaovoltar_r1_c1" src="imagens/botaovoltar_r1_c1.gif" width="85" height="2" border="0" alt=""></td>
          <td><img src="imagens/spacer.gif" width="1" height="2" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><img name="botaovoltar_r2_c1" src="imagens/botaovoltar_r2_c1.gif" width="4" height="43" border="0" alt=""></td>
          <td><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('botaovoltar_r2_c2','','imagens/botaovoltar_r2_c2_f2.gif',1);"><img name="botaovoltar_r2_c2" src="imagens/botaovoltar_r2_c2.gif" width="81" height="43" border="0" alt=""></a></td>
          <td><img src="imagens/spacer.gif" width="1" height="43" border="0" alt=""></td>
        </tr>
      </table>
</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
