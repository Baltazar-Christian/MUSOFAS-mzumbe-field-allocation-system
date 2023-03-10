<!-- This is the page contain the form for adding staff -->
<?php

    session_start();
    $id=$_SESSION['id'];
    if ($_SESSION['role']!='1') {
      header('Location:index.php');
    }

    else{

      include 'config/connection.php';
      // start of queries
      $sql="SELECT * FROM user WHERE id='$id'";
      $qry=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($qry);

      include 'include/header.php';
    ?>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">



<?php include 'include/anav.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <!-- Manage staffs buttons -->
          <div class="col-sm-6">
            <a href="AllStudents.php" class="btn bg-orange text-white "><i class=" fa fa-bars"></i> View All Students</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="admin.html" class="text-orange">Home</a></li>
              <li class="breadcrumb-item ">Manage Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Start of Staff Table -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title text-light"><i class="fa fa-user-plus text-orange"></i> Register Student</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- start of student Registration Form -->
                <form action="config/registration.php" method="post" class="form-group">
                    <div class="form-group col-md-6 float-left">
                        <label for="fname">Firstname</label>
                        <input type="text" name="fname" id="" class="form-control" placeholder="Enter Firstname" required>
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="mname">Middlename</label>
                        <input type="text" name="mname" id="" class="form-control" placeholder="Enter Middlename" required>
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="mname">Surname</label>
                        <input type="text" name="sname" id="" class="form-control" placeholder="Enter Surname" required>
                    </div>

                    <div class="form-group col-md-6 float-left">
                    <label for="mname">Registration No</label>
                <input type="text" name="regno" id="" class="form-control" placeholder="Enter Registration Number">
                    </div>

                    <div class="form-group col-md-6 float-left">
                        <label for="mname">Phonenumber</label>
                        <input type="text" name="pnumber" id="" class="form-control" placeholder="Enter Phone number" required>
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="mname">Email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="Enter Email" required>
                    </div>

                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Programme</label>
                        <select name="programme" class="form-control bg-dark" required>
                            <?php
                                $sql="select * from programme";
                                $query=mysqli_query($conn,$sql);

                                if(!$query){

                                  die(mysqli_error($conn));
                                }

                                while ($result=mysqli_fetch_array($query)) {
                                  $id=$result['prog_id'];
                                  $name=$result['prog_name'];
                                  ?>
                              <option value="<?php echo $id; ?>">
                                <?php echo $name; ?>
                              </option>

                                  <?php


                                }

                                ?>
                        </select>
                    </div>

                    <div class="form-group col-md-6 float-left">
                        <label for="sex">Sex</label>
                        <select name="sex" id="title" class="form-control bg-dark" required>
                          <option value="Male">Male</option>
                          <option value="MS.">Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 float-left">
                        <label for="year">Academic Year</label>
                        <select name="year" id="title" class="form-control bg-dark" required>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                    </div>
                    <!-- Register Button -->
                    <div class="form-group ">
                        <input type="submit" name="student" id="" class="btn btn-block bg-orange text-light" value="Add Student">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
          </div>
          </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer bg-dark text-center">
    <br>
    <strong>Copyright &copy; 2021/2022 <a href="" class="text-orange">TazarChriss </a>.</strong>
    All rights reserved.
    <div class="mt-4">
        <h1></h1>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

<?php
    }
    ?>
