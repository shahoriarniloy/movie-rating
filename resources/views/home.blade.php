<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Movie Ratings</title>



    {{-- table --}}


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <title>@yield('title')</title>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <a href="#" class="d-flex align-items-center mr-4">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block">niloyshahoriar@gmail.com</span>
                            </a>
                            <a href="#" class="d-flex align-items-center mr-auto">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">01537197539</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/shahoriarniloy" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                            <a href="https://www.instagram.com/shahoriarniloy" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                   
                <div class="col-2">
                    <h1 class="my-0 site-logo"><a href="../home">Movies</a></h1>
                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                    class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a></div>

                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li class="active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                <li><a href="{{ route('movie.create') }}" class="nav-link">Add Movies</a></li>
                                <li><a href="{{ route('movie.index') }}" class="nav-link">Movie List</a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>




    <section class="content">
        <div class="container-fluid"
            style="background-color:rgb(42, 41, 41); color:white; font-family:'Times New Roman', Times, serif">
            
            <div class="card-body">
                <br><br><br>
                <br><br><br>
                <table id="example1" class="table table-bordered table-striped ">
                    <br>

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Rating</th>
                            <th>Watched On</th>
                            <th>IMDB</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movie as $e)

                        <tr>

                            <td>{{$e->id}}</td>
                            <td><a href="{{$e->imdb}}"><img src="{{ asset('image/' . $e->image) }}" style="height:300px; width:200px; " />
                                {{$e->name}}</a></td>
                            <td>{{$e->category}}</td>
                            <td>{{$e->rating}}</td>
                            <td>{{$e->watched}}</td>
                            <td><a href="{{$e->imdb}}"> <i class="fab fa-imdb"> {{$e->imdb}} </i></a></td>




                        </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
        </div>



    </section>




    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>



    {{-- table --}}

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
   
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });

    </script>

</body>

</html>
