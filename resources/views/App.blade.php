<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Web Sekolah')</title>
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    {{-- CSS bawaan --}}
    <link rel="stylesheet"
        href="https://static.hsappstatic.net/foundations-theming-base/ex/live/hubspot-theme.stable.css">
    <link rel="stylesheet"
        href="https://static.hsappstatic.net/conversations-visitor-ui/static-1.26169/sass/visitor.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    {{-- Global --}}
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .navbar-container {
            background: rgba(255, 255, 255, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar-container.scrolled {
            background: #fff !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    @include('components.navbar_compnent')
    <main>
        @yield('content')
    </main>
    <footer>
        @include('components.footer_component')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
