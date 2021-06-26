<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>@section('title', 'Laravel Manage Roles And Permission')</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        @section('sidebar')
        @include('includes.side-bar')
        @show
        <div class="main">
            @include('includes.nav-bar')

            <main class="content">
                <div class="container-fluid p-0">
                    @yield('content')
                    


                </div>
            </main>

            @include('includes.footer')
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>