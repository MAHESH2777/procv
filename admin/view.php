<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CATguru</title>
  <link rel="icon shortcut" href="img/logo-cut.png  ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css"    href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />

</head>

<body>
<?php include 'dbconfig.php'; ?>

<div class="container">
  <div class="row">
  <?php
        $query = "SELECT * FROM cat_students";
        $query_run = mysqli_query($conn, $query);
        ?>
        <div class="col-12">
        <div class="table-responsive">
            <table id="example" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>number</th>
                        <th>email</th>
                        <th>qualification</th>
                        <th>City</th>
                        <th>passing_year</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['number']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['qualification']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['passing_year']; ?></td>
 
                                <td><?php echo $row['date']; ?></td>


                                <!-- <td><button class="btn-success " type="submit">Edit</button></td>
                                                                <td><button class="btn-danger " type="submit">Delete</button></td> -->


                            </tr>
                        <?php
                        }
                    } else {
                        echo "No record found";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
  </div>
</div>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready(function() {
        $('#example').DataTable();
        $('#example2').DataTable();
        $('#example3').DataTable();
        $('#example4').DataTable();
      });
    </script>
</body>

</html>