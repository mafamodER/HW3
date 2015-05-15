<meta charset="utf-8">
<?php

echo "============<br> ";

$var = date("H:i");
switch ($var)
{
	case ($var < "10:59");
	echo "Доброе утро";
	break;
	case ($var < "16:59");
	echo "Добрый день";
	break;
	case ($var < "21:59");
	echo "Добрый вечер";
	break;
	case ($var < "4:59");
	echo "Ночь на дворе - иди спать";
}
 echo ", Сейчас";
 echo " $var";
 ?>