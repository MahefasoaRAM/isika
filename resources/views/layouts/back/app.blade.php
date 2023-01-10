<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/bootstrap.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/fontawesome.css')}} ">
    <title>Isika Miara - manorina</title>
</head>
<body>
    <div class="container-fluid">

        {{-- header --}}
            @include('layouts.back.navbar')
        {{-- fin header --}}

        {{-- content --}}
            @yield('content')
        {{-- fin content --}}

        {{-- footer --}}
            @include('layouts.back.footer')
        {{-- fin footer --}}

    </div>

    {{-- script --}}
        <script src=" {{asset('js/jquery.js')}} "></script>
        <script src=" {{asset('js/bootstrap.js')}} "></script>
        <script src=" {{asset('js/feather.js')}} "></script>
        <script src=" {{asset('js/fontawesome.js')}} "></script>
        <script src=" {{asset('js/popper.js')}} "></script>
    {{-- fin script --}}
</body>
</html>
