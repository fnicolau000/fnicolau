<?php

$file = "php/contador/count_data.txt";

$EXPIRE_DATE = 86400;

if (file_exists($file)) {

	$fp = fopen("$file", "r+");
	flock($fp, 1);
	$count = fgets($fp, 4096);
	if ($visited == "") {
		$count += 1; 
		setcookie("visited", $count, time()+$EXPIRE_DATE , "/", $SERVER_NAME);
		fseek($fp,0);
		fputs($fp, $count);
	}
	flock($fp, 3);
	fclose($fp);
} else {

	echo "Erro";
}

?>
<html>
<head>
<title>Chevetteiros de Curitiba</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="scripts/style.css" rel="stylesheet" type="text/css">
<script language="JAVASCRIPT">
  var colors=new Array();
  colors[0] = 0;
  colors[1] = "red";
  colors[2] = "blue";
  var MS=navigator.appVersion.indexOf("MSIE")
  window.isIE4 =(MS>0) && ((parseInt(navigator.appVersion.substring(MS+5,MS+6)) >= 4) && (navigator.appVersion.indexOf("MSIE"))>0)
  function flicker() {
    if (++colors[0]==colors.length) colors[0]=1;
    document.all.flicker.style.color = colors[colors[0]];
    window.tm=setTimeout('flicker()',1000)
  }  
  function checkExpand() {
    if (""!=event.srcElement.id) {
      var ch = event.srcElement.id + "Child"
      var el = document.all[ch] 
      if (null!=el) el.style.display = "none" == el.style.display ? "" : "none"
      event.returnValue=false
    }
  }
</script>
<script language="javascript">
function aviso() {
 var myurl="http://classificados.chevetteiros.com.br/"
 window.open(myurl,'mysmessage','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,resizable=yes,menubar=no,width=850,height=600,left=50,top=150');
 }
aviso();
</script>
</head>
<body bgcolor="#000066" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onclick="checkExpand()"
onload="if (window.isIE4) window.tm=setTimeout('flicker()',1000)"
onunload="clearTimeout(window.tm)" >
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center"> 
      <?php include "base_top.php"; ?>
    </td>
  </tr>
  <tr> 
    <td align="center"><table width="780" border="0" cellspacing="0" cellpadding="0" class="stylefont">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" valign="top" bgcolor="#FFECEC"> 
            <?php include "menu.php"; ?>
            <table width="50" border="0" align="center" cellpadding="0" cellspacing="0" class="table3">
              <tr> 
                <td align="center"><?php echo $count ?></td>
              </tr>
            </table>
            <br> 
            <?php include "publicidade_left.php"; ?>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" class="table3">
              <tr> 
                <td align="center"><font size="1"> 
            <? include("php/visitantes/visionline.php"); ?>
            </font> </td>
              </tr>
            </table>
            <br> </td>
          <td width="440" height="398" align="center" valign="top" bgcolor="#FFFFFF"><table width="95%" border="0" cellspacing="0" cellpadding="0">
              <tr class="stylefont"> 
                <td height="19"><div align="center"> 
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="stylefont">
                      <tr> 
                        <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr> 
                              <td class="stylefont"><div align="center"><strong><font color="#0000FF"> 
                                  </font></strong> <strong><font color="#0000FF"> 
                                  </font></strong> 
                                  <table width="100%" border="0" cellpadding="0" cellspacing="2" class="stylefont">
                                    <tr> 
                                      <td colspan="2" align="center"><a href="arrancada.php"><img src="arrancada/fotos_1etapa.jpg" width="418" height="272" border="1"></a></td>
                                    </tr>
                                    <tr> 
                                      <td colspan="2" align="center">&nbsp;</td>
                                    </tr>
                                    <tr> 
                                      <td><div align="center"><a href="http://classificados.chevetteiros.com.br" target="_blank"><img src="classificados/images/imagens_top_anuncios_logo1.gif" width="186" height="63" border="0"></a></div></td>
                                      <td width="52%" rowspan="2" valign="top"> 
                                        <div align="center"><a href="wallpapers.php"><img src="/imagens/wallpapers.gif" width="180" height="151" border="0"></a><br>
                                          <br>
                                          <a href="wallpapers.php"><img src="wallpapers/chevette_megacar_.jpg" width="130" height="98" border="1"></a> 
                                        </div></td>
                                    </tr>
                                    <tr> 
                                      <td valign="top"> <div align="left"><font face="Verdana">Conhe&ccedil;a 
                                          a melhor maneira de vender pe&ccedil;as 
                                          e acess&oacute;rios para Chevette. O 
                                          Classificados Compra&amp;Venda tem a 
                                          vantagem de ser gratuito e possuir diversas 
                                          sub-categorias onde oque voc&ecirc; 
                                          quer vender, trocar ou comprar se apresenta 
                                          com muita facilidade.</font></div></td>
                                    </tr>
                                    <tr> 
                                      <td colspan="2" align="center"><img src="arrancada/arrancada2005.gif" width="418" height="300" border="1"></td>
                                    </tr>
                                  </table>
                                </div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"> <div align="center"><strong><img src="imagens/encontros_terca.gif" width="418" height="32"></strong></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"> <div align="left"><strong><font color="#0000FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Encontro 
                                  de Antigos</font></strong></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><div align="left"><font color="#FF0000" face="Verdana">Encontros 
                                  da Baixada:</font></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><font face="Verdana">Sempre 
                                as Ter&ccedil;as-Feiras a partir das 19 hrs, encontro 
                                de carros da &eacute;poca e raridades. Bancas 
                                de refrigerante, cerveja, past&eacute;is entre 
                                outros alimentos atendem o encontro.<font color="#FF0000"> 
                                (Evitem ir com carros que possuam algum tipo de 
                                irregularidade, grandes possibilidades de existir 
                                blitz no local)</font></font></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><font color="#FF0000" face="Verdana">Local:</font></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><div align="justify"><font face="Verdana"><em>Pra&ccedil;a 
                                  do Atl&eacute;tico (Baixada) - Rua Engenheiros 
                                  Rebou&ccedil;as com Rua Brigadeiro Franco e 
                                  Rua Buenos Aires.</em></font></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont">&nbsp;</td>
                            </tr>
                            <tr> 
                              <td class="stylefont"> <div align="center"><strong><img src="imagens/encontros_quinta.gif" width="418" height="32"></strong></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"> <div align="left"><strong><font color="#0000FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong><strong><font color="#0000FF">Encontro 
                                  de Clubes</font></strong></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"> <div align="left"><font face="Verdana">Encontros 
                                  Multi-Clubes as Quintas-Feiras no Toa Toa Bar.</font><br>
                                </div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><font color="#FF0000" face="Verdana">Local:</font></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><font face="Verdana"><em>Rua 
                                Carlos Dietzsch pr&oacute;ximo Catedral do Port&atilde;o. 
                                Vindo pela r&aacute;pida centro bairro, entrar 
                                &agrave; direita no Banco do Brasil(Banco de esquina), 
                                a entrada do Bar &eacute; do lado direito j&aacute; 
                                pr&oacute;ximo ao sinaleiro e uma academia, sempre 
                                &agrave; partir das 20:00 hrs.</em></font></td>
                            </tr>
                            <tr> 
                              <td class="stylefont">&nbsp;</td>
                            </tr>
                            <tr> 
                              <td class="stylefont"> <div align="center"><strong><img src="imagens/encontros_domingo.gif" width="418" height="32"></strong></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"> <div align="left"><strong><font color="#0000FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Encontro 
                                  dos Chevetteiros de Curitiba</font></strong></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"> <div align="left"><font face="Verdana">Aos 
                                  Domingos os amigos se re&uacute;nem na Pra&ccedil;a 
                                  do Terminal do Port&atilde;o &agrave; partir 
                                  das 16:00 hrs para trocar uma id&eacute;ia, 
                                  ver os carros, conhecer gente nova e tirar umas 
                                  fotos. OBS: &quot;N&atilde;o sendo oficial este 
                                  encontro, pode acontecer de n&atilde;o ter n&iacute;nguem 
                                  como pode estar lotado.&quot;</font></div></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><font color="#FF0000" face="Verdana">Local:</font></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><font face="Verdana"><em>Estacionamento 
                                da Pra&ccedil;a do Terminal do Port&atilde;o(logo 
                                ao lado do terminal)</em></font></td>
                            </tr>
                            <tr> 
                              <td class="stylefont"><hr></td>
                            </tr>
                            <tr> 
                              <td class="stylefont">&nbsp;</td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                    
                  </div></td>
              </tr>
            </table></td>
          <td align="center" valign="top" bgcolor="#FFFFFF"> 
            <?php include "publicidade_right.php"; ?>
          </td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td align="center"> 
      <?php include "base_down.php"; ?>
    </td>
  </tr>
</table>
</body>
</html>
