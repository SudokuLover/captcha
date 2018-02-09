<?php
session_start();
if(!isset($_SESSION['secure']))
{
$_SESSION['secure']=rand(1000,9999);
}
else if(empty($_POST['secure']))
{
 $_SESSION['secure']=rand(1000,9999);
}
else{
  if($_POST['secure']==$_SESSION['secure'])
  {
   echo 'A match<br>';
  }
  else{
   echo 'try again<br>';
    $_SESSION['secure']=rand(1000,9999);

  }
}

?>
<img src="generateCaptcha.php"/>
<form action="captcha.php" method="POST">
Type what you see: <input type="text" size="6" maxlength="6" name="secure">   <input type="submit" value="Submit">
</form>