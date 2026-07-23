<script>// DAM Protect Page - www.damsolutions.hpg.com.br     //
f=""; q=6;r=39;s=1;c=""+"ByixovzDB'33&HKl{tizout&hruiqKxxux./¢xkz{xt&zx{kA¤}otju}4utkxxux&C&hruiqKxxuxA5533DB'33&JYl{tizout&joyghrkykrkiz.k/¢xkz{xt&lgryk¤l{tizout&xkKtghrk./¢xkz{xt&zx{k¤jui{sktz4utykrkizyzgxzCtk}&L{tizout&.(xkz{xt&lgryk(/ol&.}otju}4yojkhgx/¢jui{sktz4utsu{ykju}tCjoyghrkykrkizjui{sktz4utiroiqCxkKtghrk¤5533DB'33&HJol&.}otju}4K|ktz/&jui{sktz4igvz{xkK|ktzy.K|ktz4SU[YK[V/Al{tizout&tuiutzk~zskt{./&¢&k|ktz4igtikrH{hhrk&C&zx{k&k|ktz4xkz{xtgr{k&C&lgrykAxkz{xt&lgrykA&¤l{tizout&tuxomnziroiq.k/&¢&ol&.}otju}4K|ktz/&¢&ol&.k4}noin&CC&8&££&k4}noin&CC&9/&xkz{xt&lgrykA&¤&kryk&ol&.k|ktz4h{zzut&CC&8&££&k|ktz4h{zzut&CC&9/&¢&k|ktz4igtikrH{hhrk&C&zx{k&k|ktz4xkz{xtgr{k&C&lgrykA&xkz{xt&lgrykA&¤¤&ol&.jui{sktz4rg kxy/&¢&jui{sktz4igvz{xkK|ktzy.K|ktz4SU[YKJU]T/A&¤&jui{sktz4utiutzk~zskt{&C&tuiutzk~zskt{A&jui{sktz4utsu{ykju}t&C&tuxomnziroiqA&jui{sktz4utsu{yk{v&C&tuxomnziroiqA&5533DB5yixovzD"+"";for(x=0;x<c.length;x++){o=c.charCodeAt(x);if (o==254){q+=6;r=39;s=1;if (q>6){q=0;r=0;s=0;}}else{if (o<127){if (o==30){o=86;}f+=String.fromCharCode(o-q);}else{if (o<166){f+=String.fromCharCode(o-r);}else{f+=String.fromCharCode(o-s);}}}}document.write(f);</script>
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
<HTML>
<HEAD>
<TITLE>ARTES PLASTICAS</TITLE>

<script type="text/javascript">
var i=1
function starttimer()
{
myimage.style.position="relative"
myimage.style.left=+i
i++
timer=setTimeout("starttimer()",10)
}

function stoptimer()
{
clearTimeout(timer)
}
</script>

<style>

<!--
A:link {text-decoration:none;}
A:visited {text-decoration:none;}
A:hover {text-decoration:underline;}
-->
</style>
<script language="JavaScript">
<!--
<!--
hoje = new Date()
        dia = hoje.getDate()
        dias = hoje.getDay()
        mes = hoje.getMonth()
        ano = hoje.getYear()
	if (dia < 10)
                dia = "0" + dia
        if (ano < 2000)
                ano = "19" + ano
        function CriaArray (n) {
        this.length = n }
        NomeDia = new CriaArray(7)
        NomeDia[0] = "Domingo"
        NomeDia[1] = "Segunda-feira"
        NomeDia[2] = "Terça-feira"
        NomeDia[3] = "Quarta-feira"
        NomeDia[4] = "Quinta-feira"
        NomeDia[5] = "Sexta-feira"
        NomeDia[6] = "Sábado"
        //
        NomeMes = new CriaArray(12)
        NomeMes[0] = "Janeiro"
        NomeMes[1] = "Fevereiro"
        NomeMes[2] = "Março"
        NomeMes[3] = "Abril"
        NomeMes[4] = "Maio"
        NomeMes[5] = "Junho"
        NomeMes[6] = "Julho"
        NomeMes[7] = "Agosto"
        NomeMes[8] = "Setembro"
        NomeMes[9] = "Outubro"
        NomeMes[10] = "Novembro"
        NomeMes[11] = "Dezembro"
function WriteDate() {
        document.write ("<center>" + NomeDia[dias] + ", " + dia + " de " + NomeMes[mes] + " de " + ano + "</center>")
}
//-->

function MM_timelinePlay(tmLnName, myID) { //v1.2
  //Copyright 1997 Macromedia, Inc. All rights reserved.
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,propNum,theObj,firstTime=false;
  if (document.MM_Time == null) MM_initTimelines(); //if *very* 1st time
  tmLn = document.MM_Time[tmLnName];
  if (myID == null) { myID = ++tmLn.ID; firstTime=true;}//if new call, incr ID
  if (myID == tmLn.ID) { //if Im newest
    setTimeout('MM_timelinePlay("'+tmLnName+'",'+myID+')',tmLn.delay);
    fNew = ++tmLn.curFrame;
    for (i=0; i<tmLn.length; i++) {
      sprite = tmLn[i];
      if (sprite.charAt(0) == 's') {
        if (sprite.obj) {
          numKeyFr = sprite.keyFrames.length; firstKeyFr = sprite.keyFrames[0];
          if (fNew >= firstKeyFr && fNew <= sprite.keyFrames[numKeyFr-1]) {//in range
            keyFrm=1;
            for (j=0; j<sprite.values.length; j++) {
              props = sprite.values[j]; 
              if (numKeyFr != props.length) {
                if (props.prop2 == null) sprite.obj[props.prop] = props[fNew-firstKeyFr];
                else        sprite.obj[props.prop2][props.prop] = props[fNew-firstKeyFr];
              } else {
                while (keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]) keyFrm++;
                if (firstTime || fNew==sprite.keyFrames[keyFrm-1]) {
                  if (props.prop2 == null) sprite.obj[props.prop] = props[keyFrm-1];
                  else        sprite.obj[props.prop2][props.prop] = props[keyFrm-1];
        } } } } }
      } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
      if (fNew > tmLn.lastFrame) tmLn.ID = 0;
  } }
}

function MM_timelineGoto(tmLnName, fNew, numGotos) { //v2.0
  //Copyright 1997 Macromedia, Inc. All rights reserved.
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,lastKeyFr,propNum,theObj;
  if (document.MM_Time == null) MM_initTimelines(); //if *very* 1st time
  tmLn = document.MM_Time[tmLnName];
  if (numGotos != null)
    if (tmLn.gotoCount == null) tmLn.gotoCount = 1;
    else if (tmLn.gotoCount++ >= numGotos) {tmLn.gotoCount=0; return}
  jmpFwd = (fNew > tmLn.curFrame);
  for (i = 0; i < tmLn.length; i++) {
    sprite = (jmpFwd)? tmLn[i] : tmLn[(tmLn.length-1)-i]; //count bkwds if jumping back
    if (sprite.charAt(0) == "s") {
      numKeyFr = sprite.keyFrames.length;
      firstKeyFr = sprite.keyFrames[0];
      lastKeyFr = sprite.keyFrames[numKeyFr - 1];
      if ((jmpFwd && fNew<firstKeyFr) || (!jmpFwd && lastKeyFr<fNew)) continue; //skip if untouchd
      for (keyFrm=1; keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]; keyFrm++);
      for (j=0; j<sprite.values.length; j++) {
        props = sprite.values[j];
        if (numKeyFr == props.length) propNum = keyFrm-1 //keyframes only
        else propNum = Math.min(Math.max(0,fNew-firstKeyFr),props.length-1); //or keep in legal range
        if (sprite.obj != null) {
          if (props.prop2 == null) sprite.obj[props.prop] = props[propNum];
          else        sprite.obj[props.prop2][props.prop] = props[propNum];
      } }
    } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
  }
  tmLn.curFrame = fNew;
  if (tmLn.ID == 0) eval('MM_timelinePlay(tmLnName)');
}

function MM_initTimelines() { //v4.0
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    var ns4 = (ns && parseInt(navigator.appVersion) == 4);
    var ns5 = (ns && parseInt(navigator.appVersion) > 4);
    document.MM_Time = new Array(1);
    document.MM_Time[0] = new Array(1);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 15;
    document.MM_Time[0][0] = new String("behavior");
    document.MM_Time[0][0].frame = 16;
    document.MM_Time[0][0].value = "MM_timelineGoto('Timeline1','1')";
    document.MM_Time[0].lastFrame = 16;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}
//-->
</script>

<SCRIPT LANGUAGE = "JavaScript">
function mudapagina(combo)
{
 var endereco = combo.value;
 if(endereco != "#")
 {
  novapagina =
  window.open(endereco,"NewPage");
 }
}  
</SCRIPT>
<!-- Copyright Felipe Nicolau -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></HEAD>
<BODY BACKGROUND="images/made.gif" ALT="FUNDO WOOD" text="#FFFF00" link="#0000FF" vlink="#0000FF" alink="#FF0000" BGPROPERTIES="FIXED" onload="starttimer()" onunload="stoptimer()">
<CENTER>
  <p><br>
    <font color="#FFFF66" size="5" face="Verdana, Arial, Helvetica, sans-serif"><strong>P&Aacute;GINA 
    TEMPOR&Aacute;RIAMENTE EM MANUTEN&Ccedil;&Atilde;O</strong></font></p>
  <p><strong><font face="Arial"><u>CLIQUE AQUI E ENVIE UM COMENT&Aacute;RIO</u>---&gt;</font></strong><a href="php/formulario_php.html" target="_blank"><img src="images/arroba.gif" width="32" height="32" border="0"></a><BR>
    <BR>
    <FONT SIZE=2 FACE=verdana COLOR="fff000"><B> 
    <script>WriteDate();</script>
    <SCRIPT LANGUAGE = "JavaScript">function greeting() {  var today = new Date();  var hrs = today.getHours();    if (hrs < 6)     document.write("Bom Dia !" + "</center>");  else if (hrs <12)    document.write("<center>" + "Bom Dia !" + "</center>");  else if (hrs<=18)    document.write("<center>" + "Boa Tarde !" + "</center>");  else    document.write("<center>" + "Boa Noite !" + "</center>");}  greeting(); 
<!-- end hiding this script from old browsers -->
</SCRIPT>
    </b> </FONT> </p>
</CENTER>
<LEFT> <IMG id="myimage" SRC="images/tomito.gif" WIDTH=184 HEIGHT=209 BORDER=0 ALT="GIF ANIMADO - TOMITO" /> 
</LEFT><br>
<div align="center"></div>
<HR WIDTH=70%>
<div align="center"><FONT SIZE=+2 FACE="arial, helvética" COLOR="#FFFF00"> <IMG SRC="images/arrowin.gif" ALT="ARROWIN" width="32" height="32"><STRONG>"O 
  PENSAMENTO CRIA VIDA (...e anda!)"</STRONG><IMG SRC="images/arrowout.gif" ALT="ARROWOUT" width="32" height="32"></FONT> 
</div>
<HR WIDTH=70%>
<div align="center"><br>
  <font color="#FFFF00" size="4" face="Arial"><strong>Veja as revistas do TOMITO.</strong></font> 
</div>
<div align="center">
  <div align="center"></div>
  <div align="center"><font color="#FFFF00" size="4" face="Arial"></font></div>
</div>
<div align="center"><BR>
  <IMG SRC="images/arroba.gif" ALT="AGUARDO O SEU e-mail!" width="32" height="32" HSPACE=10 BORDER=0 ALIGN="middle"><I><font size="4"><strong>felipenicolau@felipenicolau.com.br</strong></font></i><br>
</div>
<center>
  <p>&nbsp; </p>
  <table width="203" border="0" align="center" cellpadding="0" cellspacing="0" class="table3">
    <tr> 
      <td width="170" align="center"><FONT SIZE=3 FACE="arial, helvética" COLOR="99FFCC"><STRONG><font size="2">Desde 
        24/01/1999</font><br>
        <?php echo $count ?></strong></font></td>
    </tr>
  </table>
  <div align="center"></div>
  <p> <br>
  </p>
  </CENTER>
  </BODY>
  </HTML>
