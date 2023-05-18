<?php
	$firstname=$_POST['t6'];
	$email=$_POST['t7'];
	$mobile=$_POST['t8'];
    $sug=$_POST['t9'];
    

	$conn = mysqli_connect('localhost','root','','myshop');
	if(!$conn){
	   die(mysqli_connect_error());
	}
	else{
	   $stmt ="insert into contact values('$firstname','$email','$mobile','$sug')";
	   mysqli_query($conn,$stmt);
	   echo  '<script>
	   alert("Submit Succesfully ...!")
   </script>';
	header("Location:index.html");
	}

    
?>