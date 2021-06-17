<?php 
     if(isset($_POST["submit"])){
  

    $username = $_POST['username'];
    $password = $_POST['password'];
    

$conn = mysqli_connect('localhost','root','','login');
  //  if($conn){
  // 	echo "We are Connected";
  // }else{
  // 	die("Connection Died".mysql_error());
  // }

   $query = "INSERT INTO users(username,password)";
   $query .= "Values ('$username', '$password')";

   $result = mysqli_query($conn, $query);
    
    if (!$result) {
     die("Failed! try again");
    }


     // if($username && $password){
     // } 
     // else{
     // 	echo "Fields cann't be empty";
     // }

}
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	


    <div class="container">
    	<div class="col-sm-6">
    		<form action="loginform.php" method="post"> 
                 <div class="form-group">
                 	<label for="username" >Username</label>
                 	<input type="text" class="form-control" name="username">

                 	<label for="username">Password</label>
                 	<input type="password" class="form-control" name="password">
                     
                 </div>
                 <input type="submit" name="submit" class="btn btn-primary">
    		</form>
    	</div>
    </div>
 


</body>
</html>
