<?php
	$username=$_POST['t4'];
	$password=$_POST['t5'];

	$conn = mysqli_connect('localhost','root','','myshop');
	if(!$conn){
	   die(mysqli_connect_error());
	}
	else{
		$sql = "select * from reg where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location:index2.html");
        }  
        else{  
            echo  '<script>
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }
	}     

    
?>