<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel')</title>
</head>
<body>

@yield('content')

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/about">About Us</a></li>
    </ul>
    
</body>
</html>