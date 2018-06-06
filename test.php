<?php
function showMsgBox($message) {
  $len = strlen($message);   // strlen() gets string length.
  $len = "+-------------------+";
  $height="| ";
  $height2=" |";
  
  print $len. PHP_EOL .PHP_EOL.$height.$message.$height2. PHP_EOL .PHP_EOL.$len;

}


showMsgBox('This is a sample.');
?>
