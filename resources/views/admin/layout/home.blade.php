<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-ermBLiamwH-p-aQV"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://www.ip2location.com/images/tutorial/laravel-logo.png">
    <title>Deramamigo | @yield('title') </title>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<SB-Mid-client-ermBLiamwH-p-aQV>"></script>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <!-- tags input -->
    <link href="{{ URL::asset('css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{ URL::asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Gritter -->
    <!-- Jquery -->
    <link href="{{ URL::asset('css/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/jqGrid/ui.jqgrid.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <style>
        /* Additional style to fix warning dialog position */
        #alertmod_table_list_2 {
            top: 900px !important;
        }

    </style>


</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">

                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                          <span>
                            <img alt="image" class="img-circle" src="{{ URL::asset('img/contoh.png') }}" width="75" height="60" />
                             </span>

                            <span class="clear">
                              <span class="block m-t-xs">
                                <strong class="font-bold"></strong>
                            </span>
                          </span>
                            <h4>
                                <span class="text-muted text-xs block">Dashboard&nbsp<i class="fa fa-dashboard"></i>
                            </span>
                        </h4>
                        </div>
                        <div class="logo-element">
                            <img src="{{ URL::asset('img/contoh.png') }}" width="60" height="60">
                        </div>
                    </li>
                    <li>
                        <a href="/admin/dashboard"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboards</span> </a>
                    <li>
                    <li>
                        <a href="/admin/product"><i class="fa fa-shopping-bag"></i> <span class="nav-label">Products</span> </a>
                    <li>
                </ul>

            </div>
        </nav>
</div>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
            <!--

            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Find POST..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>

           -->
        </div>

            <ul class="nav navbar-top-links navbar-right">

                <li>
                    <a href="{{ url('/admin/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            </ul>

        </nav>

        </div>
<br>
          @yield('content')

</div>
        @extends('admin.layout.script')

</body>
</html>
