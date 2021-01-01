<?php

// reversal of an array


$arr=[1,2,3,4,5,6];

$len=count($arr);

//here we do swapping

$temp=0;

for($i=0;$i<$len/2;$i++)
{
   $temp=$arr[$len-$i-1];
   $arr[$len-$i-1]=$arr[$i];
   $arr[$i]=$temp;

}

// temp contains last elment
// $arr[$i] contains first element
// and so on and finally array get reversed


for($i=0;$i<$len;$i++)
{
	echo $arr[$i]."\n";
}

//out will be looks like as follow

//6 5 4 3 2 1


?>