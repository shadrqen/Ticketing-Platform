<!doctype html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{!! asset('css/jambolife.css') !!}" media="all" rel="stylesheet" type="text/css" />

    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>

    @yield('header')

    @yield('script')

    @yield('css')

</head>

<body style="background-color: #fafafa;">

@include('nav')

@yield('content')

@include('footer')

</body>

</html>