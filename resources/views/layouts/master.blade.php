<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Murrey Billiard</title>

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <style>
        html,body {
            font-size: 1em;
            font-family: verdana;
        }
        footer {
            background: gray;
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
        .loading {
            background: lightgoldenrodyellow url('{{asset('images/processing.gif')}}') no-repeat center 65%;
            height: 80px;
            width: 100px;
            position: fixed;
            border-radius: 4px;
            left: 50%;
            top: 50%;
            margin: -40px 0 0 -50px;
            z-index: 2000;
            display: none;
        }
    </style>
    @yield('style')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <header>@include('layouts.header')</header>
    <div id="content">
        @yield('content')
    </div>
    <footer>@include('layouts.footer')</footer>
    <div class="loading"></div>
    <!-- Scripts -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script>
        function ajaxLoad(filename, content) {
            content = typeof content !== 'undefined' ? content : 'content';
            $('.loading').show();
            $.ajax({
                type: "GET",
                url: filename,
                contentType: false,
                success: function (data) {
                    $("#" + content).html(data);
                    $('.loading').hide();
                },
                error: function (xhr, status, error) {
                    alert(error);
                }
            });
        }
    </script>
    @yield('script')
</body>
</html>
