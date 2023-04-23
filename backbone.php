<?php
$name=$_POST['name'];
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$goal=$_POST['goal'];
$medical_issues=$_POST['medical_issues'];
$pain=$_POST['pain'];

$str=$name."\t".$age."\t".$height."\t".$weight."\t".$goal."\t".$medical_issues."\t".$pain;

$data_handler=fopen("customer.text","a+") ;
fwrite($data_handler,"\n". $str);
header("Location: Join.html");
exit;
fclose($data_handler);

?>