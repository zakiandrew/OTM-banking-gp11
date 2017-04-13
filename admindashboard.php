<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <?php include('navAdmin.php'); ?>
    <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-2">
    
<div class="panel panel-primary">
    <div class="panel-body">
    <div >
      
        <h2>&nbsp;</h2>
     		 <div class="news_box">
                   <h2 align="center" style="color:#3399CC;margin-left:40px;">Administrator Dashboard</h2>
                    		
                    <div style="font-size:20px;"><p><b>This is administrator main page. Here administrator can control all customer information, employee records, bank account details, etc.</b></p></div>
                    <div class="cleaner"></div>
     		</div>
        <br/><br/><br/><br/>
    </div>
    
    <div class="col-md-3">
         <h2 align="center" style="color:#3399CC;margin-left:40px;"> Dashboard</h2> 
                <ul>
                <li><a href="admindashboard.php">Home</a></li>
                <li><a href="changepass.php">Change Password</a></li>
                </ul>
    </div>
</div>

</div>
                  </div>
        </div>
    </div>
<?php include'footer.php' ?>
    
</body>
</html>
