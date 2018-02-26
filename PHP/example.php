<?php
$txt = "pizza";
echo "I love $txt,";
echo " because $txt is yummy!";

echo '<br>';
echo '<br>';

$a = "34";
$b = " 636?";
$c = '$a $b';

$c = $a + $b;
$anwser = $c;
echo "34 + 636 = $anwser";



echo '<br>';
echo '<br>';

$d = "How";
$e = " are";
$f = " you?";
$g = '$d $e $f';

$g = $d.$e.$f;
$string = $g;
echo "$string";

echo '<br>';
echo '<br>';

$t = date("H");
if($t%2==0)
{
 echo "even"; 
}
else
{
 echo "odd";
} 




?>

