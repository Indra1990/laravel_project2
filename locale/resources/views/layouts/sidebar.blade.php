<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin Page</title>
    <style type="text/css">
    .navbar_color{
            background-color: #7d1919 !important;
            border-color: #8e1c1c !important;
        }
    .link{
          color:#fff !important;

     }   
    </style>
    <!-- Bootstrap core CSS -->
    <link href=" {{asset('adminpage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href=" {{asset('adminpage/vendor/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href=" {{asset('adminpage/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=" {{asset('adminpage/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body class="fixed-nav" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar_color" id="mainNav">
      <a class="navbar-brand" href="#">Hello, {{ Auth::user()->name }}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarResponsive">
        <ul class="navbar-nav navbar_color navbar-sidenav">
          <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link link" href="#">
              <i class="fa fa-home"></i>
              <span class="nav-link-text">
                Home</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link link" href="#">
              <i class="fa fa-user-o"></i>
              <span class="nav-link-text">
                User</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link link" href="#">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Tables</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed link" data-toggle="collapse" href="#collapseComponents">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Components</span>
            </a>
            <ul class="sidenav-second-level collapse navbar_color" id="collapseComponents">
              <li>
                <a href="#" class="link">Static Navigation</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed link" data-toggle="collapse" href="#collapseMulti">
              <i class="fa fa-fw fa-sitemap"></i>
              <span class="nav-link-text">
                Menu Levels</span>
            </a>
            <ul class="sidenav-second-level collapse navbar_color" id="collapseMulti">
              <li>
                <a href="#" class="link">Second Level Item</a>
              </li>
              <li>
                <a href="#"  class="link">Second Level Item</a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Toggle Hide -->
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto"> 
          <li class="nav-item">
            <a class="nav-link link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

   
          
      <!-- /.container-fluid -->

   
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah Anda Ingin Keluar Aplikasi
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary " data-dismiss="modal">Cancel</button>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" class="btn btn-danger ">
                Logout
                </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
            </div>
        </div>
      </div>
    </div>
    @yield('content')
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('adminpage/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminpage/vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('adminpage/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('adminpage/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('adminpage/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('adminpage/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('adminpage/js/sb-admin.min.js')}}" ></script>

  </body>

</html>
