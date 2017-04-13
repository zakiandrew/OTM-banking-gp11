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
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
</head>
<body>
   <?php include('nav.php'); ?>
     <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-2">
    
    
    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-center"><span class="glyphicon glyphicon-bullhorn" style="margin-right:15px;text-size:20px;"></span>Frequently Asked Questions</h3>
  </div>
  <div class="panel-body">
     <div class="panel-group" id="accordion" role="tablist" aria-multiseclectable="true">
        <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1.&nbsp;&nbsp;&nbsp;&nbsp;What is Inter Bank Fund Transfer?</a>
              </h4>
            
            </div>
         
          <div id="collapseOne" class="panel-collapse collapse-in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
              <p style="margin-top:10px">Inter Bank Transfer is a special service that allows you to transfer funds from your account with a Bank, to a Bank account with any other Bank in India.</p>
              </div>  
          </div>
          </div> 
          
          
        <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">2.&nbsp;&nbsp;&nbsp;&nbsp;Can I transfer funds to an account in any Bank Branch in India through RTGS/NEFT?</a>
              </h4>
            
            </div>
         
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
              
              <p style="margin-top:10px">NEFT -The acronym "NEFT" stands for National Electronic Funds Transfer. Funds are transferred to the credit account with the other participating Bank using RBI's NEFT service. RTGS -The acronym "RTGS" stands for Real Time Gross Settlement. The RTGS system facilitates transfer of funds from accounts in one bank to another on a "real time". The RTGS system is the fastest possible interbank money transfer facility available through secure banking channels in India.
The fund transfer through RTGS/NEFT can be done ONLY to any RTGS/NEFT enabled Bank Branch in India.</p>
              </div>  
          </div>
          </div>  
          
      <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">3.&nbsp;&nbsp;&nbsp;&nbsp;Are there any BANK CHARGES levied for Online Interbank Fund Transfer through RTGS/NEFT?</a>
              </h4>
            
            </div>
         
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
              <p style="margin-top:10px">Presently,our Bank do NOT levy any CHARGES for Online Interbank Fund Transfer through RTGS/NEF done from our Internet Banking Services.</p>
              </div>  
          </div>
          </div>  
          
          
          <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"> 4.&nbsp;&nbsp;&nbsp;&nbsp;What is the mandatory requirement for doing an Online Interbank Fund Transfer through RTGS/NEFT?</a>
              </h4>
            
            </div>
         
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
              <p style="margin-top:10px">The following information about the Beneficiary is mandatory -
Beneficiary Name
Beneficiary Address
Beneficiary Account Number
Beneficiary Account Type (only in case of NEFT)
IFSC Code of the Beneficiary's Bank Branch</p>
              </div>  
          </div>
          </div>
          
          
           <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">5.&nbsp;&nbsp;&nbsp;&nbsp;What are the timings for doing these Transactions?</a>
              </h4>
            
            </div>
         
          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="panel-body">
              <p style="margin-top:10px">Presently, the NEFT transactions can be done any time, however, credits to the beneficiary account shall be on same day/ immediate next working depending on the time of payment and beneficiary bank. Presently, the RTGS timings* on any given working day is as under -
Week Days 09:15 a.m. - 03:45 pm
Saturday 09:15 a.m. - 11:45 a.m.
*Timings, above are subject to change</p>
              </div>  
          </div>
          </div>
         
          <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">6.&nbsp;&nbsp;&nbsp;&nbsp;Where do I find IFSC Code?</a>
              </h4>
            
            </div>
         
          <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
          <div class="panel-body">
              <p style="margin-top:10px">IFSC Code can be found on our Internet Banking Site, during the addition of Beneficiary based on the Beneficiary's Bank. Alternatively, it can also be found at our site.</p>
              </div>  
          </div>
          </div>
         
          <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingSeven">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">7.&nbsp;&nbsp;&nbsp;&nbsp;What happens to the transaction, if the beneficiary details provided are incorrect OR erroneously beneficiary details are provided are incorrect?</a>
              </h4>
            
            </div>
         
          <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
          <div class="panel-body">
              <p style="margin-top:10px">Ans::Bank does not verify the Beneficiary Details given for outward NEFT transaction, and its fate entirely depends upon the Beneficiary Bank. If the beneficiary details provided matches at the Beneficiary Bank, the credit will be passed on, as per the details. But, in case the Beneficiary Bank rejects the transaction, for ANY reason, the customer account will be crinfo</p>
              </div>  
          </div>
          </div>
          
       </div>
          
      
      
      
  </div>
</div>
                  </div>
         </div>
    </div>
  
    <?php include'footer.php' ?>
</body>
</html>
