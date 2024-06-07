<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Reistration Form</title>
    <style>
        .header{
            background-color: #239dc5;
            color: #140a0a;
            padding: 20px;
            text-align: center;

        }
        .footer{
            background-color: #cc5555;
            color: #140a0a;
            padding: 20px;
            text-align: center;
            bottom: 0%;
            width: 100%;
            position: fixed;
        }
    </style>
</head>
<body>
    <header class="header">
        @include('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
       @include('footer')
    </footer>
    
</body>
</html>