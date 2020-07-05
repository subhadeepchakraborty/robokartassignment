<?php

  session_start();

$conn=mysqli_connect('remotemysql.com','Vn6HI9swkt','8YEUg3HjYl','Vn6HI9swkt');
$_SESSION["user1"] = "username";
$user =$_POST['username'];
$pw=$_POST['password'];

error_reporting(0);


$query= "select * from robokart where Name='$user' && password='$pw'";

$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num>=1)
{
  $resu = mysqli_query($conn, "SELECT * FROM robokart WHERE Name='$user' LIMIT 1");
  $row = mysqli_fetch_assoc($resu);
  echo $row['Name'];
  echo $row['Mobile'];
  echo $row['state'];
  echo $row['password'];
  echo "<table border=1 cellspacing=0 cellpading=0>

            <tr><td>{$row['Name']}</td></tr>
          <tr>  <td>{$row['Mobile']}</td></tr>
          <tr>  <td>{$row['state']}</td></tr>
          <tr>  <td>{$row['password']}</td></tr>

          </table>";
echo "<a href='robocart.php'>LOG OUT</a>";
}
else {

echo "<script type='text/javascript'>
alert('Invalid Usernamer/Password!')
</script>";
  }

?>
<script>
       window.history.replaceState('robocart_validate','','/');
</script>
