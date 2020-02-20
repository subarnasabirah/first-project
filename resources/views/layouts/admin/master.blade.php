<!DOCTYPE html>
<html>
<head>
	 @include('layouts.admin._head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">asset assets/admin/
<!-- Navbar -->
  @include('layouts.admin._header')
  <!--End Navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.admin._nav')
  <!--main sidebar container end-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        	<div class="col-sm-6">
            <h1 class="m-0 text-dark">{{$title}}</h1>
          </div>
         
          @yield('breadcrumb')
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
         @include('layouts.admin._message')
        @yield('content')
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('layouts.admin._footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.admin._js')
</body>
</html>
