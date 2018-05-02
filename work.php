<?php require_once('Connections/connection.php'); ?>
<?php
$conn = mysqli_connect("localhost", "root","dr31300927","material");
$sql = "SELECT * FROM jobs ORDER BY ID ASC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <script src = "//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="">สำนักงานดิจิทัล</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">เพิ่มผลการทำงาน</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="well">
          <form action="save.php" name="frmAdd" method="post">
              <div class="form-row">
                <div class="form-group col-md-6 mb-3">
                  <label for="inputDeta">วันที่</label>
                  <input type="date" class="form-control" name="Date" placeholder="วันที่">
                </div>
                <div class="form-group col-md-6 mb-3">
                  <label for="inpuButeau">สำนักงาน</label>
                  <input type="text" class="form-control" name="Bureau" placeholder="สำนักงาน">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="exampleFormControlSelect1">อาคาร</label>
                    <select class="form-control" name="Building">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="exampleFormControlSelect1">ชั้น</label>
                    <select class="form-control" name="Floor">
                      <option>G</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                      <label for="exampleFormControlTextarea1">ดำเนินการ</label>
                      <textarea class="form-control" name="Working" rows="3" placeholder="ดำเนินการ" type="text"></textarea>
                  </div>  
                  <div class="form-group col-md-6">
                      <label for="inpuButeau">ผู้ปฏิบัติการ</label>
                      <input type="text" class="form-control" name="Name" placeholder="ชื่อผู้ปฏิบัติการ">
                  </div>
                     
               </div> 
               <div class="footer"><button type="submit" class="btn btn-primary btn-col-sm">Submit</button>    </div>
         </form>
    </div>
  </div>
</div>
        </li>
        <!--li class="breadcrumb-item active"></ link ต่อหน้าอื่น li--> 
      </ol>
      <div class="row">
        <div class="col-12">
        <table class="table" id="example">
            <thead class="thead-light">
              <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">วันที่</th>
                <th scope="col">สำนักงาน</th>
                <th scope="col">อาคาร</th>
                <th scope="col">ชั้น</th>
                <th scope="col">วิธีแก้ไข</th>
                <th scope="col">ผู้ปฏิบัติการ</th>
              </tr>
            </thead>
            <tbody>
            <?php
                    $sql = "SELECT * FROM description";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
 
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["No"]. "</td>";
                            echo "<td>" . $row["Date"]. "</td>";
                            echo "<td>" . $row["Bureau"]. "</td>";
                            echo "<td>" . $row["Building"]. "</td>";
                            echo "<td>" . $row["Floor"]. "</td>";
                            echo "<td>" . $row["Working"]. "</td>";
                            echo "<td>" . $row["Name"]. "</td>";
                            echo "</tr>";
                        }
                    }
                   ?> 
          </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
