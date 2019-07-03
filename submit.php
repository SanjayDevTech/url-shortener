<?php
require 'config.php';
?>

<?php
$error_count=0;
$url_error="";
$alias_error="";
$con = mysqli_connect($data_host, $data_user, $data_pass, $data_name);
if (!$con) {
$data_error = "Database Connection failed";
echo $data_error;


}else{
$url = mysqli_real_escape_string($con,$_POST['url']);
$alias =mysqli_real_escape_string($con,$_POST['alias']);
if (empty($url)) {
  $error_count = 1;
  $url_error = "Please type url";

}else {
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
  $error_count = 1;
  $url_error = "Invalid Link";
}else {

}
}
if (empty($alias)) {
    $error_count = 1;
    $alias_error = "Alias is required";

}else {
  if (!preg_match("/^[a-zA-Z]*$/",$alias)) {
      $error_count = 1;
    $alias_error = "Alias Must contains only letters";
  }else{
    if (!strlen($alias) > 3) {
        $error_count = 1;
    	 $alias_error= "Alias must be greater than 3 letters";
    	// code...
    }


  }


}

$user_check_query = "SELECT * FROM links WHERE short_url='$alias' LIMIT 1";
$result = mysqli_query($con, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists


  if ($user['short_url'] === $alias) {
      $error_count = 1;
    $alias_error="Alias already exists";
  }
}
  if (!($error_count) == 1) {
    $sql = "INSERT INTO links (long_url, short_url)
VALUES ('$url', '$alias')";

if (mysqli_query($con, $sql)) {
echo "$base_url/$alias";
    echo "<br/> Success";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}




}else{
  echo $url_error;?>
  <br/>
  <?php
  echo $alias_error;








  }
}
?>
