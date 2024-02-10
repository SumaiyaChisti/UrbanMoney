
<?php
session_start();
if (isset($_SESSION['Manager'])) {
  ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Document</title>
  <style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
  </style>
</head>
<body>
<div class="container">
    <div class="main-body">
    <?php
    include("./components/conn.php");
    $d=$conn->query("SELECT * FROM `form1` WHERE `id`='$_GET[id]'");
    $r=mysqli_fetch_assoc($d);
    ?>
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $r['name'];?></h4>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <br>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                   <div style="display: flex;" >
                     <div class="card" style="width: 160px; height:190px" >
                     <p style="padding-top: 60px; padding-left: 50px; " >Pan Card</p>
                     <a target="_blank" class="btn" href="../agent/<?php echo $r['pan_card']?>"><i class="fa fa-download"  ></i></a>
                    </div>
                    <div class="card" style="width: 160px; height:190px" >
                    <p style="padding-top: 60px; padding-left: 35px; " >Aadhaar Card</p>
                    <a target="_blank" class="btn" href="../agent/<?php echo $r['aadhar_card']?>"><i class="fa fa-download" ></i></a>
                      </div>
                   </div>
                  </li>
                  <br>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <div style="display: flex;" >
                     <div class="card" style="width: 160px; height:190px" >
                     <p style="padding-top:35px; padding-left: 10px; " >Residential light bill & telephone bill of latest month</p>
                     <a target="_blank" class="btn" href="../agent/<?php echo $r['bill']?>"><i class="fa fa-download"  ></i></a>
                    </div>
                    <div class="card" style="width: 160px; height:190px" >
                    <p style="padding-top: 55px; padding-left: 35px; " >Last 3 months salary slip</p>
                    <a target="_blank" class="btn" href="../agent/<?php echo $r['salary_slip']?>"><i class="fa fa-download" ></i></a>
                      </div>
                   </div>
                  </li>
                  <br>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                     <div style="display: flex;" >
                     <div class="card" style="width: 160px; height:190px" >
                     <p style="padding-top: 50px; padding-left: 5px; " >Offer letter & visiting card/ID card copy</p>
                     <a target="_blank" class="btn" href="../agent/<?php echo $r['id_card']?>"><i class="fa fa-download" ></i></a>
                    </div>
                    <div class="card" style="width: 160px; height:190px" >
                    <p style="padding-top: 35px; padding-left: 20px; " >Last 6 months banking in which salary is credited</p>
                    <a target="_blank" class="btn" href="../agent/<?php echo $r['six_months_banking']?>"><i class="fa fa-download"  ></i></a>
                      </div>
                   </div>
                  </li>
                  <br>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                     <div style="display: flex;" >
                     <div class="card" style="width: 160px; height:190px" >
                     <p style="padding-top: 60px; padding-left: 5px; " >Last 2 years Form 16</p>
                     <a target="_blank" class="btn" href="../agent/<?php echo $r['two_years_form16']?>"><i class="fa fa-download" ></i></a>
                    </div>
                    <div class="card" style="width: 160px; height:190px" >
                    <p style="padding-top: 60px; padding-left: 25px; " >Official Email ID</p>
                    <a target="_blank" class="btn" href="../agent/<?php echo $r['official_email']?>"><i class="fa fa-download"></i></a>
                      </div>
                   </div>
                  </li>

                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">DOB</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['dob'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" >
                    <?php echo $r['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['gender'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['contact'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['address'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pan ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['pan_id'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Property Ownership</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['property_ownership'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Marital Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['marital_status'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Place Of Work</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['place_of_work'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Job Title</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['job_title'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"> Work Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['work_address'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Years Employes</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['years_employed'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Monthly Net Income</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['monthly_net_income'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Bank Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['bank_name'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Branch Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['branch_name'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Account Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['account_number'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Account Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['account_type'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Purpose Of Loan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['purpose_of_loan'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Requested Loan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['requested_loan_amount'];?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Terms IN</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $r['terms_in'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

             <!-- <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->



            </div>
          </div>

        </div>
    </div>
</body>
</html>
<?php
}
else
header("location:../admin/login.php");



?>