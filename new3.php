<?php
require_once('mysqlhelp.php.inc');
include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$request = array();
$request['email'] = $_SESSION['new']['email'];
$request['phone'] = $_SESSION['new']['phone'];
$request['iname'] = $_SESSION['new']['iname'];
$request['cpname'] = $_POST['cpname'];
$request['address'] = $_POST['address'];
$request['city'] = $_POST['city'];
$request['state'] = $_POST['state'];
$request['zcode'] = $_POST['zcode'];
$request['account'] = $_POST['account'];
$request['cname'] = $_POST['cname'];
$request['ctitle'] = $_POST['ctitle'];
$request['username'] = $_SESSION['username'];
$login = new loginDB();
$result = $login->newLead($request);
$a =  var_dump($result);
if($result){
        $message = "Succesful!";
}
else { $message = "Submission already exist!"; }
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
                    
                    <form class="form-signin" method="post" action="">
                
                
                <button type="button" class="btn btn-lg" id="yellow">Country</button>
                        
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="country" />
                </div>

                <button type="button" class="btn btn-lg" id="yellow">Company Name</button>
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="cpname" />
                </div>
                        
            <button type="button" class="btn btn-lg" id="yellow">Address</button>
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="address" />
                </div>
                        
        <button type="button" class="btn btn-lg" id="yellow">City</button>
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="city" />
                </div>
                        
            <button type="button" class="btn btn-lg" id="yellow">State</button>
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="state" />
                </div>
                        
        <button type="button" class="btn btn-lg" id="yellow">Zip Code</button>
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="zcode" />
                </div>
                        
        <button type="button" class="btn btn-lg" id="yellow">Does Customer Have An Acc</button>
 <font color="white"><strong>
                        <label class="radio-inline">
     
      <input type="radio" name="optradio">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">No
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Not Sure
    </label>
     </font></strong>
                        
     <button type="button" class="btn btn-lg" id="yellow">UPS Acc #</button>
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="account" />
                </div>
                        
    <button type="button" class="btn btn-lg" id="yellow">Account Type</button>
 <font color="white"><strong>
                        <label class="radio-inline">
     
      <input type="radio" name="type">Small Package #
    </label>
    <label class="radio-inline">
      <input type="radio" name="type">UPS Freight Acc #
    </label>
     </font></strong>
                        
                        
        <button type="button" class="btn btn-lg" id="yellow">Contact Name</button>
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="cname" />
                </div>
                        
    <button type="button" class="btn btn-lg" id="yellow">Contact Title</button>
                 <div class="inner-addon left-addon">
           
      <input type="text" class="form-control" placeholder="" required autofocus id="ctitle" />
                </div>
                
                <br>
                <br>
                <button type="submit" class="btn btn-lg" id="next">Submit</button>
		<div style = "text-align:center; font-size:11px; color:#cc0000; margin-top:10px"><?php echo $message; ?></div>

                
</div>
    </div>
            </form>
        </div>
        </center>
    </div>
  <script src="script.js"></script>
</body>
</html>
