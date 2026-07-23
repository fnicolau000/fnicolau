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
<base target="central">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<frameset cols="405,*" rows="*" frameborder="NO">
  <frame src="menu.htm" name="menu" scrolling="NO">
  <frame src="entrada.htm" name="central" scrolling="YES">
</frameset>
<noframes><body bgcolor="#FFFFFF">

  <table width="50" border="0" align="center" cellpadding="0" cellspacing="0" class="table3">

              <tr> 
                <td align="center"><FONT SIZE=3 FACE="arial, helvética" COLOR="99FFCC"><STRONG>Visitantes<br><?php echo $count ?></strong></font></td>
              </tr>
			  </table>

</body>
</noframes>
</html>
