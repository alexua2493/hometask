<?php
//2.2. Прочитать число из консоли. Если число соответствует долларовой купюре (т.е. такая купюра существует) - вывести ссылку на ее картинку, если нет - извиниться.
print "Please, type below rating of the banknote and receive a link for its image \n";
$handle = fopen ("php://stdin","r");
$dollar = fgets($handle);

switch ($dollar) {
	case 1:
		echo "link to 1$ banknote http://banknotes.finance.ua/src/images/full/1-0.jpg"; break;
	case 2:
		echo "link to 2$ banknote http://banknotes.finance.ua/src/images/full/2-0.jpg"; break;
	case 5:
		echo "link to 5$ banknote http://banknotes.finance.ua/src/images/full/4-0.jpg"; break;
	case 10:
		echo "link to 10$ banknote http://banknotes.finance.ua/src/images/full/8-0.jpg"; break;
	case 20:
		echo "link to 20$ banknote http://banknotes.finance.ua/src/images/full/11-0.jpg"; break;
	case 50:
		echo "link to 50$ banknote http://banknotes.finance.ua/src/images/full/14-0.jpg"; break;
	case 100:
		echo "link to 100$ banknote http://forex-markets.ru/usd/usd-100.jpg"; break;

	default: echo "we excuse, but this banknote doesn't exist";

}