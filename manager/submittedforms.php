
<?php
session_start();
if (isset($_SESSION['Manager'])) {
include("components/conn.php");


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
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="assets/css/book.css">
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
  <div class="container pt-4">
    <h3 style="font-family: fancy monospace;" >Urban Money Forms</h3>
    <br>
   <table class="table  table-responsive table-hover ">

   

<tr>
  
  <td><a href="viewform1.php" class="button" value=""> Personal Loan-Salaried</a>
</td>
<tr>
<td><a href="viewform2.php" class="button" value=""> Business Loan-Partnership</a>
</td>
</tr>
<tr>
<td><a href="viewform3.php" class="button" value=""> Business Loan-Propreitor</button>
</td>
</tr>
<tr>
<td><a href="viewform4.php" class="button" value=""> Business Loan-PVT LTD</button>
</td>
</tr>
<tr>
<td><a href="viewform5.php" class="button" value="">Housing Loan BT-Salaried</button>
</td>
</tr>
<tr>
<td><a href="viewform6.php" class="button" value="">Housing Loan-Salaried</button>
</td>
</tr>
<tr>
<td><a href="viewform7.php" class="button" value="">Housing Loan-Self Employed</button>
</td>
</tr>
<tr>
<td><a href="viewform8.php" class="button" value="">Housing Loan-Self Employed-BT</button>
</td>
</tr>
<tr>
<td><a href="viewform9.php" class="button" value="">Loan Against Property-Salaried</button>
</td>
</tr>
<tr>
<td><a href="viewform10.php" class="button" value="">Loan Against Property BT-Salaried</button>
</td>
</tr>
<tr>
<td><a href="viewform11.php" class="button" value="">Loan Against Property-Self Employed</button>
</td>
</tr>
<tr>
<td><a href="viewform12.php" class="button" value="">Loan Against Property-Self Employed-BT</button>
</td>
</tr>


</tr>


</div> 
<?php
?>

</table>

</form>

</div>

</main>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
<div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    
    <strong class="me-auto">UrbanMoney</strong>
    
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  
</div>
</div>

<!--Main layout-->
          
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script> var table = new DataTable("table")</script>

   
      
          </body>
          <?php
      include("components/footer.php");
      ?>
          
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/js/material.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/dashboard.js"></script>



</html>
<?php
}
else
header("location:../admin/login.php");



?>