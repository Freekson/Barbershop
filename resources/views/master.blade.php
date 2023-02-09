<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.PNG" rel="shortcut icon" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Katalog.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/App.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('title')</title>
    <style>
        .main__wrapper{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.navbar-brand {
    font-family: 'Satisfy', cursive;
    font-size: 25px;
    margin-left: 24px;    
}
.main__wrapper h3{
    margin-top: 50px;
}
.main__wrapper .form__item{
    width: 400px;
}
.main__wrapper .form__item .input{
    width: 100%;
    padding: 7px;
    margin: 15px;
    margin-left: 0;
}
.remember-me{
        display: flex;
        justify-content: center;
        box-sizing: border-box;
}
.remember-me input{
    margin-right: 5px;
    box-sizing: border-box;
}
.main__wrapper .form__item button{
    width: 100%;
    padding: 7px;
    margin: 15px;
    background-color: blue;
    color: wheat;
    border: none;
}
.form__btn{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Barbershop na ulice Nadbystzyckiej</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Catalog">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="Galery">Gallery</a>
                        </li>
                        <li class="nav-item">
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                              <a href="{{ url('/home') }}" class="nav-link">{{Auth::user()->name}}</a>
                            </li>
                             @else
                             <li class="nav-item">
                              <a href="{{ route('login') }}" class="nav-link">Log in</a>
                             </li>
                              @if (Route::has('register'))
                              <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                              </li>               
                               @endif
                             @endauth
                          @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <footer>

    </footer>
</body>


</html>