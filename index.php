<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</p>
<style>
body{
  background-color:black;
}
#maindiv
{
border: 2px solid black;
height: 500px;
width: 60%;


	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;

	margin: auto;


}
#login
{
width: 50%;
height: auto;
border: 2px solid white;
float: left;
}
#signup
{
width: 48%;
height: parent;
float: right;
border: 2px solid white;


}
input,select,button
{
width: 60%;
height: 40px;
opacity: 0.8;
margin: 10px;
background-color:#696969;
color: white;
font-size: 15px;

border: 1px solid white;}
h1
{
  width: auto;
  font-size: 20px;
  height: 40px;
  margin-top: 10%;
  color: white;
  background-color: green;
  padding-top: 10px;
}
</style>
<script language="javascript">
function stop()
{
document.getElementById("right1").style.display="none";

}
function stop2()
{
document.getElementById("right1").style.display="block";

}




</script>
<body >
  <div id="maindiv" >
<div id="login" >
  <form   autocomplete="on" method="post" action="robocart_validate.php">

  	<center>
      <h1>LOGIN</h1>	<p>
  					<input id="username" name="username" required="required" type="text" placeholder="USERNAME"/>
  				</p>
  				<p>
  					<input id="password" name="password" required="required" type="password" placeholder="PASSWORD" />
  				</p>
          <p class="login button">
					<button  value="Login" name="Login" >LOG in</button></center></form>
        </div>
<div id="signup" >
  <form  action="index.php" method="post" autocomplete="on"  name="form1">
  			<center>	<h1> Sign up </h1>
  				<p>
  					<input id="name" name="name" required="required" type="text" placeholder="FULL NAME" />
  				</p>
  				<p>
  					<input id="mobile" name="mobile" required="required" type="mobile" placeholder="Mobile No."/>
  				</p>
  				<p>
            <select name="state" id="state" >
              <option value="Maharastra">Maharastra</option>
              <option value="gujrat">gujrat</option>
              <option value="west bengal">west bengal</option>
              <option value="Assam">Assam</option>
            </select>  				</p>
  				<p>
  					<input id="password2" name="password2" required="required" type="password" placeholder="Password to be set..."/>
  				</p>
          <p>
  					<input id="password3" name="password3" required="required" type="password" placeholder="Confirm Password"/>
  				</p>
  				<p class="signin button">
  					<button type="submit" value="Sign up" name="sign">Sign up</button>
  				</p>
  			</div></center>
</form>
  </div>
</body>
<?php
//$servername="remotemysql.com";
//$username="qsMyHkfpFx";
//$password="AtMdtojawW";
//$dbname="qsMyHkfpFx";error_reporting(0);

if (isset($_POST['Login']) ) {
  header('location:index.php');
}
if (isset($_POST['sign']) ) {
$conn=mysqli_connect('remotemysql.com','Vn6HI9swkt','8YEUg3HjYl','Vn6HI9swkt');
$name =$_POST['name'];
$mobile=$_POST['mobile'];
$state=$_POST['state'];
$password=$_POST['password2'];
$password12=$_POST['password3'];

if($password != $password12)
          {
            echo "<script type='text/javascript'>
            alert('password and confirm password')
            </script>";
          }

$query= "INSERT INTO robokart(Name,Mobile,state,password) VALUES('$name','$mobile','$state','$password')";
mysqli_query($conn,$query);
	echo "<script type='text/javascript'>
alert('Submitted successfully')
</script>";
}

?>

