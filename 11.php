<?php


function fact($a)
{
$temp=1;    
for($i=$a;$i>=1;$i--)
{
   $temp=$temp*$i; 
}
    return $temp;
}

print fact(5);
?>