<?php 

if(isset($_POST['first_name']) &&
 isset($_POST['last_name']) &&
  isset($_POST['email']) 
 && isset($_POST['job'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$job = $_POST['job'];

$fp = fopen($first_name.$last_name.'.txt', 'w');
fwrite($fp, 'First name: '. $first_name.'   ');
fwrite($fp, 'Last name: '.$last_name.'   ');
fwrite($fp, 'Email address: '.$email.'   ');
fwrite($fp, 'Job: '.$job);

fclose($fp);
}

?>