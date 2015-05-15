<meta charset = "utf-8">
<img src="http://math-prosto.ru/images/area/rectangle.png">
<?php
//// площадь прямоугольника S=ab*bc

echo "<br>";
$ab = 3;
$bc = 7;
$s = $ab * $bc;
echo "Sпрям = AB * BC = $ab * $bc = $s";

/// площадь круга S=n * R^2

echo "<br>";
$n = "3,14";
$r = "7,5";
$s1 = $n * ($r * $r);
echo "Sруг = n * (R^2) = $n * ($r * $r) = $s1";

/// площадь треугольника S=1/2(b*h)

echo "<br>";
$b = 5;
$h = 3;
$s2 = 1/2 * ($b * $h);
echo "Sтреуг = 1/2*bh = 1/2 * ($b * $h) = $s2";

?>