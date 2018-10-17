<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    @include('admin.layouts.styles')
</head>

<body class="theme-red">
    @include('admin.layouts.loader')
    @include('admin.layouts.header')
    <section>
        @include('admin.layouts.sidebar')
    </section>

    <section class="content">
        @yield('content')        
    </section>
    @include('admin.layouts.scripts')
    
</body>

</html>
