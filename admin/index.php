<?php 
include('security.php');
include('db/config.php');?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

  


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="mcampus_data.php">  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mcampus</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $query = "SELECT id FROM mcampus_students ORDER BY id";
                        $query_run=mysqli_query($conn,$query); 
                        $row = mysqli_num_rows($query_run);
                        echo '<h1> '.$row.' </h1>'
                        ?>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="procv_data.php"><div class="text-xs font-weight-bold text-success text-uppercase mb-1">Procv</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                        $query = "SELECT id FROM procv_students ORDER BY id";
                        $query_run=mysqli_query($conn,$query); 
                        $row = mysqli_num_rows($query_run);
                        echo '<h1> '.$row.' </h1>'
                        ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="student_data.php"><div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nexpro</div></a>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                        $query = "SELECT id FROM nexpro_students ORDER BY id";
                        $query_run=mysqli_query($conn,$query); 
                        $row = mysqli_num_rows($query_run);
                        echo '<h1> '.$row.' </h1>'
                        ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="course_tabs.php"><div class="text-xs font-weight-bold text-info text-uppercase mb-1">Course tabs</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                     
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Pending Requests Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

       

        </div>
        <!-- /.container-fluid -->



  </div>
  <!-- End of Page Wrapper -->
  <?php include('includes/scripts.php');?>

  <?php include('includes/footer.php');?>
