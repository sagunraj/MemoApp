<html>
<head>
    <title>
        Memo App
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @yield('headsection')
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-3 text-center mainbg">
            <h1>Memo App</h1><hr/>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
