<?php
$ar=Array(12,6,123,41,123);
$count=count($ar);
rsort($ar);
for($i=0;$i<$count;$i++)
{
 print $ar[$i];  
 echo"<br>";
}
?>