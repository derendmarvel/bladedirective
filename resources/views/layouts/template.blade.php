<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<title> @yield('title') </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="#"> Navbar </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
                <ul class="navbar-nav"> 
                    <li class="nav-item">
                        <a class="nav-link {{ $activeCampus ?? '' }}" href="/"> Campus </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $activeStudent ?? '' }}" href="/student"> Student </a>
                    </li>
                </ul>
            </div> 
        </div> 
    </nav>

    <div class="container p-5">
        <h1> @yield('pagetitle') </h1>
        @yield('main_content')
    </div>

    <footer class="w-100 position-fixed bottom-0 start-50 translate-middle-x bg-primary">
        <div class="text-center p-3 text-light">
            Copyright Project Catalog @2021
        </div>
    </footer>
</body>

</html>