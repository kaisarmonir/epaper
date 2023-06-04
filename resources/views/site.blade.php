<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Naadunedu epaper</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('css/adminlte.min.css')}}">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://demo.naadunedu.com" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->



      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://demo.naadunedu.com" class="brand-link">
      <img src="{{url('AdminLTELogo.png')}}" alt="Naadunedu" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Naadunedu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>
		  </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                E-paper
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('epaper/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Publish epaper</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('pdf-upload')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload pdf</p>
                </a>
              </li>

            </ul>
          </li>

        <!--  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>  -->

    <li class="nav-header">MORE</li>
          <li class="nav-item">
            <a href="/page/create" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Create page
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="https://demo.naadunedu.com/page" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                All pages
                
              </p>
            </a>
          </li>
          
          
        <!--      <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>  -->
            </ul>
          </li>





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create a page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


            <!-- Small boxesffffffffffffffffffffffffffffffffffffffffffffffffff (Stat box) -->


<div class="card card-primary col-11 ml-3">

    @if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
    </p>
@endif
              <div class="card-header">
                <h3 class="card-title">Site information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('page')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                
                 
                   
                      

                <div class="card-body">
                    
                     @error('link')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="page title" name="link">
                      </div> 
                    @error('title')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Web page title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="page title" name="title">
                      </div>

                      @error('content')
                      <div class="error text-danger">{{ $message }}</div>
                  @enderror

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Web page Content</label>
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

            <!-- Small       <div class="form-group">
                    @error('image')
    <div class="error text-danger">{{ $message }}</div>
@enderror
                    <label for="imageInput2">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" id="imageInput2" >

                      </div>
                      <div class="input-group-append">

                      </div>
                    </div>
                  </div> -->

                </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


<!-- /.card-hefffffffffffffffffffffffffffffffffffffff sddddddddddddddddddd wsader -->

    </div>
 <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">

    </div>
  </footer>


</div>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
<!-- jQuery -->
<script src="{{url('js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<!--<script src="plugins/jquery-ui/jquery-ui.min.js"></script>-->


<!-- Bootstrap 4 -->
<script src="{{url('js/bootstrap.bundle.min.js')}}"></script>



<!-- AdminLTE App -->
<script src="{{url('js/adminlte.js')}}"></script>



</html>
