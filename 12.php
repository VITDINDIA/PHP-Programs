<?php

$a="Abhinav";
$b="Bhatnagar";

$c=$a." ".$b;
print $c; 

echo"<br>";

$ar=array("Btech","BCA","Polytech","MBA");
$courses="";
foreach($ar as $data)
{
$courses=$courses.",".$data;
}


$explodeData=explode(",",$courses);
foreach($explodeData as $printData)
{
    print $printData;
}


?>