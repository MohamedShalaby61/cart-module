<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{url('assets')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{url('assets')}}/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{url('assets')}}/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="{{url('assets')}}/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="{{url('assets')}}/plugins/morris/morris.css">
    <link rel="stylesheet" href="{{url('assets')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="{{url('assets')}}/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="{{url('assets')}}/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="{{url('assets')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="{{url('assets')}}/dist/fonts/fonts-fa.css">
    <link rel="stylesheet" href="{{url('assets')}}/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="{{url('assets')}}/dist/css/rtl.css">
    <link rel="stylesheet" href="{{url('assets')}}/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">
    
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
        @include('product::includes.header')
        @include('product::includes.aside')
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
              @yield('breadcrumb')
            </section>

            <section class="content" style="min-height: 510px;">
                @yield('content')
            </section>
        </div>
        @include('product::includes.footer')
    </div>
    <script src="{{url('assets')}}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{url('assets')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{url('assets')}}/plugins/morris/morris.min.js"></script>
    <script src="{{url('assets')}}/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('assets')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{url('assets')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{url('assets')}}/plugins/knob/jquery.knob.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{{url('assets')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{url('assets')}}/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="{{url('assets')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="{{url('assets')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="{{url('assets')}}/plugins/fastclick/fastclick.min.js"></script>
    
    <script src="{{url('assets')}}/dist/js/app.min.js"></script>
    <script src="{{url('assets')}}/dist/js/pages/dashboard.js"></script>
    <script src="{{url('assets')}}/dist/js/demo.js"></script>
    <script src="{{url('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('assets')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
    @yield('js')
  </body>
</html>

