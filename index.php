<?php
session_start();

if(!(isset($_SESSION['loginUser']))){
    header("location: login.php");
}
?>
		<div class="wrapper d-flex align-items-stretch">

    <!-- side bar Content start -->

    <?php include('Sidebar/sidebar.php'); ?>

    <!-- side bar Content end -->

    <div id="content" class="p-4 p-md-5">

    <!-- top bar Content start -->

    <?php include('header/top.php'); ?>

    <!-- top bar Content end -->

    <?php 
          if(isset($_SESSION['user'])){
            echo "<h2 class='mb-4'>Welcome ".$_SESSION['user']."</h2>";
          }else{
            echo "failed";
          };
    ?>
        <div style="background-color: #124a30;" class="alert alert-primary alert-dismissible text-white text-center border-0 fade show" role="alert">
          <div class="d-flex align-items-center text-center">
           <div class="text-white">
            BEST CASH BACKS PURCHASE TICKETS POPULAR GET FREE 3,000 MOST POPULAR GET FREE 7,000 HOTLINE GET FREE 20,000 PAYBILL NO: 4110939 ACCOUNT NO: YOUR USERNAMEs
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> 
          </div>
          </div>
        </div>

        <div class="button-wrapper">
          <a href="deposit.php" class="button button1" role="button">Deposits</a>
          <a href="#" class="button button2" role="button">Earnings Withdrawals</a>
          <a href="#" class="button button3" role="button">Online Writing</a>
          <a href="#" class="button button4" role="button">Packages</a>
        </div>

        <div class="row">
          <div class="column">
            <div class="card">
              <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
              <div class="dash-widget-info">
                <h3>0</h3>
                <span>Wallet Balance</span>
              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">
              <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
              <div class="dash-widget-info">
                <h3>0</h3>
                <span>Withdrawal</span>
              </div>
            </div>
          </div>
          
          <div class="column">
            <div class="card">
              <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
              <div class="dash-widget-info">
                <h3>None</h3>
                <span>Packages</span>
              </div>
            </div>
          </div>
          
          <div class="column">
            <div class="card">
              <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
              <div class="dash-widget-info">
                <h3>0</h3>
                <span>Deposit Balance</span>
              </div>
            </div>
          </div>
        </div>
        <div>

          <div class="row">
          <div class="graph-wrapper">
            <h3 style="text-align: center;">Market Overview</h3>
            <canvas id='c'></canvas>
            <div class="label">text</div>
          </div>
          </div>

        </div>

        <div class="row">
          <div class="column">
            <div class="card">
              <div>
              <div>
                <span class="d-block">WhatsApp/FB/IG earnings</span>
              </div>
              <div>
                <span class="text-success">+10%</span>
              </div>
              <h3 class="mb-0">0</h3>
              <div class="progress mb-2" style="height: 5px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Earnings</p>
            </div>
          </div>
          </div>

          <div class="column">
            <div class="card">
              <div>
              <div>
                <span class="d-block">Shares Plan</span>
              </div>
              <div>
                <span class="text-success">+12.5%</span>
              </div>
              <h3 class="mb-0">0</h3>
              <div class="progress mb-2" style="height: 5px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Current Month Earnings</p>
            </div>
          </div>
          </div>

          <div class="column">
            <div class="card">
              <div>
              <div>
                <span class="d-block">Total Sent Transfers</span>
              </div>
              <div>
                <span class="text-success">+2.9%</span>
              </div>
              <h3 class="mb-0">0</h3>
              <div class="progress mb-2" style="height: 5px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Current Earnings Kshs</p>
            </div>
          </div>
          </div>
          <div class="column">
            <div class="card">
              <div>
              <div>
                <span class="d-block">Advertisor</span>
              </div>
              <div>
                <span class="text-info">Locked In</span>
              </div>
              <h3 class="mb-0">Inactive</h3>
              <div class="progress mb-2" style="height: 5px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Advertise With Us</p>
            </div>
          </div>
          </div>
        </div>
        <div>

          <div class="row" style="margin-top: 30px;"> 
            <div class="col-md-12 col-lg-12 col-xl-6 d-flex">
             <div class="card flex-fill dash-statistics" style="background-color: #d7fceb;">
              <div class="card-body">
                <h5 class="card-title" style="text-align: left;">Statistics</h5>
                <div class="stats-list">
                  <div class="stats-info" >
                   <P>Profits 4/65</P>
                   <div class="progress mb-2" style="height: 5px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  </div>
                  
                  <div class="stats-info">
                    <P>Market Analysis 15/92</P>
                    <div class="progress mb-2" style="height: 5px;">
                     <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                   </div>

                   <div class="stats-info">
                    <P>Essay Writings 85/112</P>
                    <div class="progress mb-2" style="height: 5px;">
                     <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                   </div>

                   <div class="stats-info">
                    <P>Bloggings 190/212</P>
                    <div class="progress mb-2" style="height: 5px;">
                     <div class="progress-bar bg-seconbary" role="progressbar" style="width: 75%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                   </div>

                   <div class="stats-info">
                    <P>Progress 22/212</P>
                    <div class="progress mb-2" style="height: 5px;">
                     <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                   </div>
                </div>
              </div>
             </div>

             
            </div>



            <div class="col-md-12 col-lg-12 col-xl-6 d-flex">
              <div class="card flex-fill dash-statistics" style="background-color: #d7fceb;">
               <div class="card-body">
                 <h5 class="card-title" style="text-align: left;">Task Statistics</h5>

                 <div class="row">
                  <div class="col-md-6 col-6 text-center">
                    <div class="stats-box mb-4">
                      <p class="kichwa1">Wallet Balance</p>
                      <h3 class="kichwa"> 0 </h3>
                   </div>
                  </div>

            <div class="col-md-6 col-6 text-center">
              <div class="stats-box mb-4">
                <p class="kichwa1">Withdrawn</p>
                  <h3 class="kichwa">0</h3>
                    </div>
                    </div>
                 </div>

                 <div class="progress mb-4">
                  <div class="progress-bar bg-purple" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">22%</div>
                          <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">24%</div>
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 26%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">21%</div>
                                   <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">10%</div>
                                  </div>
                              <div>
                                  <div class="memes"style="justify-content:space-between; justify-self:flex-end">
                                      <p><i class="fa fa-dot-circle-o text-purple mr-2"><span class="float-right" style="margin-left: 20px;"></i>Completed </span> <span class="float-right">166</span></p>
                                      <p><i class="fa fa-dot-circle-o text-warning mr-2"><span class="float-right" style="margin-left: 20px;"></i>Inprogress </span> <span class="float-right">115</span></p>
                                      <p><i class="fa fa-dot-circle-o text-success mr-2"><span class="float-right" style="margin-left: 20px;"></i>On Holds </span> <span class="float-right">31</span></p>
                                      <p><i class="fa fa-dot-circle-o text-danger mr-2"><span class="float-right" style="margin-left: 20px;"></i>Pendings </span> <span class="float-right">47</span></p>
                                      <p><i class="fa fa-dot-circle-o text-info mr-2"><span class="float-right" style="margin-left: 20px;"></i>Reviews </span> <span class="float-right">5</span></p>
                                     </div>
                                  </div>
                              </div>
                          </div>
                      </div>



               </div>
              </div>
 


              <div class="col-md-12 col-lg-8 col-xl-8 mx-auto" style="margin-top: 30px;">
                <div class="card flex-fill">
                    <div class="card-body">
                    <h4 class="card-title">My User <span class="badge bg-inverse-danger ml-2">Information</span></h4>
                    <div class="row">
        <div class="col-lg-12">
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="simpleinput" class="form-label" >My Username</label>
                        <input type="text" id="simpleinput" class="form-control text-new" value="trony" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label for="example-email" class="form-label" >Invited By:</label>
                        <input type="text" id="simpleinput" name="example-email" class="form-control text-new" value="officialmanagement" readonly>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="example-email" class="form-label" >My unique referral link</label>
                    <div type="text" id="link" class="form-control text-new">https://agencies.com/register.php?invitedby=trony</div>
                </div>
                <div class="load-more text-center">

                    <button type="button" class="load-more text-center" style="align-content:center; background-color: #124a30; border-radius: 6px; color: white;">
                        <span class="btn-label"><i class="mdi mdi-check-all"></i></span>Copy Referral Link
                    </button>
                </div>

               


                <div class="form-group mt-3">
                    <p class="form-control-label text-primary" id="pdiv"></p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-last-name">My Referrals</label>
                            <h5 class="h3 mb-0 text-new">0</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-first-name">Active</label>
                            <h5 class="h3 mb-0 text-new">0 </h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Dormant</label>
                            <h5 class="h3 mb-0 text-new">0</h5>
                        </div>
                    </div>
                </div>

                <!-- </form> -->
        </div>
                </div>
            </div>
        </div>






             </div>


             

          </div>

          

























          

      
      </div>

    <!-- footer bar Content start -->

    <?php include('Footer/footer.php'); ?>

    <!-- footer bar Content end -->
