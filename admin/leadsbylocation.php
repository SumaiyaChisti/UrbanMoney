
<?php
include("components/conn.php");
include("../vendor/autoload.php");
include("mask.php");
session_start();




       
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Urbanmoney</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>


</head>

<body>
<script src="assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.html" class="brand-logo">
          <img src="assets/images/logo.svg" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name"></p>
          <p class="email"></p>
        </div>
        <div class="mdc-list-group">
         <!-- nav yaha hai -->
         <?php
         include("components/sidenav.php");
         ?>
        </div>
        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="logout.php">Logout</a>
        </div>
        
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <?php
         include("components/header.php");
         error_reporting(0);
         ?>
         <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
        <main >
  <div class="container pt-4" >
    <h3 style="font-family: fancy monospace;" >View Leads</h3>
    
   <br>
   
  
    
    <table class="table  table-responsive table-bordered table-hover " style=" border: 1px solid white;">
<tr>
  <th>S.no</th>
    <th>Id</th>
    <th>Upload Date</th>
    <th>Upload Time</th>
    
    <th>Refrence Number</th>
    <th>Campaign Name</th>
    <th>Customer Name</th>
    <th>State</th>
    <th>City</th>
    <th>Pin Code</th>
    <th>Customer Contact Number</th>
    <th>Customer Email ID</th>
    <th>Cibil</th>
    <th>Report</th>
    <th>Annual Income</th>
    <th>Max Loan Amount</th>
    <th>Min Loan Amount</th>
    <th>Pan ID</th>
    <th>Processing Fee</th>
    <th>Tenure</th>
    <th>Minimun Tenure</th>
    <th>Lead Status</th>
    <th>Status</th>
    <th>Follow Up Date</th>
    <th>Comments</th>
    <th>Phone Call</th>
    <th>Link To Customer</th>
    <th>HIT API</th>
    <th>Application Form</th>



    <th colspan="2">Option</th>
    
</tr>

<?php
include("components/conn.php");
$q = "SELECT * FROM `leads` WHERE `State` = '$_GET[state]'";
$d=mysqli_query($conn, $q);
$co=mysqli_num_rows($d);
while($data=mysqli_fetch_assoc($d))
{
  $sno=$sno+1;
    echo '<tr>
         
          <td>'.$sno.'</td>
          <td>'.$data['id'].'</td>
          <td>'.$data['Upload_Date'].'</td>
          <td>'.$data['Upload_Time'].'</td>
          <td>'.$data['Reference_Number'].'</td>
          <td>'.$data['Campaign_Name'].'</td>
          <td>'.$data['Customer_Name'].'</td>
         <td>'.$data['State'].'</td>
         <td>'.$data['City'].'</td>
         <td>'.$data['Pin_Code'].'</td>
         <td>'.maskPhoneNumber($data['Customer_Contact_Number']).'</td>
         <td>'.$data['Customer_Email_ID'].'</td>
         <td>'.$data['Cibil'].'</td>
         <td>'.$data['Report'].'</td>
         <td>'.$data['Annual_Income'].'</td>
         <td>'.$data['Max_Loan_Amount'].'</td>
         <td>'.$data['Min_Loan_Amount'].'</td>
         <td>'.$data['Pan_ID'].'</td>
         <td>'.$data['Processing_Fee'].'</td>
         <td>'.$data['Tenure'].'</td>
         <td>'.$data['Minimum_Tenure'].'</td>
         <td>'.$data['Lead_Status'].'</td>
    
         <td><select name="status" onchange="change('.$data["id"].',this.value)" value=""><option>Select Status</option>'
         ;
        
         ?>
<?php
         $ls=mysqli_query($conn,"SELECT * FROM `lead_attributes`");
         
        while($attr=mysqli_fetch_assoc($ls))
       {
        echo'<option>'.$attr['name'].'</option>';
        }
       
        
 ?>       
         
      
        <?php echo'
         </select></td>
        </td>
         <td>
         <form method="post"><input type="hidden" name="id" value="'.$data['id'].'" id="date"/> <input type="date" name="date" id="date"/> <button name="upd" value="up" class="btn btn-success btn-sm" type="submit">Save</button></form></td>
         <td>
         <form method="post"> <input type="hidden" name="id" value="'.$data['id'].'" id="date"/> <input type="text" name="description"> <button name="upd2" value="up" class="btn btn-success btn-sm" type="submit">Save</button></form></td>
         <td>'.$data['Phone_Call'].'</td>
         <td>'.$data['LINK_TO_CUSTOMER'].'</td>
         <td>'.$data['HIT_API'].'</td>
         <td><a class="btn" href="form.php?id='.$data['id'].'"><i class="fa-solid fa-file-invoice"></i></a></td>

        
         <td><a class="btn" href="delete.php?id='.$data['id'].'"><i class="fa-solid fa-trash"></i></a></td>
         
     </tr>';
}

//echo"Total Number of rows are " .$co;
?>

</table>
</div>

</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script> var table = new DataTable("table"); </script>

<!--Main layout-->
          



         
          <?php
      include("components/footer.php");
      ?>






          <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>

  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/material.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>

    
  function change(Id,Status){
 var data1 = {
  id: Id,
  status:Status
};

// Make the AJAX request
$.ajax({
  url: 'leadstatus.php',
  type: 'POST',
  // Set the content type if sending JSON data
  data:data1, // Convert data to JSON string
  success: function(response) {
    if(response==='ok')
    {
window.location.reload();
    }
    // Handle the success response here
    
  },
  error: function(xhr, status, error) {
    // Handle errors here
    console.log('Error: ' + error);
  }
}); 

}
</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>

<script>
    toast.show();
</script>
</body>
</html>