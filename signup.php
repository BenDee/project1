<?php 
session_start();
	include("connection.php");
	include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
	{	$user_name = $_POST['user_name'];
		$password = $_POST['password'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
		if(!empty($user_name)&& !empty($email) && !empty($firstname)&& !empty($surname) && !empty($password) && !is_numeric($user_name))
			{
				$user_id = random_num(20);
				$query = "insert into users (user_id, user_name,firstname, surname, email, password) values ('$user_id', '$user_name','$firstname','$surname','$email','$password')";
				mysqli_query($con, $query);

				header("Location: login.php");
				die;
			}else 
		{
				echo "Please enter some valid information!";
			}
	} 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 	<title>Signup</title>
 </head>
 <body>
 		<body background="51.jpg">
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
   transform: translate(-50%, -50%);
    background-size: cover;
    position: center;
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

fieldset {
  display: block;
  margin-left: 2px;
  margin-right: 2px;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 2px groove (internal value);
}


.slideshow {
  height: 200vh;
  width: 100%;
  align-items: top;
  background-image: url('6.jpg');
  background-size: cover;
  animation: slide 10s infinite;
  justify-content: center;
}

@keyframes slide {
  25% {
    background-image: url('12.jpg');
    background-size: cover;
  }

  50% {
    background-image: url('13.jpg');
    background-size: cover;
  }

  75% {
    background-image: url('51.jpg');
    background-size: cover;
  }
  100% {
    background-image: url('15.jpg');
    background-size: cover;


 		 </style>
     <fieldset>
 		 <div id = "box" class="slideshow" style = "font-family: 'Zen Dots', cursive;font-size:24px;font-style:italic;">
 		 	<form align= "center" method = "post">
        <u><h1>Optimum Complex Library</h1></u>
         		 		
 		 		<div align= "center" style="font-size: 20px;margin: 10px; color: black;">Please fill this form to Signup</div>



 		 		<input class="box" id="text" type="text" name="user_name" placeholder="Please Enter your Username"><br><br>

        <input class="box" id="text" type="text" name="firstname" placeholder="Please Enter your Firstname"><br><br>

        <input class="box" id="text" type="text" name="surname" placeholder="Please Enter your Surname"><br><br>

        <input class="box" id="text" type="email" name="email" placeholder="Please Enter your Email: e.g. user001@gmail.com"><br><br>

 		 		<input class="box" id="text" type="password" name="password" placeholder="Please Enter your Password: e.g: pin4432 or 12547589"><br><br>

 		 		<button type="submit" class="btn btn-lg"  ><a href="#" class="ft-unlock"><i class="fa fa-sign-out" aria-hidden="true"></i>Signup</a></button>

 		 		<a href="login.php">Already have an Account? Click to Login!</a>
 		 	</form>
</fieldset>
 		 </div>
 </body>
 </html>  