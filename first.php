<?php
$terms = "#utopian#";
$messages = "günümüzün en popüler geliştirici ve öğretici paltformu utopian dır.";
preg_match($terms,$messages,$output);
print_r($output);
?>
