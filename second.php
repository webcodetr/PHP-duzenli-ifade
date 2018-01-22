<?php
$terms="#[a-l]#";
$message= "utopian steemit";
preg_match_all($terms,$message,$output);
print_r($output)

?>
