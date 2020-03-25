<?php 
/**echo "<script>"."alert('it works!!');"."</script>";

require_once "connect.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$job = $_POST['job'];
$email = $_POST['email'];

$_SESSION['email'] = $email;

$sql = "INSERT INTO user (first_name, last_name, occupation, email)
      values ('$first_name', '$last_name', '$job', '$email')";

if (mysqli_query($link, $sql)){
    echo "Details entered sucessfully, click on the link to download a preview of your details ";
    echo "<a href='file.php' target ='_blank'>". "Here"."</a>";
}


else{

	die("Error capturing your details!!".mysqli_error($link));
}

}
**/


              
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