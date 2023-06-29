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

    <div>
    <h4 class="mb-0 text-uppercase text-center header-title">Top-Up Instructions</h6>
          <hr />
          <div class="row">
            <div class="col-lg-12">
              <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                  <div class="photo-content">
                    <div class="cover-photo rounded">
                      <img style ="width:100%; height:200px" src="images/image1.jpg" alt="dfdfdf">
                    </div>
                  </div>
                  <!-- <div class="profile-info">
                    <div class="profile-photo">
                      <img src="assets/images/gallery/pexels-maitree-rimthong-1602726.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                  </div> -->

                </div>
              </div>
            </div>
          </div>

          <div>
          <div class="button-wrapper" style="text-align: center">
          <button style="padding: 20px" class="button button1" role="button">MTN RWANDA</button>
          <button style="padding: 20px" class="button button2" role="button">Vodacom Tanzania</button>
          <button style="padding: 20px" class="button button3" role="button">MTN UGANDA Deposit</button>
          </div>
          </div>
      </div>





      
      <div class="row col-md-12">
        <div class="card col-md-4 paymentform">
          <form method="post" action="daraja/stk_initiate.php" >
            <h5 class="card-text">
              Mpesa STK PUSH Deposit
            </h5>
            <input type="hidden" name="userid" value=2052>
            <div class="m-3">
              <ul>
                <li>Enter the amount you wish to deposit.</li>
                <li>Press Deposit.You will be redirected to a different page.</li>
                <li>A pop up will appear on our phone, enter your M-PESA PIN</li>
              </ul>           
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label">Amount</label>
              <input type="text" id="simpleinput" class="form-control" name="amount" required>
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label">Phone Number</label>
              <input type="text" id="simpleinput" name="phone" class="form-control" value="254792533846">
            </div>
            <div class="m-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" required>
                <label class="form-check-label" for="exampleRadios1">
                  I agree payment cannot be reversed
                </label>
              </div>

            </div>
            <div class="m-3 text-center">
              <button type="submit" name="autodepo" class="btn btn-success waves-effect waves-light">
                <span class="btn-label"><i class="mdi mdi-check-all"></i></span>Deposit
              </button>
            </div>


          </form>
        </div> <!-- end col -->
        <div class="card col-md-4 paymentform">
          <form method="post" action="depositusingnewnumber.php">
            <h5 class="card-text">
              Deposit of funds via Mpesa using a different number
            </h5>
            <div class="m-3">
            <ul>
                <li>Enter the amount you wish to deposit.</li>
                <li>Enter phone number.</li>
                <li>Press Deposit.You will be redirected to a different page.</li>
              </ul>    
            </div>

            <div class="m-3">
              <label for="simpleinput" class="form-label">Amount</label>
              <input type="number" id="simpleinput" class="form-control" name="new_amount" required>
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label">New Deposit Phonenumber</label>
              <input type="number" id="simpleinput" class="form-control" name="new_deposit_number" required>
            </div>
            <div class="m-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" required>
                <label class="form-check-label" for="exampleRadios1">
                  I agree payment cannot be reversed
                </label>
              </div>

            </div>
            <div class="m-3 text-center">
              <button type="submit" name="new_autodepo" class="btn btn-primary">
                Deposit Using New Number
              </button>
            </div>


          </form>
        </div> <!-- end col -->
        <div class="card col-md-4 paymentform">
          <form method="post" action="depositforanotheruser.php">
            <h5 class="card-text">
              Deposit funds for a different username
            </h5>
            <div class="m-3">
            <ul>
                <li>Enter the amount you wish to deposit.</li>
                <li>Enter correct username.</li>
                <li>Press Deposit.You will be redirected to a different page.</li>
            </ul> 
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label">Amount</label>
              <input type="number" id="simpleinput" class="form-control" name="new_amount" required>
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label text">Enter Correct Username </label>
              <input type="text" id="simpleinput" class="form-control" name="deposit_username" required>
            </div>
            <div class="m-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" required>
                <label class="form-check-label" for="exampleRadios1">
                  I agree payment cannot be reversed
                </label>
              </div>

            </div>
            <div class="m-3 text-center">
              <button type="submit" name="depo_different_user" class="btn btn-secondary">
                Deposit For Different Username
              </button>
            </div>


          </form>
        </div> <!-- end col -->
      </div>

      <div class="row" style= "padding-top:20px;">

<div class="col-md-3">
    <div class="card bg-primary mb-3">
      <div class="card-body">
        <h5>MTN RWANDA</h5>
        <p class="card-text text-white">
          Pay with MTN RWANDA Deposit
        </p>
        <ol class="list-group list-group-flush"style="text-align: left !important" >
        <li class="text-white">Dial *830# </li>
        <li class="text-white">Select Send Money </li>
        <li class="text-white">Select International Transfer</li>
        <li class="text-white">Select Safaricom Mpesa </li>
        <li class="text-white">Enter +254713717344</li>
        <li class="text-white">Enter Pin </li>
        </ol>
        <p class="card-text"><small class="text-black">REFRESH THE DASHBOARD AND WITHIN 5 MINUTES THE AMOUNT WILL REFLECT.</small>
        </p>
      </div>
    </div>
</div>

<div class="col-md-3">
  <div class="card bg-danger mb-3">
    <div class="card-body">
      <!-- <img src="assets/images/gallery/vodacom.jpg" class="card-img-top  pb-3" alt="..."> -->
      <h5>Vodacom Tanzania</h5>

      <p class="card-text text-white">
        Pay with Vodacom Tanzania Deposit
      </p>
      <ol class="list-group list-group-flush" style="text-align: left !important">
      <li class="text-white">Dial *150*00#" </li>
      <li class="text-white">Select Send Money </li>
      <li class="text-white">Select International Transfer</li>
      <li class="text-white">Select Safaricom Mpesa </li>
      <li class="text-white">Enter +254713717344</li>
      <li class="text-white">Enter Pin </li>
</ol>
      <p class="card-text"><small class="text-white">REFRESH THE DASHBOARD AND WITHIN 5 MINUTES THE AMOUNT WILL REFLECT.</small>
      </p>
    </div>
  </div>
</div>

<div class="col-md-3">
                        <div class="card bg-primary mb-3">
      <div class="card-body">
        <!-- <img src="assets/images/gallery/deposit.jpg" class="card-img-top  pb-3" alt="..."> -->
        <h5> SAFARICOM </h5>
        <p class="card-text text-white">
          Lipa na Mpesa DEPOSIT
        </p>
        <!-- <ul class="list-group list-group-flush"> -->
        <h6>  <p>FOR NOW MAKE PAYMENT TO PAYBILL NO :&nbsp; 4110939 </p><p>ACCOUNT NO:&nbsp; YOUR USERNAME&nbsp;</p><p>( IT WILL READ CROWNGOLD ESTATE AGENCIES)</p> </h6>
        <!-- <h5 class="text-white">1. On the M-PESA Menu Go to "Lipa Na M-PESA" </h5>
          <h5 class="text-white">2. Select Pay Bill </h5>
          <h5 class="text-white">3. Enter Business No 4092953</h5>
          <h5 class="text-white">4. Account No "your username"</h5>
          <h5 class="text-white">5. Enter the amount you wish to pay</h5>
          <h5 class="text-white">6. Enter your M-PESA PIN</h5> -->
        <!-- </ul> -->
        <p class="card-text"><small class="text-muted">REFRESH THE DASHBOARD AND WITHIN 5 MINUTES THE AMOUNT WILL REFLECT.</small>
        </p>
      </div>
    </div>
          </div>
<!--end of safaricom -->

<div class="col-md-3">
  <div class="card bg-warning mb-3">
    <div class="card-body">
      <!-- <img src="assets/images/gallery/mtn.jpg" class="card-img-top  pb-3" alt="..."> -->
      <h5>MTN UGANDA Deposit</h5>
      <p class="card-text text-white">
        Pay with MTN UGANDA Deposit
      </p>
      <ol class="list-group list-group-flush" style="text-align: left !important">
      <li class="text-white">Dial *165# </li>
      <li class="text-white">Select Send Money </li>
      <li class="text-white">Select International Transfer</li>
      <li class="text-white">Select Safaricom Mpesa </li>
      <li class="text-white">Enter +254713717344</li>
      <li class="text-white">Enter Pin </li>
      </ol> 
      <p class="card-text"><small class="text-dark">REFRESH THE DASHBOARD AND WITHIN 5 MINUTES THE AMOUNT WILL REFLECT.</small>
      </p>
    </div>
  </div>
</div>
<!--end or mtn uganda -->



<div>

  <div class="card" style="padding-right: 1.5rem; padding-left:1.5rem;">

    <p class="tittle" style="margin-top: 1rem;">Current Top-up Transforms</p>

    <div class="row">


      <div class="col-md-3">
          <div class="card bg-ubuntu mb-3 ">
            <div class="card-body">
              <img src="images/img1.jpeg" class="card-img-top  pb-3" style=" border-radius:0px 10px;" />

              <p>MTN RWANDA</p>

            </div>
          </div>
      </div>

      <div class="col-md-3">
        <div class="card bg-danger mb-3">
          <div class="card-body">
            <img src="images/img1.jpeg" class="card-img-top  pb-3" alt="...">
            <p>Vodacom Tanzania</p>


          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card bg-ubuntu mb-3">
          <div class="card-body">
            <img src="images/img4.jpeg" class="card-img-top  pb-3" alt="...">
            <p>Safaricom Mpesa</p>


          </div>
        </div>
      </div>
      <!--end of safaricom -->

      <div class="col-md-3">
        <div class="card bg-warning mb-3">
          <div class="card-body">
            <img src="images/img4.jpeg" class="card-img-top  pb-3" alt="...">
            <p>MTN UGANDA Deposit</p>

          </div>
        </div>
      </div>
      <!--end or mtn uganda -->


      <div>

      </div>
    </div>
  </div>

  <h4 class="mb-0 text-uppercase text-new text-center">Deposits Table</h4>
          <hr />
          <div class="card">
            <div class="card-body">
                            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dt-responsive table-responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Amount</th>
                      <th>Reference Code</th>
                      <th>Date</th>

                    </tr>
                  </thead>
                  <tbody>
                                      </tbody>
                  <tfoot>
                    <tr>
                      <th>Amount</th>
                      <th>Reference Code</th>
                      <th>Date</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!-- End of Data table  -->
        </div>
        <hr>


      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
              <div class="new-content">
                <div class="cover-photo rounded"></div>
              </div>
              <div class="profile-info">
                <div class="profile-photo">
                  <img src="assets/images/gallery/pexels-maitree-rimthong-1602726.jpg" class="img-fluid rounded-circle" alt="">


                </div>

                <style>
                  .new-content .cover-photo {
                    background: url(assets/images/gallery/banks-in-kenya.webp);
                    background-position-x: 0%;
                    background-position-y: 0%;
                    background-size: auto;
                    background-size: cover;
                    background-position: center;
                    min-height: 15.625rem;
                    width: 100%;
                  }

                  .rounded-circle {
                    border-radius: 50% !important;
                  }

                  .img-fluid {
                    max-width: 100%;
                    height: auto;
                  }

                  img,
                  svg {
                    vertical-align: middle;
                  }

                  .photo-content {
                    position: relative;
                  }

                  * {
                    outline: none;
                    padding: 0;
                  }

                  *,
                  ::before,
                  ::after {
                    box-sizing: border-box;
                  }

                  .profile-info {

                    padding: 0.9375rem 1.25rem;

                  }

                  * {
                    outline: none;
                    padding: 0;
                  }

                  *,
                  ::before,
                  ::after {
                    box-sizing: border-box;
                  }

                  .profile .profile-photo {
                    max-width: 6.25rem;
                    position: relative;
                    z-index: 1;
                    margin-top: -4.5rem;
                    margin-right: 0.625rem;
                  }

                  .profile-info h4.text-primary,
                  .profile-info .text-primary.h4 {
                    color: var(--primary) !important;

                  }

                  .profile-info h4,
                  .profile-info .h4 {
                    color: #464a53 !important;
                  }
                </style>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end Topup cards row-->
    </div>
  </div>
  <!-- End of Data table  -->
  </div>

  <!-- End Of Centered Details data  -->

  </div>


  















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
