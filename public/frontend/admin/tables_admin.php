<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KBN - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="img/logo_favicon.ico">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        
        <div class="sidebar-brand-text mx-3">Karinda Bangun Nusa</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color: #FFFFFF">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables_admin.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Admin</span></a>
      </li>
      <!-- Nav Item - tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables_pesan.php">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Messages</span></a>
      </li>

<br>
      <!-- Heading -->
      <div class="sidebar-heading" style="color: #FFFFFF">
        Article
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables_blog.php">
          <i class="fas fa-fw fa-eye"></i>
          <span>View Article</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables_new_blog.php">
          <i class="fas fa-fw fa-file"></i>
          <span>New Post</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun ?? 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="rounded-circle" src="">Logout
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> 
                  <?php
                  error_reporting(0);
                  session_destroy();
                  unset($_SESSION['username']);
                  header("Location: login.php");
                  ?>
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Admin</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
<?php
$koneksi=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("kbn_db");
$tampil="SELECT * FROM admin WHERE id";
$query=mysql_query($tampil) or die ("gagal".mysql_error());
?>
<table align="center" style="font-family:arial">
<tr align="center" bgcolor="#5a5c69" height="30px" style="color:#FFF">
   <td width="5%"> <b style="color:#FFF"> ID </b></td>
   <td width="10%"> <b style="color:#FFF"> Nama Admin </b></td>
   <td width="25%"> <b style="color:#FFF"> Alamat </b></td>
   <td width="10%"> <b style="color:#FFF"> Email </b></td>
   <td width="15%"> <b style="color:#FFF"> Telepon </b></td>
   <td width="10%"> <b style="color:#FFF"> Username </b></td>
   <td width="10%"> <b style="color:#FFF"> Password </b></td>
 </tr>

<?php
while ($row=mysql_fetch_array($query))
  {
    $a=$row['id'];
    $b=$row['nama_admin'];
    $c=$row['alamat'];
    $d=$row['email'];
    $e=$row['telepon'];
    $f=$row['username'];
    $g=$row['password'];
    ?>
        
<tr align="center">
  <td height="29"> <?php echo $a; ?> </td>
  <td> <?php echo $b; ?> </td>
  <td> <?php echo $c; ?> </td>
  <td> <?php echo $d; ?> </td>
  <td> <?php echo $e; ?> </td>
  <td> <?php echo $f; ?> </td>
  <td> <?php echo $g; ?> </td>
  
<td style="font-size:1px">.....</td>
<td><a href="editadmin.php?id=<?php echo $a; ?>" style="text-decoration:none"><input type="button" name="edit" value="EDIT" style="border-style:dashed; border-color:#4e73df; color:#4e73df; background-color:#FFF; width:70px; height:30px; cursor:pointer" /></a></td>
<td><a href="hapusadmin.php?id=<?php echo $a;?>"onclick="return confirm (' Yakin Ingin Menghapus data Ini ?');" style="text-decoration:none"><input type="button" name="hapus" value="DELETE" style="border-style:dashed; border-color:#F00; color:#F00; background-color:#FFF; width:80px; height:30px; cursor:pointer" /></a></td>
</tr>
<?php } ?>

</table>
</div>
</div>
</div>

<div id="content1">
<h5 class="text-gray-800">Add Account Admin</h5>
<table align="center" style="color: ">
<form action="simpanadmin.php" method="post">
  <tr>
  <td>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;
  <input type="text" name="nama_admin" id="nama_admin" placeholder="Masukan nama" maxlength="25" required="required"/>
    </td>
    <tr>
     <td>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <textarea name="alamat" placeholder="Masukan alamat" id="alamat" cols="20" rows="2" required="required"></textarea></td>
    <tr>
    <td>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="email" id="email" placeholder="Example@gmail.com" maxlength="30" required="required"/></td>
  <tr>
    <td>Telepon &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="telepon" id="telepon" placeholder="Masukan Nomor Telp" maxlength="12" required="required"/></td>
    <tr>
    <td>Username &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="username" id="username" placeholder="Masukan username" maxlength="20" required="required" /></td>
     <tr>
     <td>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="password" name="password" id="password" placeholder="Maksimal 8 karakter" maxlength="20" required="required" /></td>
    <br />
    <tr>
    <td></td>
    </tr>
  <tr>    
    <td align="right">
    <input type="submit" name="submit" value="CREATE" style="color:#FFF; background-color:#4e73df; border:none; width:80px; height:30px; cursor:pointer"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset" value="CANCEL" style="color:#FFF; background-color:#F00; border:none; width:80px; height:30px; cursor:pointer" />&nbsp;&nbsp;&nbsp;
  </table>
</form>
</div>
<br><br><br>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
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
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
