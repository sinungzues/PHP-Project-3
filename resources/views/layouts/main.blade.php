<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $tittle }}</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        @yield('container')
    </div>
    <div class="footer">
        copyright &copy;
        <script>
            document.write(new Date().getFullYear());
        </script>, Ruang Sambat
    </div>
</body>

</html>
