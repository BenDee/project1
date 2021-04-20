<?php 

session_start();
	include("connection.php");
	include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
	{	$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(! empty($user_name)&& !empty($password) && !is_numeric($user_name))
			{
				
				$query = "select * from users where user_name = '$user_name' limit 1";

				$result = mysqli_query($con, $query);

				if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);

			if ($user_data['password'] === $password)
			{
					$_SESSION['user_id'] = $user_data['user_id'];

				header("Location: index.html");
				die;
			}
		}
		echo "Wrong Username or Password. Please check and try again!";
			}
		
		
	
			else 
				{
				echo "Wrong Username or Password. Please check and try again!";
				}

	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Project 1</title>
 	<title>Login Page</title>
 	<link rel="preconnect" href="https://fonts.gstatic.com">
 	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;500&display=swap" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
 	<body background="1.jpg">
 	
		<style type="text/css">
.btn{
	    background:#8f4964;
	    color:white;
	    display: block;
	    margin: auto;
	    border-radius: 50px;
	    width: 20%;
	    padding: 0.75rem;
	    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

.body{
	margin: 0;
	padding: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    color: #fff;
   top: 50%;
   left: 50%;
   align-items: center;
font-family: 'Saira Condensed', sans-serif;
    background-size: cover;

}


h1 {color: #8f4964;
	font-weight: bold;
	font-style: italic;
    justify-content: center;}
u  {color: #8f4964;}


.box{
    padding: 0.75rem;
     width: 50%;
     border-radius: 50px;
     margin-left: 10%;
     margin-bottom: 10px;
	justify-content: center;
	align-items: center;
}

a{
    text-decoration: none !important;
    color: #fff;
    font-size: 20px;
   font-family: 'Saira Condensed', sans-serif;
    font-style:italic;
    justify-content: center;
     align-items: center;
}

section{
	justify-content: center;
}

div {
	justify-content: center;
}

input{
	justify-content: center;
}


.slideshow {
  height: 200vh;
  width: 100%;
  align-items: top;
  background-image: url('1.jpg');
  background-size: cover;
  animation: slide 10s infinite;
  justify-content: center;
}

@keyframes slide {
  25% {
    background-image: url('2.jpg');
    background-size: cover;
  }

  50% {
    background-image: url('3.jpg');
    background-size: cover;
  }

  75% {
    background-image: url('4.jpg');
    background-size: cover;
  }
  100% {
    background-image: url('14.jpg');
    background-size: cover;
 


 		 </style>

<section>
 		<div id = "box" class="slideshow" style = "font-family: 'Zen Dots', cursive;font-size:24px;font-style:italic;">
 		 	<form align= "center" method = "post">

 		 		<u><h1>Optimum Complex Library</h1></u>
 		 		
 		 		<div style="font-size: 20px;margin: 10px; color: white;">Welcome to the Login page</div>

	 		 	<input required = "required" class="box" id="text" type="text" name="user_name" placeholder="Enter your Username here."><br><br>
	 		 	
	 		 	<input required = "required" class="box" id="text" type="password" name="password" placeholder="Enter your Password here."><br><br> 
	 		 	
	 		 	<button type="submit" class="btn btn-lg" ><a href="#" class="ft-unlock">
	 		 	<i class="fa fa-sign-in" aria-hidden="true"></i>
	 		 	Login</a></button><br>

 		 		<a href="signup.php" >Don't Have an Account? Click to Signup.</a>
 		 	</form>
 </section>

 		 </div>
 </body>
 </html>  


