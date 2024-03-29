<?php include('db/config.php');?>
<?php include('includes/header.php');?>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row text-center">
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login here!</h1>
                    <?php 
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                      echo '<h4 class="bg-danger text-white">' . $_SESSION['status'] . '</h4>';
                      unset($_SESSION['status']);
                  }
                    ?>
                  </div>
                  <form class="user" action="code.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Enter username...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password">
                    </div>
         
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>

                  </form>
    

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>


  <!-- End of Page Wrapper -->
  <?php include('includes/scripts.php');?>

  <?php include('includes/footer.php');?>
