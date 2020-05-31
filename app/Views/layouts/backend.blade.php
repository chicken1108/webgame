<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/')}}/public/backend/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/backend/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/backend/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('/')}}/public/backend/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('/')}}/public/backend/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('/')}}/public/backend/css/style.css" />
  <script src="{{url('/')}}/public/backend/js/angular.min.js"></script>
  <script src="{{url('/')}}/public/backend/js/app.js"></script>
  <script type="text/javascript" src="{{url('/')}}/public/editor/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="{{url('/')}}/public/editor/ckfinder/ckfinder.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  @include('layouts.backend-header')
  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
  @include('layouts.backend-sidebar')
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        <small>@yield('sub-title')</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          @if(Session::has('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!!Session::get('success')!!}
            </div>
          @endif
           @if(Session::has('error'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!!Session::get('error')!!}
            </div>
          @endif
          @yield('content')
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          @yield('footer')
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; {{date('Y')}} <a href="https://adminlte.io">Ph1708M-BKAP</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="{{url('/')}}/public/backend/js/jquery.min.js"></script>
<script src="{{url('/')}}/public/backend/js/jquery-ui.js"></script>
<script src="{{url('/')}}/public/backend/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/public/backend/js/adminlte.min.js"></script>
<script src="{{url('/')}}/public/backend/js/dashboard.js"></script>
<script src="{{url('/')}}/public/backend/tinymce/tinymce.min.js"></script>
<script src="{{url('/')}}/public/backend/tinymce/config.js"></script>
<script src="{{url('/')}}/public/backend/js/function.js"></script>
@yield('script')
</body>
</html>








