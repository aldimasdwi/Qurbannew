
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Qurban Q</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/png" href="img/cow.png">

    <script src="https://kit.fontawesome.com/98694bf397.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="c/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .chart {
          width: 400px;
          height: 325px;;
          background-color: #ffffff;
        }

        .chartt {
          width: 400px;
          height: 205px;;
          background-color: #ffffff;
        }

        .bar {
          display: inline-block;
          width: 0;
          height: 30px;
          background-color: #007bff;
          margin-bottom: 10px;
          transition: width 1s ease;
        }
        .bar1 {
          display: inline-block;
          width: 0;
          height: 30px;
          background-color: #08223e;
          margin-bottom: 10px;
          transition: width 1s ease;
        }
        .bar2 {
          display: inline-block;
          width: 0;
          height: 30px;
          background-color: #fe3700;
          margin-bottom: 10px;
          transition: width 1s ease;
        }
        .bar3 {
          display: inline-block;
          width: 0;
          height: 30px;
          background-color: #24690d;
          margin-bottom: 10px;
          transition: width 1s ease;
        }
        .bar4 {
          display: inline-block;
          width: 0;
          height: 30px;
          background-color: #960e43;
          margin-bottom: 10px;
          transition: width 1s ease;
        }
      </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/user">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Qurban Q</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/user">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="/barang">
                    <i class="bi bi-basket-fill"></i>
                    <span>Barang</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/riwayat">
                    <i class="fas fa-fw fa-table"></i>
                    <span>History</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="c/#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="c/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logoutuser" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

            @yield('index')

            @yield('user')

            @yield('cek')

            </div>
            <!-- End of Main Content -->


            <br><br><br>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <button class="btn btn-secondary active" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logoutuser">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="c/vendor/jquery/jquery.min.js"></script>
    <script src="c/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="c/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="c/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="c/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="c/js/demo/chart-area-demo.js"></script>
    <script src="c/js/demo/chart-pie-demo.js"></script>

</body>

</html>
