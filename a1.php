<?php
	$username=$_POST['t1'];
	$email=$_POST['t2'];
	$password=$_POST['t3'];

	$conn = mysqli_connect('localhost','root','','myshop');
	if(!$conn){
	   die(mysqli_connect_error());
	}
	else{
	   $stmt ="insert into reg values('$username','$email','$password')";
	   mysqli_query($conn,$stmt);
	   echo  '<script>
	   alert("Register Succesfully ...! please login")
   </script>';
	header("Location:index.html");
	}

?>