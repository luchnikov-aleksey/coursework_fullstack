<!DOCTYPE html>
<html lang="ru">
<head>
    @section('head')
        <meta charset="UTF-8">
        <title>@yield('title')</title>

        <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="../fontawesome/css/all.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">



    @show
    <style>
        body {
            background-color: #303030
        }
    </style>

</head>
<body>
<div>
    <x-header></x-header>
    <main @yield('class')>
        @yield('page-content')
    </main>
</div>
<x-footer></x-footer>
@yield('scripts')
<script src="../js/bootstrap.min.js"></script>
<script src="resources/app.js"></script>
</body>
</html>

