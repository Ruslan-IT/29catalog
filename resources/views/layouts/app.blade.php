<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Мой сайт')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Подключение CSS -->
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bundle.css">
    <link rel="stylesheet" href="/css/plugins.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>

<!-- Шапка -->

@include('partials.header')

<!-- Основной контент -->

    @yield('content')


<!-- Подвал -->


@include('partials.footer')

<script src="/js/script.js"></script>
<!-- all js here -->
<script src="/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
