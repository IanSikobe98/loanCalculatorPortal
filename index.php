 
<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="images/x-icon" href="justice.png" class="brand-image img-circle elevation-3"
           style="opacity: .8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Africa Claims</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

   <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>




    <script src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.10/css/jquery.dataTa

<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script src ="environment.js" type="text/javascript"></script>
      <script src ="globalfuncs.js" type="text/javascript"></script>


          <script    src='https://cdn.jsdelivr.net/npm/rrule@2.6.4/dist/es5/rrule.min.js'></script>
<script src="https://jakubroztocil.github.io/rrule/dist/es5/rrule-tz.min.js"></script>

<style type="text/css">

  .modal {
   display: none;  /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

  .exportToPdf{
      display: none;
  }
  .form-popup {
      display: none;
      position: fixed;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      bottom: 0;
      height: 80%;
      width: 80%;
      overflow: auto;

      border: 3px solid #f1f1f1;
      z-index: 9;
  }


  /* Add styles to the form container */
  .form-container {
      max-width: 100%;
      padding: 10px;
      background-color: white;
  }

  /* Full-width input fields */
  .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
  }

  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
  }

  /* Set a style for the submit/login button */
  .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
      background-color: red;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
      opacity: 1;
  }
</style>


  
<link rel="stylesheet" type="text/css" href="styling.css">

</head>
<body onload="hidefunc()" class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="tasks.php" class="nav-link">Add new Task</a>
      </li>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tasks.." title="Type in a name">
<!--      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
      <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
      
    </ul>

    <!-- SEARCH FORM -->
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     <div class="btn-group open">
       <a class="btn btn-primary" href="#"><i onclick="return logout()"  class="fa fa-power-off fa-fw "></i></a>
</div>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
<!--      <img src="justice.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"-->
<!--           style="opacity: .8">-->
      <span class="brand-text font-weight-light">PCYS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/ava.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Welcome</a>
          <a href="#" class="d-block" id="usern">User </a>
           <a href="#" class="d-block" id = "role1">Logged In</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link active">

              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

                <i class="right fas fa-angle-left"></i>
              </p>

            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Dashboard</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tasks</h1>
          </div>


          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Tasks</li>
              <li class="breadcrumb-item"><a href="tvents.php">View Events</a></li>




            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Loan Calculator</h3>
                
                
                  </div>
                </div>
              </div>
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Enter Loan Details</h3>

                        <!-- <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                              class="fas fa-minus"></i></button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                              class="fas fa-times"></i></button>
                        </div> -->
                    </div>
                    <!-- /.card-header -->

                    <form method="POST"  id="myForm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Amount to Borrow:</label>
                                        <input type="number" name="loanAmount" class="form-control" id="loanAmount" placeholder="Please enter the loan Amount " required="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Interest Rate (%):</label>
                                        <input type="number"  step="0.01" class="form-control" name="interestRate" id="interestRate" placeholder="Enter the interest Rate" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Loan Period(Years):</label>
                                        <input type="number" class="form-control" name="loanPeriod" id="loanPeriod"  step="0.01" placeholder="please enter the loan Term" required="">
                                    </div>
                                </div>
                                    <!-- /.form-group -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Payment Frequency:</label>
                                            <select class="form-control select2" id="paymentFrequency" name ="paymentFrequency" style="width: 100%;">
                                                <option value="4">Monthly</option>
                                                <option value="3">Quarterly</option>
                                                <option value="1">Annually</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- /.form-group -->
                                </div>

                                    <!-- /.form-group -->


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Interest Type:</label>
                                        <select class="form-control select2" id="interestRateType" name ="interestRateType" style="width: 100%;">
                                            <option value="2">Flat Rate</option>
                                            <option value="1">Reducing Balance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Date:</label>
                                        <input type="Date" class="form-control" name="startDate" id="startDate" placeholder="Enter the start Date" required="">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <!-- /.form-group -->
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </form>
                        <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>

            <!-- /.card-body -->






            </div>



            <div class="card-body table-responsive p-0">
                <table id="myTable" class="table table-striped table-bordered table-hover content-table">

            <thead >
                <tr class="">
            <th>Payment Number</th>
	 	    <th>Period Installments</th>
	 	    <th>Interest Payment</th>
	 	    <th>Principal Payment</th>
            <th>Legal Fees</th>
            <th>Processing Fees</th>
            <th>Excise Duty</th>
	 	    <th>Remaining Balance</th>
                </tr>
            </thead>
            <tbody>

<!--<script src="services/taskmgmt/fetchtable.js" type="text/javascript"></script>-->


<!--</tbody>-->

</table>
</div>

          <div class="card-footer">
              <button type="button" id="exportToPdf" name="exportToPdf" class="btn btn-primary exportToPdf"   >Export</button>
              <button type="button" id="sendToEmail" name="sendToEmail" class="btn btn-primary exportToPdf"   >SendToEmail</button>
          </div>
<!--       <script type="text/javascript">-->
<!--$(document).ready( function () {-->
<!--    $('#myTable').DataTable();-->
<!---->
<!--} );-->
<!-- </script>-->


          <div class="form-popup" id="myModal">
              <form id ="myModalForm"  class="form-container">
                  <p><b>Enter Email to send to: </b></p>

                  <div class="card-body">
                      <div class="row">
                          <div class="col-12 col-sm-6">
                              <div class="form-group">
                                  <label><b>Email Address</b></label>
                                  <input type="text" id="emailAddress" class="form-control select2" placeholder="Enter your Email Address" name="emailAddress" required>
                              </div> <!-- form group -->
                          </div> <!-- col -->
                      </div> <!-- row -->
                      <div class="row">
                          <div class="col-12 col-sm-6">
                              <div  id="others" class="form-group">
                                  <button type="submit" name="submit" class="btn">Send to Email</button>
                              </div> <!-- form group -->
                          </div>
                          <div class="col-12 col-sm-6">
                              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                          </div> <!-- col -->

                      </div> <!-- col -->

              </form>
          </div>


        </script>

</table>
</div>

<!--            <div id="myModal" class="modal">-->
<!---->
<!--  <div class="modal-content">-->
<!--    <span id="close" class="close">&times;</span>-->
<!--    -->
<!--    <h6 id = "status" style="color:green;"></h6>-->
<!--      <h6 id = "status3" style="color:green;"></h6>-->
<!--      -->
<!--  </div>-->
  
</div>  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      </section>
  </div>
 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      
    </div>
     Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!--<script src="plugins/jquery/jquery.min.js"></script>-->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Bootstrap 4 -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
	
<script type="text/javascript">
  function hidefunc(){
    
    // formreload('Task');
    var perm = '<?php if(isset($_COOKIE["addvis"])){
     echo $_COOKIE["addvis"];} ?>'

    var addcli = '<?php if(isset($_COOKIE["addcli"])){
     echo $_COOKIE["addcli"];} ?>'

     var viewcli = '<?php if(isset($_COOKIE["viewcli"])){
     echo $_COOKIE["viewcli"];} ?>'

      var cli = '<?php if(isset($_COOKIE["cli"])){
     echo $_COOKIE["cli"];} ?>'

          var viewvis = '<?php if(isset($_COOKIE["viewvis"])){
     echo $_COOKIE["viewvis"];} ?>'

      var vis = '<?php if(isset($_COOKIE["vis"])){
     echo $_COOKIE["vis"];} ?>'



      var fna = '<?php if(isset($_COOKIE["fna"])){
     echo $_COOKIE["fna"];} ?>'

     var sna = '<?php if(isset($_COOKIE["sna"])){
     echo $_COOKIE["sna"];} ?>'

     var role = '<?php if(isset($_COOKIE["role"])){
     echo $_COOKIE["role"];} ?>'

      var tokencount = '<?php if(isset($_COOKIE["resp"])){
          echo $_COOKIE["resp"];} ?>'
      sessionStorage.setItem('tokencount',tokencount);


      console.log(fna)
var fullna = fna.concat(" ");
document.getElementById("usern").innerHTML =fullna.concat(sna);
document.getElementById("role1").innerHTML = role;
    console.log(perm);

    if(perm =="addvisitors")
    {
      console.log("allowed")
document.getElementById("visit").style.display ="block";
      document.getElementById("visitadd").style.display ="block";

    }

    if(viewvis =="viewvisitors")
    {
      console.log("allowed")
document.getElementById("visit").style.display ="block";
      document.getElementById("visitvi").style.display ="block";

    }



        if(addcli =="addclients")
    {
      console.log("allowed")

     document.getElementById("client4").style.display ="block";
      document.getElementById("cliadd").style.display ="block";

    }

            if(viewcli =="viewclients")
    {
      console.log("allowed")

     document.getElementById("client4").style.display ="block";
      document.getElementById("viewedit").style.display ="block";

    }
            getMessageCount();
  }
  
</script> 	
<script type="text/javascript" src="modi.js"></script>
</body>	

</html>