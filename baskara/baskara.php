<form method="post">
A: <input type=text name=a size=3>

B: <input type=text name=b size=3>

C: <input type=text name=c size=3>

<input type=submit value=Calcular>

<?

// Formula de baskara, por SCHETTINO(SKROLL). 1.0

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if (isset($a,$b,$c)){

$cal = $b * $b - 4 * $a * $c;
$cal2 = -1 * $b + sqrt($cal) / 2 * $a;
$cal3 = -1 * $b - sqrt($cal) / 2 * $a;

echo '

';
echo 'Delta: ';
echo $cal;
echo '
';
echo 'X 1 Linha: ';
echo $cal2;
echo '
';
echo 'X 2 Linhas: ';
echo $cal3;

}
?>