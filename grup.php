<?php
$message= "<img src='steemit.jpg'><img src='utopian.png'>";
$terms="#src='([a-z\.]+)'#";
preg_match_all($terms,$message,$output);
echo "<pre>";
print_r($output[1]);
echo "<pre>";
?>
