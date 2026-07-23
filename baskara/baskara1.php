<form method="POST">
A:<input type="text" name=a size="20">

B:<input type="text" name=b size="20">

C:<input type="text" name=c size="20">

<input type="submit" value="Calcular">

</form>

<?php
/* Esse script foi 'copiado' por Leopoldo Benicio Balthazar da Silveira Filho
( kazegaara_@hotmail.com ) Entre em contato para mais informações... */
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$delta = $b*$b-4*$a*$c;
$soma = -$b/$a;
$produto = $c/$a;
$raiz = sqrt($delta);
$x1 = -$b+$raiz;
$x2 = -$b-$raiz;
echo 'Delta:
';
echo $delta;
echo '
- Raiz de Delta:
';
echo $raiz;
echo '
- X 1:
';
echo $x1;
echo '
- X 2:
';
echo $x2;
echo '
- Soma:
';
echo $soma;
echo '
- Produto:
';
echo $produto;
?>