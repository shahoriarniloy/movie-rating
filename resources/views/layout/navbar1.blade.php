<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.s0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    @yield('scripts')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
       
        <nav class="main-header navbar navbar-expand navbar-dark"
            style="background-image: linear-gradient( 15deg,  #222223  #585a5b 20%,    #585a5b 100%);">
            {{-- style="background-image: linear-gradient(15deg,  #428dc6 20%, #3023b7 100%);"> --}}
            {{-- style="background-image: linear-gradient(15deg, #e25311 0%, #f8d166 100%); --}}
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}"  class="nav-link">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-secondary elevation-4 "
            style="background-image: linear-gradient(15deg,  #585a5b 20%,    #222223 100%);">
            {{-- style="background-image: linear-gradient(15deg,  #3023b7 20%,  #428dc6 100%); --}}

            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <!-- <img src="AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"> -->
                

                <span class="brand-text font-weight-light">Movies</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('image/Niloy.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Shahoriar Niloy</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2" >
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                       
                        <li class="nav-item">
                            <a href="{{ route('movie.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Movies

                                </p>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Categories

                                </p>
                            </a>
                        </li>




                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>





    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    {{-- <script src="{{asset('dist/js/demo.js')}}"></script> --}}
    <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
    <script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>





    <div class="content-wrapper">
        {{-- style="background-image:url('{{asset('image/malaibg.png')}}');background-blend-mode: overlay;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;" --}}
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="../home">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                            
                            
                        </ol>
                        <span class="float-right">@yield('button')</span>

                    </div>
                    <!-- <div class="col-sm-6">
                            
                    </div> -->
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12 col sm-12 12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </div>



    </div>
</body>
@yield('footer')

</html>
