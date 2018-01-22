<?php
$terms="/^#[0-9A-F]{3}|[0-9A-F]{6}$/i";
$message= "#00z00";
if(preg_match_all($terms,$message))
{
echo "başarılı";
} else  {echo "hatalı";}

?>
