<?php
$unit;
$total=0;
if($unit<=50)
{
    $total=$unit*3.50;
}
else if($unit>=51||$unit<=100)
{
    $total=$unit*4.00;
}
else if($unit>=101||$unit<=150)
{
    $total=$unit*5.20;
}
else
{
  $total=$unit*6.50;
}
echo"Total is electricity bill".$total;