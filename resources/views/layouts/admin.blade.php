<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Simple Sidebar - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{URL::asset('administration/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{URL::asset('administration/css/simple-sidebar.css')}}" rel="stylesheet">
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="admin-panel">
                            Youitems.com 
                        </a>
                        
                    </li>
                    <li class="{{ Request::is('admin-slaider') ? 'active' : '' }}">
                        <a  href="{{URL::asset('admin-slaider')}}">Слайдер</a>
                    </li>
                    <li class="{{ Request::is('admin-category') ? 'active' : '' }}"> 
                        <a href="{{URL::asset('admin-category')}}">Категории</a>
                    </li>
                    <li class="{{ Request::is('admin-product') ? 'active' : '' }}"> 
                        <a href="{{URL::asset('admin-product')}}">Продукти</a>
                    </li>
                     <li class="{{ Request::is('admin-users') ? 'active' : '' }}"> 
                        <a href="{{URL::asset('admin-users')}}">Потребители</a>
                    </li>
                    <li class="{{ Request::is('admin-orders') ? 'active' : '' }}"> 
                        <a href="{{URL::asset('admin-orders')}}">Поръчки</a>
                    </li>
                </ul>
                

            </div>
            
            

            @yield('content')


            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="{{URL::asset('administration/js/jquery.js')}}"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{{URL::asset('administration/js/bootstrap.min.js')}}"></script>

            <!-- Menu Toggle Script -->
            <script>
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>

    </body>

</html>