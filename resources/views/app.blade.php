<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=" {{asset('img/icons/logo.png')}} " type="image/x-icon">
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/bootstrap.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/fontawesome.css')}} ">
    <title>@yield('title')</title>
</head>
<body>
    <div class="main">

        {{-- header --}}
            @include('layouts.front.navbar')
        {{-- fin header --}}

        {{-- content --}}
            <div class="content">
                @yield('content')
            </div>
        {{-- fin content --}}

        {{-- footer --}}
            @include('layouts.front.footer')
        {{-- fin footer --}}

    </div>

    {{-- script --}}
        <script src=" {{asset('js/jquery.js')}} "></script>
        <script src=" {{asset('js/bootstrap.js')}} "></script>
        <script src=" {{asset('js/feather.js')}} "></script>
        <script src=" {{asset('js/fontawesome.js')}} "></script>
        <script src=" {{asset('js/popper.js')}} "></script>
        <script src=" {{asset('js/tinymce/tinymce.min.js')}} "></script>
        @yield('script')
    {{-- fin script --}}
</body>
</html>
