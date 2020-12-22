<?php
function rand_float($st_num=0,$end_num=1,$mul=1000000)
{
if ($st_num>$end_num) return false;
return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
}
echo rand_float()."\n".'<br>';
echo rand_float(0.6)."\n".'<br>';
echo rand_float(0.5,0.6)."\n".'<br>';
echo rand_float(0,20)."\n".'<br>';
echo rand_float(0,3,2)."\n".'<br>'; 
echo rand_float(0,2,20)."\n".'<br>';
echo rand_float(0,3,15)."\n".'<br>';
echo rand_float(0,2,10)."\n".'<br>';
?>