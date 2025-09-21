<?
	require("db.inc.php");
	if (!empty($_GET['empresa'])){
		$query = "select * from cadastra_empresa where codigo_emp = '$_GET[empresa]'";
		$query = mysql_query($query) or die (mysql_error());
		$rowe  = mysql_fetch_object($query);
	}
	
	if (!empty($_GET['documento'])){
		$query = "select * from cadastra_documentos where codigo_doc = '$_GET[documento]'";
		$query = mysql_query($query) or die (mysql_error());
		$rowd  = mysql_fetch_object($query);
	}
		
	if (!empty($_GET['acao']) && $_GET['acao'] == "cadastraProtocolo"){
		$data = $_POST["data"];
		$empresa = $_POST["empresa"];
		$documento = $_POST["documento"];
		$vencimento = $_POST["vencimento"];
		$valor = "R$ " . $_POST["valor"];
		$obs = $_POST["obs"];
		$query = "insert into cadastra_protocolo (data,vencimento,documento, empresa, valor,obs)"; //comando SQL
		$query .= " values('$data','$vencimento','$documento','$empresa','$valor','$obs')";
		mysql_query($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
		echo "<script>alert('Protocolo cadastrado com sucesso!');</script>";
	}	
	
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Cadastro de Protocolos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script>
function formatar(mascara, documento){
  	var i = documento.value.length;
  	var saida = mascara.substring(0,1);
  	var texto = mascara.substring(i)
  
  	if (texto.substring(0,1) != saida){
		documento.value += texto.substring(0,1);
  }
}
</script>

<script>
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
</script>

<script>
function validarData(field){
var checkstr = "0123456789";
var DateField = field;
var Datevalue = "";
var DateTemp = "";
var seperator = "/";
var day;
var month;
var year;
var leap = 0;
var err = 0;
var i;
   err = 0;
   DateValue = DateField.value;
   /* Delete all chars except 0..9 */
   for (i = 0; i < DateValue.length; i++) {
	  if (checkstr.indexOf(DateValue.substr(i,1)) >= 0) {
	     DateTemp = DateTemp + DateValue.substr(i,1);
	  }
   }
   DateValue = DateTemp;
   /* Always change date to 8 digits - string*/
   /* if year is entered as 2-digit / always assume 20xx */
   if (DateValue.length == 6) {
      DateValue = DateValue.substr(0,4) + '20' + DateValue.substr(4,2); }
   if (DateValue.length != 8) {
      err = 19;}
   /* year is wrong if year = 0000 */
   year = DateValue.substr(4,4);
   if (year == 0) {
      err = 20;
   }
   /* Validation of month*/
   month = DateValue.substr(2,2);
   if ((month < 1) || (month > 12)) {
      err = 21;
   }
   /* Validation of day*/
   day = DateValue.substr(0,2);
   if (day < 1) {
     err = 22;
   }
   /* Validation leap-year / february / day */
   if ((year % 4 == 0) || (year % 100 == 0) || (year % 400 == 0)) {
      leap = 1;
   }
   if ((month == 2) && (leap == 1) && (day > 29)) {
      err = 23;
   }
   if ((month == 2) && (leap != 1) && (day > 28)) {
      err = 24;
   }
   /* Validation of other months */
   if ((day > 31) && ((month == "01") || (month == "03") || (month == "05") || (month == "07") || (month == "08") || (month == "10") || (month == "12"))) {
      err = 25;
   }
   if ((day > 30) && ((month == "04") || (month == "06") || (month == "09") || (month == "11"))) {
      err = 26;
   }
   /* if 00 ist entered, no error, deletin??????????ŸG???????????†????????????????????????????????????????††?????????|?????????????????????????????????????????????????????????????????????????????????????????††?????????????????????????????????†?Z?????????????????????????????????????????†??????????????????????????????????????????†?Z8???????????????????????????????????????????????†???????????????????????????????????????????????†?????????????????????????????Z???????????????????????? ??L????????g the entry */
   if ((day == 0) && (month == 0) && (year == 00)) {
      err = 0; day = ""; month = ""; year = ""; seperator = "";
   }
   /* if no error, write the completed date to Input-Field (e.g. 13.12.2001) */
   if (err == 0) {
      DateField.value = day + seperator + month + seperator + year;
   }
   /* Error-message if err != 0 */
   else {
      alert("Formato de Data Inválido!");
      DateField.value="";
	  DateField.select();
	  DateField.focus();
   }
}
//  End -->
</script>

<script>
	function validaForm(d){
		//validar nome
		d = document.form1;
		if (d.data.value == ""){
			alert("O campo " + d.data.name + " deve ser preenchido!");
			d.data.focus();
			return false;
		}
		if (d.empresa.value == ""){
		alert("O campo " + d.empresa.name + " deve ser preenchido!");
		d.empresa.focus();
		return false;
		}
		if (d.documento.value == ""){
		alert("O campo " + d.documento.name + " deve ser preenchido!");
		d.documento.focus();
		return false;
		}
		return true;
		}
</script>

<script>
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

<body topmargin="0" onLoad="MM_preloadImages('imagens/botaovoltar_r2_c2_f2.gif')">
<div align="center"><img src="imagens_fundo/cadastrodeprotocolos.gif" width="199" height="29"></div>
<form action="cadastra_protocolo.php?acao=cadastraProtocolo" onSubmit="return validaForm()" " method="post" name="form1" id="form1">
  <table width="75%" border="1" align="center">
    <tr> 
      <td width="24%"><font color="#000099" face="Courier New, Courier, mono">Data: 
        </font></td>
      <td colspan="3"><font face="Courier New, Courier, mono"> 
        <input name="data" type="text" id="data" OnBlur="validarData(this)" OnKeyPress="formatar('##/##/####', this)" value="<?=@$data?>" size="10">
        </font></td>
    </tr>
    <tr> 
      <td height="26"> <font color="#000099" face="Courier New, Courier, mono">Empresa: 
        </font></td>
      <td width="43%"> <div align="left"> <font face="Courier New, Courier, mono"> 
          <input name="empresa" type="text" id="empresa" dir="ltr" lang="pt" value="<?=@$empresa?>" size="40" readonly="true">
          </font></div></td>
      <td width="4%"> <a href="#" onclick="window.open('buscar_empresa.php','','scrollbars=yes,width=600,height=400')"><img src="imagens_fundo/botpesq.gif" width="23" height="22" border="0"></a></td>
      <td width="29%"><font face="Courier New, Courier, mono">&nbsp;</font></td>
    </tr>
    <tr> 
      <td><font color="#000099" face="Courier New, Courier, mono"> Documento: 
        </font></td>
      <td> <div align="left"> <font face="Courier New, Courier, mono"> 
          <input name="documento" type="text" id="documento" size="40" readonly="true">
          </font></div></td>
      <td><a href="#" onclick="window.open('buscar_documento.php','','scrollbars=yes,width=600,height=400')"><img src="imagens_fundo/botpesq.gif" width="23" height="22" border="0"></a></td>
      <td><font face="Courier New, Courier, mono">&nbsp;</font></td>
    </tr>
    <tr> 
      <td><font color="#000099" face="Courier New, Courier, mono">Vencimento: 
        </font></td>
      <td colspan="3"><font face="Courier New, Courier, mono"> 
        <input name="vencimento" type="text" id="vencimento2" OnBlur="validarData(this)" onKeyPress="formatar('##/##/####', this)" size="10">
        </font></td>
    </tr>
    <tr> 
      <td><font color="#000099" face="Courier New, Courier, mono">Valor: </font></td>
      <td colspan="3"><font face="Courier New, Courier, mono"> 
        <input name="valor" type="text" id="valor" onKeyPress="return(MascaraMoeda(this,'.',',',event))" size="10">
        </font></td>
    </tr>
    <tr> 
      <td height="26"> 
        <div align="justify"><font color="#000099" face="Courier New, Courier, mono">Observa&ccedil;&otilde;es:</font></div></td>
      <td colspan="3"><font face="Courier New, Courier, mono"> 
        <input name="obs" type="text" id="obs" size="40">
        </font></td>
    </tr>
    <tr> 
      <td height="23" colspan="4"><div align="center">
          <input type="submit" name="Submit" value="Gravar">
          <input type="reset" name="Submit2" value="Limpar">
        </div></td>
    </tr>
  </table>
  <br>
  <br>
  <?  
  		$data    = @$_POST['data'];
		$empresa = @$_POST['empresa']; 
  		$queryp = "select * from cadastra_protocolo where data = '$data' and empresa = '".@$empresa."'"; 
		$queryp = mysql_query($queryp) or die (mysql_error());
  		if (!empty($queryp) && mysql_num_rows($queryp) > 0) { 
	?>
  <table width="92%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="10%"><div align="center"><font color="#000099" face="Courier New, Courier, mono">Data</font></div></td>
      <td width="17%"><div align="center"><font color="#000099" face="Courier New, Courier, mono">Empresa</font></div></td>
      <td width="22%"><div align="center"><font color="#000099" face="Courier New, Courier, mono">Documento</font></div></td>
      <td width="14%"><div align="center"><font color="#000099" face="Courier New, Courier, mono">Vencimento</font></div></td>
      <td width="18%"><div align="center"><font color="#000099" face="Courier New, Courier, mono">Valor</font></div></td>
      <td width="19%"><div align="center"><font color="#000099" face="Courier New, Courier, mono">Obs</font></div></td>
    </tr>
    <?
	  	while($rowpp = mysql_fetch_object($queryp)){
      ?>
    <tr> 
      <td><div align="center"> <font face="Courier New, Courier, mono"> 
          <?=$rowpp->data?>
          </font></div></td>
      <td><div align="center"> <font face="Courier New, Courier, mono"> 
          <?=$rowpp->empresa?>
          </font></div></td>
      <td><div align="center"> <font face="Courier New, Courier, mono"> 
          <?=$rowpp->documento?>
          </font></div></td>
      <td><div align="center"> <font face="Courier New, Courier, mono"> 
          <?=$rowpp->vencimento?>
          </font></div></td>
      <td><div align="center"> <font face="Courier New, Courier, mono"> 
          <?=$rowpp->valor?>
          </font></div></td>
      <td><div align="center"> <font face="Courier New, Courier, mono"> 
          <?=$rowpp->obs?>
          </font></div></td>
    </tr>
    <?
	   }
    ?>
  </table>
	<? 
		} 
	?>
</form>
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
</body>
</html>