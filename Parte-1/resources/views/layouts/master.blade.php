<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto 1</title>
    <style>
        .header{
            background: #1715b4;
            color: #fff;
        }
        .content{
            background: #37b93d;
            /* color: #fff; */
        }
        .footer{
            background: #6d0b0b;
            color: #fff;
        }

    </style>
</head>
<body>


    <div class="header">

        <h1>@yield('title')</h1>
    </div>

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.componets.footer')

</body>
</html>
