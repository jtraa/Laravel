<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel')</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="dropdown navigation">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Menu
          </a>
      <ul>
          <div class="navbar-dropdown">
            <a href="/" class="navbar-item">
                Home
            </a>
            <a href='/home' class="navbar-item">
                Login
            </a>
            <a href="/about" class="navbar-item">
                About
            </a>
            <a href="/contact" class="navbar-item">
              Contact
          </a>
            <hr class="navbar-divider">
            <div> <a href="/projects" class="navbar-item">
              Products
            </a></div>
            <div> <a href="/projects/create" class="navbar-item">
                Create Product
            </a></div>
        <div> <a href="/projects/1/edit" class="navbar-item">
                Edit Product
        </a></div>
          </div>
        </div>
      </nav>
    </ul>
      
     
   <div class="container">
        @yield('content')    
        </div>
    
</body>
</html>