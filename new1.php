<?php
include('session.php');

$_SESSION['new']['email'] = $_POST['email'];
$_SESSION['new']['phone'] = $_POST['phone'];

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
</head>

<body>
    <div class="container">
        
<div id="acustom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#"><img src="ups.png" / id="pic"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/main.php">Home</a>
                </li>
                <li><a href="/profile2.php">Profile</a>
                </li>
                <li><a href="/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
        <center>
                <div class="card card-container" id="top">
        <h1 id="title" class="rotate">Sales</h1>
        
                    <p><font color="white"><b>Welcome, <?php echo $_SESSION['username']; ?></b></font></p>
                    
                    <form class="form-signin" method="Post" action="#">
                
                
                <button type="button" class="btn btn-lg" id="yellow">UPS Employee Email</button>
              <div class="inner-addon left-addon">
           
      <input type="text" id="email" class="form-control" placeholder="Employee Email" required autofocus id="adid" />
                </div>

                <button type="button" class="btn btn-lg" id="yellow">UPS Employee Phone</button>
              <div class="inner-addon left-addon">
           
      <input type="text" id="phone" class="form-control" placeholder="Employee Phone" required autofocus id="adid" />
                </div>
                
                <br>
                <br>
                <a href="new2.php" class="btn btn-lg" id="next">Next</a>
                
</div>
                    
                    
    
    
             

    </div>
                
        
            </form>
           
            
         
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
        </div>
        </center>
    </div>
  <script src="script.js"></script>
</body>
</html>
