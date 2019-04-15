<?php
require_once ('mysqlhelp.php.inc');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
$request = array();
$request['username'] = $_POST["adid"];
$request['password'] = $_POST["pass"];

$login = new loginDB();
$result = $login->getInfo($request);

if($result){
	$_SESSION['username'] = $request['username'];
	$_SESSION['password'] = $request['password'];
	header("location: main.php");
}
else {
	$error = "Your Username or Password is invalid";
}

}
?>
<html lang="en">
<head>
    
    <link href="https://fonts.googleapis.com/css?family=Give+You+Glory" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
    
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="style.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

 <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="ups.png" />
            <h1 id="title" class="rotate">Take Charge</h1>


            <form class="form-signin" method="post" action="">

                <span id="reauth-email" class="reauth-email"></span>

              <div class="inner-addon left-addon">

      <input type="text" class="form-control" placeholder="Username" required autofocus id="adid" name="adid">
                </div>





         <div class="inner-addon left-addon">
      <i class="glyphicon glyphicon-user"></i>
      <input type="password" class="form-control" placeholder="Password" required autofocus id="pass" name="pass">
    </div>
               <button id="signin" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
       <div style = "text-align:center; font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

         </div><!-- /card-container -->
    </div><!-- /container -->




  <script src="script.js"></script>
</body>
</html>

