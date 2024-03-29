<?php
include('security.php');
include('db/config.php');


include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                Mcampus Student Data
            </h2>
        </div>
        <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo '<h4>' . $_SESSION['success'] . '</h4>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<h4 class="bg-warning">' . $_SESSION['status'] . '</h4>';
            unset($_SESSION['status']);
        }
        ?>
         <?php
        $query = "SELECT * FROM mcampus_students";
        $query_run = mysqli_query($conn, $query);
        ?>

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
                        <!-- <th>Edit</th>
                        <th>Delete</th> -->
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
                            
                                <!-- <td>
                                    <form action="institute_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button class="btn-success " name="edit_btn" type="submit">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="delete_Id" value="<?php echo $row['id']; ?>">
                                        <button class="btn-danger " name="delete_ud" type="submit">Delete</button>
                                    </form>
                                </td> -->

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
<!-- End of Page Wrapper -->

<?php include('includes/scripts.php'); ?>

<?php include('includes/footer.php'); ?>