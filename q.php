<?php
function f($a,$b)
{
if($b==0)
{return $a;}
else if($a>$b)
{return f($b,$a%$b);}
else
{return f($a,$b%$a);}
}

$a=readline("enter frst no:");
$b=readline("enter scnd no:");
 echo f($a,$b);

?>
