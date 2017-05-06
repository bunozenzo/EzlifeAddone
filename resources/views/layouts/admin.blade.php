<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>learn Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/reponsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

</head>
<body>
<div class="container-fluid" id="mainwrap">
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="itemImg">
                    <img src="{{ asset('public/images/dllogo1.png') }}" alt="">
                    <p>Mods, Maps, Skins, Seeds, Texture Packs</p>
                </div>
            </div>
        </div>
    </header>
    <section class="container-fluid admincontent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 adminLeft">
                    @yield('content')
                </div>
                <div class="col-md-4 adminRight">
                    <div class="contentRtop">
                        <button type="button" class="btn btn-success bt-sm">Login</button>
                        <button type="button" class="btn btn-success bt-sm">Sing Up</button>
                        <button type="button" class="btn btn-info bt-sm">Submission</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid">
        <div class="container">
            <p>Copyright © 2014.</p>
            <p>EzLife.</p>
        </div>
    </footer>
</div>
</body>
</html>