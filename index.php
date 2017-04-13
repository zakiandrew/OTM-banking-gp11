<?php 
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
include('nav.php'); 


include('connect.php');
include("header.php")
?>  

<!DOCTYPE html>
<html>
    <head>
        
        
        
         <link href="images/chossen image" rel="shortcut icon">
        <link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
    
    </head>
   <body>
       <!--<a href="#" class="btn btn-info" data-toggle="modal" data-target="#NoticeModal" type="button" style="color:red">Notification<span style="padding-left:15px;color:brown;" class="badge">5</span></a>-->
      
     <!-- Insert to your webpage where you want to display the slider -->
   <!-- <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 56px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/img_1.jpg" alt="Powered by otm banking" />
                </li>
                <li><img src="images/img_2.jpg" alt="Online Banking" />
                </li>
                <li><img src="images/img_4.jpg" alt="Reliable way of Banking" />
                </li>
                <li><img src="images/img_5.png" alt="Less stress" />
                </li>
                <li><img src="images/com.jpg" alt="Fast And easy" />
                </li>
                <li><img src="images/gear_art_mechanism_68409_1920x1080.jpg" alt="Best Electronic Banking" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/img_1-tn.jpg" alt="Powered by otm banking" /></li>
                <li><img src="images/img_2-tn.jpg" alt="Online Banking" /></li>
                <li><img src="images/img_4-tn.jpg" alt="Reliable way of Banking" /></li>
                <li><img src="images/img_5-tn.png" alt="Less stress" /></li>
                <li><img src="images/com-tn.jpg" alt="Fast And easy" /></li>
                <li><img src="images/gear_art_mechanism_68409_1920x1080-tn.jpg" alt="Best Electronic Banking" /></li>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Slider jQuery">Slider jQuery</a></div>
        </div>
    </div>-->
    <!-- End of body section HTML codes --> 
       <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
               
            <div class='panel panel-danger  panel-center' >
       
       
         <div class="panel-heading">
        <h1 class="panel-title text-center" style="font-size:30px;"><marquee><span style="margin-right:15px;" class="glyphicon glyphicon-tags"></span><b>SERVICES</b></marquee> </h1>  
  </div>
        <div class="collapse in collapse out" id="pan-body">
        <div class="panel-body ">
            
           <div class="alert alert-default">
           
  <h5><b>Now monitor, transact and control your bank account online through our net banking service. 
             You can do multiple things from the comforts of your home or office with our Internet Banking - a one stop solution
             for all your banking needs.You can now get all your accounts details, submit requests and undertake a wide range of transactions online. Our E-Banking service 
             makes banking a lot more easy and effective.</b></h5> 
            <br> 
               <ul>
               <li><span class=>Account Details</span><br/><br/>View your bank account details, account balance, download statements and more. Also view your Demat, 
                   Loan & Credit Card Account Details too all in one place.</li><br/>
               <li><span class=>Fund Transfer</span><br/><br/>Transfer fund to your own accounts,Other Gotham Bank accounts seamlessly.</li><br/>
                 <li><span class=>Request Services</span><br/><br/>Give a request for Cheque book,Demand Draft,Stop Cheque Payment,Debit Card Loyalty Point Redemption etc.</li><br/>
                 <li><span class=>Investment Services</span><br/><br/>View your complete Portfolio with the bank, Create Fixed Deposit, Apply for IPO </li><br/>
                 <li><span class=>Value Added Services</span><br/><br/>Pay Utility bills for more than 160 billers, Recharge Mobile, Create Virtual Cards, Pay any Visa Credit Card bills, Register for estatement and sms banking</li>
               </ul>
                <br> 
            <br>
            
</div> 
            </div>
       </div>
       
                 </div>
                  </div>
           </div>
       </div>
       
       
       <!--- <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
               
            <div class='panel panel-primary  panel-center' >
     <div class='panel-body'>          
         <div class="home">
             <div class="begin"> 
                 <h2><a href="Register.php">Register For NetBanking Now!!</a></h2> <br/>Now monitor, transact and control your bank account online through our net banking service. 
             You can do multiple things from the comforts of your home or office with our Internet Banking - a one stop solution
             for all your banking needs.You can now get all your accounts details, submit requests and undertake a wide range of transactions online. Our E-Banking service 
             makes banking a lot more easy and effective.</div><br/><br/>
             <span id="feat" ><b><u>Features</u></b></span><br/><br/>
             <ul style="padding-left:2em;list-style-image:url('images/next_blue.png');align:middle;"><li><span class="subhead">Account Details</span><br/><br/>View your bank account details, account balance, download statements and more. Also view your Demat, 
                     Loan & Credit Card Account Details too all in one place.</li><br/>
                 <li><span class="subhead">Fund Transfer</span><br/><br/>Transfer fund to your own accounts,Other Gotham Bank accounts seamlessly.</li><br/>
                 <li><span class="subhead">Request Services</span><br/><br/>Give a request for Cheque book,Demand Draft,Stop Cheque Payment,Debit Card Loyalty Point Redemption etc.</li><br/>
                 <li><span class="subhead">Investment Services</span><br/><br/>View your complete Portfolio with the bank, Create Fixed Deposit, Apply for IPO </li><br/>
                 <li><span class="subhead">Value Added Services</span><br/><br/>Pay Utility bills for more than 160 billers, Recharge Mobile, Create Virtual Cards, Pay any Visa Credit Card bills,
Register for estatement and sms banking</li></ul><br/>
<div class="begin">Register now for Gotham Bank's internet banking service to get started and avail for you multiple utility services, all in a matter of a click. Getting started with our internet banking is real easy. 
All you need to do is follow a few simple steps and you are good to go. <a href="Register.php">Click here</a> for our registration process
<p>We at the B.O.G.C follow best-in-class online security practices in order to safeguard your information while you are banking online. We are constantly at task for preventing fraud and thereby making all your net banking transactions completely safe.
         </div>
         </div>
    </div>
        </div>
    </div>
            </div>
            </div> -->
            <!-- end of main -->
       
         <!--- modal for notifications -->  
    <div id="NoticeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content ">
       <div class="panel panel-primary">
        <button style="color:black;" type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title text-center"><img src="images/note.png" style='padding-right:10px;' class="image-thumbnail" width="50px" height="50px;"/>NOTICE BOARD</h4>
    
      <div class="modal-body">
      <div class="panel-group" id="accordion" role="tablist" aria-multiseclectable="true">
        <div class="panel panel-primary">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Board meeting</a>
              </h4>
            
            </div>
         
          <div id="collapseOne" class="panel-collapse collapse-in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
              <p style="margin-top:10px">There is going to be a board meeting 28/05/2017</p>
              </div>  
          </div>
          </div> 
          
          
        <div class="panel panel-primary">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Withdrawal limit of ATM</a>
              </h4>
            
            </div>
         
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
              
              <p style="margin-top:10px">Withdrawal limit of ATM rises from GHC 50 to GHC 50,000</p>
              </div>  
          </div>
          </div>  
          
      <div class="panel panel-primary">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Annual return forms</a>
              </h4>
            
            </div>
         
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
              <p style="margin-top:10px">Please, pick your annual return forms at your nearest branches now.</p>
              </div>  
          </div>
          </div>  
          
          
          <div class="panel panel-primary">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"> E-tax forms</a>
              </h4>
            
            </div>
         
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
              <p style="margin-top:10px">Fill your E-tax forms and submit within 30th July</p>
              </div>  
          </div>
          </div>
          
          
           <div class="panel panel-primary">
          <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">New account for BPL certificate</a>
              </h4>
            
            </div>
         
          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="panel-body">
              <p style="margin-top:10px">New account for BPL certificate holders should pick thier forms for only GHC 100.</p>
              </div>  
          </div>
          </div>
          
       </div>
          
        </div>
      <div style="background-color:#003366;" class="modal-footer">
        <button type="button" class="btn btn-default"   data-dismiss="modal">Close</button>
      </div>
    </div>
        </div>
        </div>
  </div>
    

    <!--end of notification us modal-->
       
       
      
   <?php include('footer.php');
    ?>     
   
       
 
       
       
    </body>
      
</html>
  
