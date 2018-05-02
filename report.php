

<?php require_once('Connections/connect.php'); ?>
<?php
$conn = mysqli_connect("localhost", "root","12345678","material");
$sql = "SELECT * FROM description ORDER BY ID ASC";
$result = mysqli_query($conn, $sql);



?>
<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html language="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>รายการครุภัณฑ์</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!--icon link-->
    <link rel="icon" type="image/png" href="dist/images/icons/list-512.png"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
                    <!-- นำเข้า  CSS จาก Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <!-- นำเข้า  CSS จาก dataTables -->
           <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
         
        <!-- นำเข้า  Javascript จาก  Jquery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- นำเข้า  Javascript  จาก   dataTables -->
       <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 
<script>
        
$(document).ready(function() {
    $('#example').DataTable();
} );
 
    </script>
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
        h1 {
            font-family: 'Kanit', sans-serif;
        }
        h2 {
            font-family: 'Kanit', sans-serif;
        }
        h3 {
            font-family: 'Kanit', sans-serif;
        }
        h4 {
            font-family: 'Kanit', sans-serif;
        }
          h5 {
            font-family: 'Kanit', sans-serif;
        }
         h6 {
            font-family: 'Kanit', sans-serif;
        }
        fieldset 
    {
        border: 1px solid #ddd !important;
        margin: 0;
        xmin-width: 0;
        padding: 10px;       
        position: relative;
        border-radius:4px;
        background-color:#E7E6F8;
        padding-left:10px!important;
    }   
    
        legend
        {
            font-size:14px;
            font-weight:bold;
            margin-bottom: 0px; 
            width: 35%; 
            border: 1px solid #ddd;
            border-radius: 4px; 
            padding: 5px 5px 5px 10px; 
            background-color: #40B4FC;
        }

    </style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">OAG</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><h4>ระบบบริหารครุภัณฑ์</h4>/span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->

                    <!-- Tasks Menu -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>User</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>หน้าแรก</span></a></li>
                <li><a href="#"><i class="fa fa-book"></i> <span>รายการครุภัณฑ์</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>รายการยืม</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="borrow.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>ทำรายการยืม</a></li>
                        <li><a href="#"><i class="fa fa-eject" aria-hidden="true"></i>ทำรายการคืน</a></li>
                    </ul>
                </li>
                <li><a href="login.php"><i class="fa fa-sign-out"></i> <span>ออกจากระบบ</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                รายการครุภัณฑ์
                <small>สำนักดิจิทัล</small>
            </h1>
            <ol class="breadcrumb">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal"><h5><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;เพิ่มรายการครุภัณฑ์</h5></button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->

                            </div>
                            <div class="modal-body">
                                <!--ฟอร์มเพิ่มรายการครุภัณฑ์-->
                                <div class="container-fluid">
                                    <fieldset class="col-md-12">
                                        <legend>ลงทะเบียนครุภัณฑ์</legend> <form class="needs-validation" novalidate>

                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label >ประเภทครุภัณฑ์</label>
                                                    <select class="form-control col-md-6 mb-3" id="">
                                                        <option selected ">เลือกประเภทครุภัณฑ์</option>
                                                        <option value="1">Wireless USB</option>
                                                        <option value="2">Notbook</option>
                                                        <option value="3">Printer</option>
                                                        <option value="3">Projector</option>
                                                        <option value="3">Monitor</option>
                                                        <option value="3">Switch</option>
                                                    </select>

                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label >ยี่ห้อ</label>
                                                    <select class="form-control col-md-6 mb-3" id="">
                                                        <option selected ">เลือกยี่ห้อครุภัณฑ์</option>
                                                        <option value="1">Acer</option>
                                                        <option value="2">Brother</option>
                                                        <option value="3">Cisco</option>
                                                        <option value="3">Dell</option>
                                                        <option value="3">HP</option>
                                                        <option value="3">Lenovo</option>
                                                        <option value="3">Switch</option>
                                                    </select>


                                                </div>

                                            </div><br>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label >รุ่น</label>
                                                    <input type="text" class="form-control" id="validationDefault03" placeholder="รุ่น" required>

                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label >S/N</label>
                                                    <input type="text" class="form-control" id="validationDefault03" placeholder="s/n" required>


                                                </div>

                                            </div>

                                        </form>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-dismiss="modal">บันทึก</button>
                            </div>
                        </div>
                    </div>
                </div>

            </ol>

        </section>
            <br>
        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

           <?php print("$output") ;?>

<table class="table" id="example">
  <thead class="thead-light">
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ยี่ห้อ</th>
      <th scope="col">รหัสยี่ห้อ</th>
      <th scope="col">รุ่น</th>
      <th scope="col">ซีเรียลนัมเบอร์</th>
      <th scope="col">สถานะ</th>
      <th scope="col">ประเภทครุภัณฑ์</th>
      <th scope="col">วันที่บันทึก</th>
    </tr>
  </thead>
  <tbody>
        <?php
                    $sql = "SELECT * FROM description";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
 
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["desc_id"]. "</td>";
                            echo "<td>" . $row["brand"]. "</td>";
                            echo "<td>" . $row["brand_name"]. "</td>";
                            echo "<td>" . $row["version"]. "</td>";
                            echo "<td>" . $row["serial"]. "</td>";
                            echo "<td>" . $row["status"]. "</td>";
                            echo "<td>" . $row["type_name"]. "</td>";
                            echo "<td>" . $row["brand_name"]. "</td>";
                            echo "</tr>";
                        }
                    }
                   ?> 
  </tbody>
</table>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <!--<div class="pull-right hidden-xs">
          Anything you want
        </div>-->
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href="https://www.oag.go.th/">สำนักดิจิทัล สำนักการตรวจเงินแผ่นดิน</a></strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
  
     

            <!-- REQUIRED JS SCRIPTS -->

            <!-- jQuery 3 -->
            <script src="bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.min.js"></script>
            <script src="dist/js/jquery.tabledit.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>


            <!-- Optionally, you can add Slimscroll and FastClick plugins.
                 Both of these plugins are recommended to enhance the
                 user experience. -->
</body>


