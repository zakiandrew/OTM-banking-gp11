<?php 
include('dbconnection.php');
include('session.php');
$organization=mysql_query("SELECT * FROM organizations WHERE ID='$ses_id'");

 if(mysql_num_rows($organization)){
                    $row = mysql_fetch_assoc($organization);
                    $username=$row['Username']; 
                    $name=$row['Name']; 
                    $last_login=$row['LastLogin']; 
                  
 }


?>


<div class="navbar navbar-default">
  <div class="navbar-header">
    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button> -->
    <a class="navbar-brand" href="#"><?php echo $name; ?> </a>
  </div>
  <div class="">
    <ul class="nav navbar-nav">
        <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="viewbranch.php">Settings</a></li>
            <li><a href="viewcustomer.php">customers</a></li>
            <li><a href="viewtransaction.php">Transactions</a></li>
            <li><a href="mailinbox.php">Mail</a></li>
            
    </ul>
 
    <ul class="nav navbar-nav navbar-right">
     <li><a href="logout.php"><span class="glyphicon glyphicon-user" style="margin-right:15px;"></span>logout</a></li>
    </ul>
  </div>
</div>

        