<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Christmas Toy Factory')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div><x-header /></div>
    

    <main  class="container">
        @yield('content')
    </main>
    <div><x-footer /></div>
</body>
</html>
