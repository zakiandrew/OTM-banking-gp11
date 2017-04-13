<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$result = mysql_query("select * from customers WHERE customerid='$_SESSION[customerid]'");
$rowrec = mysql_fetch_array($result);
?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">

<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /></head>
<body>
    
   <?php include('nav2.php');?>
     <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary">
    <div class="panel-body">

    <div>
        
        	<h2 style="color:#3399CC;margin-left:40px; text-decoration:underline;">Customer profile</h2>

        	<form id="form1" name="form1" method="post" action="">
        	  <table class="table table-striped" width="523" border="1">
        	    <tr>
        	      <th width="199" scope="row">Customer ID</th>
        	      <td width="308">&nbsp;<?php echo $rowrec[customerid]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">IFSC Code</th>
        	      <td>&nbsp;<?php echo $rowrec[ifsccode]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">First name</th>
        	      <td>&nbsp;<?php echo $rowrec[firstname]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Last name</th>
        	      <td>&nbsp;<?php echo $rowrec[lastname]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Login ID</th>
        	      <td>&nbsp;<?php echo $rowrec[loginid]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Account status</th>
        	      <td>&nbsp;<?php echo $rowrec[accstatus]; ?></td>
      	 </tr>
          	    <tr>
        	      <th scope="row">City</th>
        	      <td>&nbsp;<?php echo $rowrec[city]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">State</th>
        	      <td>&nbsp;<?php echo $rowrec[state]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Country</th>
        	      <td>&nbsp;<?php echo $rowrec[country]; ?></td>
      	      </tr>
        	    
        	    <tr>
        	      <th scope="row">Account Open Date</th>
        	      <td>&nbsp;<?php echo $rowrec[accopendate]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Last Login</th>
        	      <td>&nbsp;<?php echo $rowrec[lastlogin]; ?></td>
      	      </tr>
      	    </table>
        	
   	      </form>
    </div>
    
    <div class="col-md-3">
        <h2 style="color:#3399CC;margin-left:40px; text-decoration:underline;">Personalise</h2>      
                <ul>
                <li><a href="changelogpass.php">Change Login Password</a></li>
                <li><a href="changetranspass.php">Change Transaction Password</a></li>
                <li><a href="custprofile.php">Customer Profile</a></li>
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
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
