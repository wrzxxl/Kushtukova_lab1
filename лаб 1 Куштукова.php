<form action="Lab_1_Опалев_П-811.php" method="get">
	A: <input type="text" name="name1"><br>
	H: <input type="text" name="name2"><br>
	Номер дня: <input type="text" name="name3"><br>
	N: <input type="text" name="name4"><br>
	<input type="submit" name="submit" value="Отправить">
</form>
<?php
$a=$_REQUEST['name1'];
$h=$_REQUEST['name2'];
$S=1/2*$a*$h;
echo "1.Формула площади треугольника: S=1/2*a*h<br>";
echo "Площадь треугольника = 1/2*$a*$h = $S<br>";

echo "2-4.";
$day=$_REQUEST['name3'];
switch ($day) {
	case '1':
	case '2':
	case '3':
	case '4':
	case '5':
		echo "Это рабочий день<br>";
		break;
	case '6':
	case '7':
		echo "Это выходной день<br>";
		break;
	default:
		echo "Неизвестный день<br>";
		break;
}

echo "5.";
$a='78';
$b=78;
if ($a===$b)
	echo "Эквивалентны<br>";
else
	echo "Не эквивалентны<br>";
if ($a==$b)
	echo "Равны<br>";
else
	echo "Не равны<br>";

echo "6.";
for ($i=0; $i <= 100 ; $i++) {
	if ($i % 2 == 0)
		echo "$i ";
}
echo "<br>";

echo "7.";
for ($i=1; $i <= 9 ; $i++) {
	for ($j=0; $j < $i ; $j++)
		echo "$i";
	echo "<br>";
}

for ($i=1; $i <= 50; $i++)
	if (($i % 5 == 0) or ($i % 7 == 0))
		$C=$C+$i;
echo "8.Сумма чисел от 1 до 50, делящиеся на 5 или 7 = $C<br>";

$e=1;
for ($i=1; $i <= 10 ; $i++) {
	for ($j=$i; $j < $i+1 ; $j++)
		$d=$d+$j;
	$e=$e*$d;
}
echo "9.Результат вычисления (1+2)*(1+2+3)*...*(1+2+...+10) = $e<br>";

for ($i=20; $i <=95 ; $i++)
	if ($i % 5 == 0)
		$f=$f+$i;
echo "10.Сумма чисел от 20 до 95, делящихся на 5 = $f<br>";

$n=$_REQUEST['name4'];
echo "11.Значения степеней: ";
for ($i=1; $i <= $n; $i++){
	$g=$g+pow($i,$i);
	echo "$i ";
	$k=$k+$i;
}
echo "<br>Сумма степеней = $k<br>";
echo "Результат вычисления = $g<br>";

echo "12.Таблица умножения от 2 до 12:<br>";
for ($i=2; $i <= 12 ; $i++) {
	for ($j=2; $j <= 12 ; $j++) {
		$l=$i*$j;
		echo "$l ";
	}
	echo "<br>";
}
?>