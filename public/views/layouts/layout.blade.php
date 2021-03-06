<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Tradicion Chagoya</title>
    @include('layouts/css')
    @yield('css')
</head>

<body>

    <div class="full-content">
    	@include('layouts/header')
            <div class="content">
        	       @yield('content')
            </div>
    	@include('layouts/footer')
    </div>

    @include('layouts.js')
    @yield('js')
</body>
</html>
