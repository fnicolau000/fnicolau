<?php
// En: Begin PHP Code / Fr: Debut code PHP
/******************************************************************************\
* Cookies Text Access Counter                  Version 1.0                     *
* Copyright 2000 Frederic TYNDIUK (FTLS)       All Rights Reserved.            *
* E-Mail: tyndiuk@ftls.org                     Script License: GPL             *
* Created  02/28/2000                          Last Modified 02/28/2000        *
* Scripts Archive at:                          http://www.ftls.org/php/        *
*******************************************************************************/
// Necessary Variables:

$file = "php/contador/count_data.txt";
	// En: Absolute path and name to count data file.
	// Fr: Chemin absolu (complet) et Nom du fichier compteur.

$EXPIRE_DATE = 86400;
   // En: Cookies Expiration date (second).
   // Fr: Date d'expiration du cookies (en seconde);

// End  Necessary Variables section
/******************************************************************************/

if (file_exists($file)) {
	// En: Open, read, increment, save and close file.
	// Fr: Ouvre, lit, incrémente, sauve et ferme le fichier.
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
	// En: Display a error message if file does not exist.
	// Fr: Affiche un message d'erreur si le fichier n'existe pas.
	echo "Can't find file, check '\$file' var...<BR>";
}
// En: End PHP Code
// Fr: Fin code PHP
?>

<HTML><HEAD><TITLE>Counter</TITLE></HEAD>
<BODY BGCOLOR="white">
<BR><BR><P ALIGN="Center"><FONT FACE="Arial, helvetica" SIZE="+2" COLOR="#336699"><STRONG><EM>Sample / Examples</EM></STRONG></FONT></P><BR>

<!-- En: Display result -->
<!-- Fr: Affiche le resulat. -->

<CENTER><B>
Visitors / Nombre de visiteurs :
<?php echo $count ?>

</B></CENTER>

<CENTER><BR><BR>
	<FONT FACE="Arial" SIZE=-2>
	<EM>&copy Copyright 2000 <A HREF="http://www.ftls.org/ftls.shtml">FTLS</A> (Tyndiuk Fr&eacute;d&eacute;ric). All rights reserved.
	<BR>FTLS's PHP Scripts Archive : <A HREF="http://www.ftls.org/php/">http://www.ftls.org/php/</A></EM></FONT>
</CENTER></BODY></HTML>
