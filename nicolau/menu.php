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
<title>Família Doker/Nicolau e Dib</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="0" bgcolor="#485C00">
<div align="center"> 
  <p><img src="imagem/mao.gif" width="383" height="456" border="0" usemap="#Lambrequim"></p>
</div>
<map name="Lambrequim">
  <area shape="rect" coords="123,277,246,318" href="mailto:felipenicolau@felipenicolau.com.br">
  <area shape="rect" coords="104,204,271,247" href="arvore.htm" target="central">
  <area shape="rect" coords="123,159,245,183" href="historia.htm" target="central">
  <area shape="rect" coords="130,121,238,142" href="main_fotos.htm" target="central">
  <area shape="rect" coords="127,74,259,101" href="entrada.htm" target="central">
</map>
<table width="50" border="0" align="center" cellpadding="0" cellspacing="0" class="table3">

              <tr> 
                <td align="center"><FONT SIZE=3 FACE="arial, helvética" COLOR="99FFCC"><STRONG>Visitantes<br><?php echo $count ?></strong></font></td>
              </tr>
			  
            </table>

</body>
</html>
