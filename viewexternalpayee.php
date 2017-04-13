<?php
session_start();
include("connect.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');
$regdarray = mysql_query("SELECT * from registered_payee");
?>
<html>
<head>
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/Dashboard-512.png" rel="shortcut icon">
</head>
<body>
    
     <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary" style="margin-bottom:60px;">
    <div class="panel-body">

    <div>
        <a href="transferfunds.php"><button class="btn btn-danger">Back</button> </a> 
        <br>
        	<h2  style="color:#3399CC;margin-left:40px; text-decoration:underline;">External payee</h2>
       
       <table class="table table-striped" width="890" border="1">
      <tr>	
        <th class="info" width="80" scope="col">SL NO</th>
        <th class="info" width="93" scope="col">PAYEE NAME</th>
        <th class="info" width="101" scope="col">ACCOUNT NUMBER</th>
        <th class="info" width="144" scope="col">ACCOUNT TYPE</th>
        <th class="info" width="180" scope="col">BANK NAME</th>
        <th class="info" width="132" scope="col"><p>IFSC CODE</p></th>
      </tr>
      <?php	
 while($regd = mysql_fetch_array($regdarray))
	  {
echo "
      <tr>
        <td>&nbsp;$regd[slno]</td>
        <td>&nbsp;$regd[payeename]</td>
        <td>&nbsp;$regd[accountnumber]</td>
        <td>&nbsp;$regd[accountnumber]</td>
        <td>&nbsp;$regd[bankname]</td>
        <td>&nbsp;$regd[ifsccode]</td>
        
      </tr>";
	  }
	  ?>
    </table>
    </div>
    
    
</div>

 </div>
                  </div>
         </div>
    </div>
<?php include'footer.php' ?>
   
</body>
</html>
