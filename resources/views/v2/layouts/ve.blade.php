<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="{{url('/bootstrap/css/bootstrap-iso.css')}}">
     <script src="{{url('/bootstrap/js/bootstrap.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>-->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="chrome">
<div class="body_wrap">
    <nav id="topmenu" class="clearfix">
        <div class="container">
            
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        <li><a  href="{{ url('/v2/importExport') }}">导入订单(Import Order)</a></li>
                        <li><a href="{{ url('/v2/createorder') }}">创建订单(Create Order)</a></li>
                        <li><a href="{{ url('/v2/updateorder') }}">更新订单(Update Order)</a></li>
                        <li><a href="{{ url('/v2/cancelorder') }}">取消订单(Cancel Order)</a></li>
                        <li><a href="{{ url('/v2/getlabels') }}">获取运单(Get Labels)</a></li>
                        <li><a href="{{ url('/v2/wrapshipment') }}">包装发货(Wrap Shipment)</a></li>
                </ul>
            </div>
    </nav>
                 @yield('content')
</div>
</body>
</html>
