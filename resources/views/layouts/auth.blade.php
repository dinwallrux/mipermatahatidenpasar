<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MI Permata Hati Denpasar</title>
    <link rel="icon" href="{{asset('main/img/favicon/favicon-32x32.png')}}" type="image/png" sizes="16x16">
    @include('components.head_script')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        @yield('contentAuth')

    </div>

    @include('components.footer_script');
</body>

</html>
