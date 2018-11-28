<?php
$checkNum = 5;
$number=442158755745;
$arrNum = str_split($number);

foreach ($arrNum as $key => $value) {
  if($value==$checkNum){
    $count+=1;
  }
}

echo "At number $number number $checkNum appears $count time(s).";
?>

