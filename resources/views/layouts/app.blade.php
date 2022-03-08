<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPU Laravel | {{ $title }}</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- icon boottrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- mycss --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">





</head>
<body>

    {{-- Navbar --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="/">WPU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ $active === "home" ? 'active' : '' }}" href="/">Home</a>
                    <a class="nav-link {{ $active === "about" ? 'active' : '' }} " href="/about">About</a>
                    <a class="nav-link {{ $active === "posts" ? 'active' : '' }}" href="/posts">Blog</a>
                    <a class="nav-link {{ $active === "category" ? 'active' : '' }}" href="/categories">Category</a>
                </div>
                <div class="navbar-nav ms-auto">

                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome ,{{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashbord</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                            </form>

                        </ul>
                    </li>
                    @else
                    <a class="nav-link {{ $active === "login" ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                    <a class="nav-link {{ $active === "register" ? 'active' : '' }}" href="/register"><i class="bi bi-box-arrow-right"></i>Register</a>
                    @endauth
                </div>

            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>


</body>
</html>
