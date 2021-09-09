<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    
    <title></title>
</head>

<body>
    <header>
        @include('templates.header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @include('templates.footer')
    </footer>
</body>

</html>