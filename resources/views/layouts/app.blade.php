<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Lists</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        @include('includes.navbar')
        @include('includes.messages')
        @yield('content')
    </div>
</body>
    @include('includes.footer')
</html>