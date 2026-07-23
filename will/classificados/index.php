<?php

/* D.E. Classifieds v1.04 
   Copyright © 2002 Frank E. Fitzgerald 
   Distributed under the GNU GPL .
   See the file named "LICENSE".  */

/**************************************
 * File Name: index.php               *
 * ---------                          *
 *                                    *
 **************************************/


require_once 'path_cnfg.php';

require_once(path_cnfg('pathToLibDir').'func_common.php');
require_once(path_cnfg('pathToLibDir').'func_checkUser.php');
require_once(path_cnfg('pathToCnfgDir').'cnfg_vars.php');
require_once(path_cnfg('pathToLibDir').'vars_gbl.php');

$cookie = $HTTP_COOKIE_VARS['log_in_cookie'];

$myDB = db_connect();

checkUser('', ''); 

$content = array();
$content[] = 'doMain();';

require_once(path_cnfg('pathToTemplatesDir').cnfg('tmplt_index'));

db_disconnect($myDB);

function doMain(){

  ?>

<center>
  <font face="Arial" size="3">Olá.<br><br>Seja Bem-Vindo ao Sistema de Compra&Venda dos Chevetteiros de Curitiba. Obrigado por sua visita, boas vendas!</font>
<style>
body {background-color: #FFFFFF; margin-left:0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px; color: "#000000"; font-size:8pt; font-family: "arial";}
.font08 {font-size:8pt; font-family: "arial";}
.texto {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal; text-decoration: none; color: #000000}
</style>
<?php

} // end function doMain()

?>