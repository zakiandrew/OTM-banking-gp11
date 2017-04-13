<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
if (isset($_SESSION['employeeid']))
{
    header("Location:employeeacount.php");
}
?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <?php include('nav.php'); ?>
    
    <div class="container" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ">
               
                <div class="panel panel-info">
   <div class="panel-body">

          <table class="table table-responsive table-stripped">
          
          <tr>
              <td class="middle">
                  <div class="media">
                      <div class="media-left">
                          <a href="#">
                             <div  class="image view"> <img class="img-circle lets-bounce"  src="images/iron bank.jpg" alt="The Iron Bank" title="The Iron Bank"><div class="mask">  
     <h2>CHAIRMAN</h2>  
     <p>Mr. Tony Stark</p><br/><br/>
     <h2>EXECUTIVE DIRECTOR</h2>  
     <p>Ms. Pepper Potts</p>
     
     </div></div>

                          </a>
                      </div>
                      <div class="media-body" style="padding-left: 70px;">
                         
                          <address>
                              <div>
                  <h2 style="color:#550000;text-decoration:underline;">The Minuto Bank</h2><br/>Our branch in New York city is also popularly known as "The Minuto Bank", named after the legendary Iron Man. 
             As Tony Stark's newest financial institution, the Iron Bank has a proud tradition of providing friendly, 
             personalized service and convenient, full-service banking.Our experienced staff of banking professionals can answer your 
             questions and help you make the most of your money. We offer an array of traditional banking services such as checking, 
             savings, certificates of deposit, loan and individual retirement accounts plus, customer conveniences like 24-hour telephone 
             banking and area network of surcharge-free automated teller machines.Our staff also includes a team of experienced mortgage,
             consumer, commercial and agricultural lenders who can offer you competitive interest rates, local loan decisions and on-site
             loan servicing.<br/><br/>
             <span style="font-size:24px;color:#550000; text-shadow: 0 0 5px #fff,
                   0 0 10px #fff,
                   0 0 15px #fff,
                   0 0 20px #fff;"><u>BANKING HOURS</u></span><br/>
<table class="table table-striped table-responsive"><tr><td class="danger">Mon-Thur :</td><td> &nbsp;&nbsp;8:00 AM to 3:30 PM</td></tr>	
<tr><td class="warning">Friday :</td><td> &nbsp;&nbsp;8:00 AM to 5:00 PM</td></tr>	
<tr><td class="warning">Saturday :</td><td> &nbsp;&nbsp;8:30 AM to Noon</td></tr></table>
               </div>
                          </address>
                      </div>
                  </div>
              </td>
            
          </tr>

         
          </table>
       <br/>
       <hr>
       
       <table class="table table-responsive table-stripped">
          
          <tr>
              <td class="middle">
                  <div class="media">
                      <div class="media-left">
                         
                            
           <div id="cf4" class="hover">
              <div class="top" style="width:240;height:220;">
                  <h2>CEO</h2>  
     <p>Mr. Peter Parker</p><br/><br/>
     <h2>MANAGING DIRECTOR</h2>  
     <p>Ms. Mary Jane Watson</p></div>
              <img class="bottom img-rounded" src="images/webster_bank.jpg" alt="Webster Bank" name="VidSet" width="240" height="220">
           </div>

                      </div>
                      <div class="media-body" style="padding-left: 70px;">
                         
                          <address>
                              <div>
                  <h2 style="color:#550000;text-decoration:underline;">The Webster Bank</h2><br/> As Spiderman's premium foundation,our branch in Boston known as the Webster Bank has been committed to helping individuals, families and businesses achieve 
         their financial goals. In that mission, Webster’s 3,000 bankers are guided by our core values, namely, to take personal 
         responsibility for meeting our customers’ needs; to respect the dignity of every individual; to earn trust through ethical behavior;
         to give of ourselves to our communities; and to work together to achieve outstanding results.<br/>
         Webster Bank provides consumer, business, government and institutional banking, as well as mortgage, financial planning, trust
         and investment services through Webster Private Bank. Webster has 294 ATMs and delivers superior customer service in person, on the phone, online, and through mobile devices.<br/><br/>
         <span style="font-size:24px;color:red; text-shadow: 0 0 5px #fff,
                   0 0 10px #fff,
                   0 0 15px #fff,
                    0 0 20px #fff;"><u>BANKING HOURS</u></span><br/>
<table class="table table-striped table-responsive"><tr><td class="danger">Mon-Fri :</td><td> &nbsp;&nbsp;9:00 AM to 4:30 PM</td></tr>	
<tr><td class="danger">Saturday :</td><td> &nbsp;&nbsp;9:30 AM to 1:30 PM</td></tr></table>
               </div>
                          </address>
                      </div>
                  </div>
              </td>
            
          </tr>

         
          </table>
       
   </div>
        
</div>
    </div>
    </div>
    </div>   
        
    <?php include'footer.php' ?>
</body>
</html>

