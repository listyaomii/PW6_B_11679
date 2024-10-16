<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="x-icon" href="/images/logo.png">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        
        body, html {
            height: 100%;
            margin: 0;
            font-family: "Roboto", sans-serif;  
        }

        .content {
            margin-top: 70px;
        }

        .catalog-title {
            font-size: 60px; 
            font-weight: bold;
            color: black; 
            text-shadow: 0 0px 0px 3px rgba(0, 0, 0, 0.5);
        }

        .catalog-subtitle {
            font-size: 18px; 
            color: gray;
            font-weight: 300;
            text-align: center;
            margin-top: 10px; 
        }

        .divider {
            height: 1px;
            background-color: lightgray;
            margin: 20px 0;
        }

        .logo {
            width: 40px; 
            height: auto;
        }

        .catalog-container {
            width: 80%; 
            margin: auto; 
        }
        .navbar-toggler {
            border: none; 
        }

        .card {
            transition: box-shadow 0.3s; /* Menambahkan efek transisi */
        }

        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan saat hover */
        }
        
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <i class="bi bi-apple" style="font-size: 20px"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <h5 class="navbar-brand">Apple.</h5>
                </a>    
                <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('product')}}">Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="content">
        <div class="catalog-container"> 
            <div class="text-center mb-3">
                <h1 class="catalog-title">Our Iphone Series</h1>
            </div>
            <div class="catalog-subtitle">
                We are committed to crafting high-quality products that not only meet your needs but also enhance your everyday life. We believe in innovation and excellence, ensuring every item we create brings joy and satisfaction.
            </div>
            <div class="divider">
            <div class="overflow-x-auto">
                <div class="row flex-nowrap"> 
                        @if ($iphones->isEmpty())
                            <div class="col-12 text-center">
                                <h5 class="text-muted text-danger">Data Kosong</h5>
                            </div>
                        @else

                        @php
                            $imageNames = [
                                '13.jpeg',
                                '12.jpeg',
                                '14.jpeg',
                                '15.jpeg',
                                '16.jpeg',
                            ];
                        @endphp
                            @foreach ($iphones as $index => $iphone)
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow border">
                                        <div class="p-3 text-center">
                                            <!-- Menggunakan gambar dari folder images berdasarkan array -->
                                            <img src="{{ asset('images/' . $imageNames[$index % count($imageNames)]) }}" alt="{{ $iphone->series }}" class="img-fluid mb-2" style="max-height: 200px; object-fit: cover;">
                                            <h1>{{ $iphone->series }}</h1>
                                            <p>{{ 'IDR ' . number_format($iphone->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div> 
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
