<?php
$arr=[1,23,33,45,34,675];
$value=100;
$index=2;
  $ArrayOfIndex = [];
//Находим элементы, после которых надо вставить число. И сохраняем их индексы.

for ($i = 0; $i < count($arr); $i++) {
	if (stripos(Strval($arr[$i]), Strval($index)) !== false) 
  { array_push($ArrayOfIndex,$i);  } 
}
   	$lengh1 = count($ArrayOfIndex);
	 $lengh = count($arr);

//если нет вхождения элемента в массиве	
	if ($lengh1==0) {
		echo ('not found element');
		print_r($arr);
		}
	else //в цикле увеличиваем массив на 1 и вставляем элемент
	{
   for($j=$lengh1-1; $j>=0; $j--)
   { for($i=$lengh; $i>$ArrayOfIndex[$j]; $i--){
        $arr[$i] = $arr[$i-1];
    }

   $arr[$ArrayOfIndex[$j]+1] = $value;
    $lengh = count($arr);}

print_r($arr);}

?>