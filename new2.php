<?php
include('session.php');

$_SESSION['new']['coname'] = $_POST['coname'];
$_SESSION['new']['iname'] = $_POST['iname'];

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
	<script>
	function showOptionA(){
	var a = document.getElementById("coname");
	a.innerHTML = "Shipper";
	}
	function showOptionB(){
	var a = document.getElementById("coname");
	a.innerHTML = "Receiver";
	}
	function showOptionC(){
	var a = document.getElementById("iname");
	a.innerHTML = "Americas Canada- AFG";
	}
	function showOptionD(){
	var a = document.getElementById("iname");
	a.innerHTML = "Americas Canada-Sergmentation Sales Lead";
	}
	function showOptionE(){
	var a = document.getElementById("iname");
	a.innerHTML = "APAC PKG- China CSC Leads";
	}
	function showOptionF(){
	var a = document.getElementById("iname");
	a.innerHTML = "AsiaPac- China Deepening";
	}
	function showOptionG(){
	var a = document.getElementById("iname");
	a.innerHTML = "Consumer Services-Corp";
	}
	function showOptionH(){
	var a = document.getElementById("iname");
	a.innerHTML = "Diversified Vehicles-Corp";
	}
	function showOptionI(){
	var a = document.getElementById("iname");
	a.innerHTML = "EU PKG-UPS Access Point-PPDO";
	}
	function showOptionJ(){
	var a = document.getElementById("iname");
	a.innerHTML = "Healthcare-Corp";
	}
	function showOptionK(){
	var a = document.getElementById("iname");
	a.innerHTML = "Intestinal Manufacturing-Corp";
	}
	function showOptionL(){
	var a = document.getElementById("iname");
	a.innerHTML = "Lation/Hispanic BRG";
	}
	function showOptionM(){
	var a = document.getElementById("iname");
	a.innerHTML = "Management";
	}
	function showOptionN(){
	var a = document.getElementById("iname");
	a.innerHTML = "MBE";
	}
	function showOptionO(){
	var a = document.getElementById("iname");
	a.innerHTML = "OJS Rise";
	}
	function showOptionP(){
	var a = document.getElementById("iname");
	a.innerHTML = "Retention Initiative";
	}
	function showOptionQ(){
	var a = document.getElementById("iname");
	a.innerHTML = "Take Charge";
	}
	function showOptionR(){
	var a = document.getElementById("iname");
	a.innerHTML = "US PKG Category A";
	}
	function showOptionS(){
	var a = document.getElementById("iname");
	a.innerHTML = "Vender Field Sales";
	}
	function showOptionT(){
	var a = document.getElementById("iname");
	a.innerHTML = "Womens Leadership Development";
	}
	</script>
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
                <button type="button" class="btn btn-lg" id="yellow">Company To Be Contacted</button>
                  <div class="choose">
              	<div class="row">
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="coname" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Choose
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a onclick="showOptionA()">Shipper</a></li>
    <li><a onclick="showOptionB()">Receiver</a></li>
      
  </ul>
</div>
	</div>
                        </div>

                <button type="button" class="btn btn-lg" id="yellow">Initiative Name</button>
              <div class="choose">
           

                  	<div class="row">
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="iname" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Choose
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a onclick="showOptionC()">Americas Canada- AFG</a></li>
      <li><a onclick="showOptionD()">Americas Canada- Segmentation Sales Lead</a></li> 
<li><a onclick="showOptionE()">APAC PKG- China CSC Leads </a></li>
<li><a onclick="showOptionF()">AsiaPac- China Deepening </a></li>
<li><a onclick="showOptionG()">Consumer Services-Corp </a></li>
<li><a onclick="showOptionH()">Diversified Vehicles-Corp </a></li>
<li><a onclick="showOptionI()">EU PKG- UPS Access Point- PPDO</a></li>
<li><a onclick="showOptionJ()">Heathcare-Corp</a></li>
<li><a onclick="showOptionK()">Intestinal Manufacturing-Corp </a></li> 
<li><a onclick="showOptionL()">Latino/Hispanic BRG</a></li>
<li><a onclick="showOptionM()">Management</a></li>
<li><a onclick="showOptionN()">MBE</a></li>
<li><a onclick="showOptionO()">OJS Ride </a></li>
<li><a onclick="showOptionP()">Retention Initiative </a></li>
<li><a onclick="showOptionQ()">Take Charge</a></li>
<li><a onclick="showOptionR()">US PKG Category A</a></li>
<li><a onclick="showOptionS()">Vender Field Sales </a></li>
<li><a onclick="showOptionT()">Womens Leadership Development </a></li>

  </ul>
</div>
	</div>
                        
                        
                        
                        </div>
                
                <br>
                <br>
                <a href="new3.php" class="btn btn-lg" id="next">Next</a>
                
</div>
    </div>
            </form>
        </div>
        </center>
    </div>
  <script src="script.js"></script>
</body>
</html>
