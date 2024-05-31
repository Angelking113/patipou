<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patipou</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }
        .navbar {
            background-color: #4267B2;
        }
        .navbar-brand {
            color: white;
            font-size: 32px; /* Aumentamos el tamaño de la fuente */
        }
        .navbar-brand:hover {
            color: white;
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .navbar-nav .nav-link:hover {
            color: white;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 20px;
            text-align: center; /* Centramos el contenido */
        }
        .card-title {
            font-size: 48px; /* Aumentamos el tamaño de la fuente */
            color: #4267B2; /* Cambiamos el color del título */
        }
        .card-text {
            font-size: 24px; /* Aumentamos el tamaño de la fuente */
            color: #4267B2; /* Cambiamos el color del texto */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Patipou</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    
                </ul>
            </div>
            <div class="text-center">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="nav-link btn btn-primary me-2">
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="nav-link btn btn-primary me-2">
                            
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="nav-link btn btn-primary me-2">
                                
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">PATIPOU</h1> <!-- Título más grande -->
                        <p class="card-text">Ven y encuentra a tu pata gemela</p>
                        <img src="https://images.vidavegasmagazine.com/wp-media-folder-vida-las-vegas-magazine/wp-content/uploads/2022/07/Depositphotos_230107080_XL.jpg" class="card-img-top card-img" alt="Imagen de presentación">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
