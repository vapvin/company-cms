<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- style area -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <!-- import script -->
    <script src="{{asset('js/app.js')}}"></script>
    <title>49week CMS</title>

</head>
<body>
    @include('inc.header')
    <div class="container-full">
        <div class="row">
            @yield('main-row')
        </div>
    </div>
</body>
</html>