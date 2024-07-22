<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRONTEND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .carousel-inner {
            display: flex;
        }

        .carousel-item {
            display: flex;
            justify-content: space-between;
            width: 100%;
            flex: 0 0 auto;
        }

        .carousel-item .card {
            flex: 1;
            margin: 0 10px;
            /* Ruang antar card */
        }
    </style>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container ">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">Franchise Opportunities</li>
                <li class="nav-item">Help</li>
                <li class="nav-item">Feedback</li>
            </ul>
            <ul class="navbar-nav gap-3 d-flex justify-content-end">
                <li class="nav-item">hello@email.com</li>
                <li class="nav-item">0800 022 2 022</li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="d-flex gap-2">
                    <img src="https://via.placeholder.com/50" alt="logo">
                    <h1 class="text-center">CARTRIDGE KINGS</h1>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center gap-5">
                <form role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 50 50">
                                    <path
                                        d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </form>
                <button class="btn btn-warning">CART</button>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col py-3 text-center text-white" style="background-color: blue">
                HOME
            </div>
            <div class="col bg-primary py-3 text-center text-white">
                INK CARTRIDGE
            </div>
            <div class="col bg-primary py-3 text-center text-white">
                TONER CARTRIDGE
            </div>
            <div class="col bg-primary py-3 text-center text-white">
                CONTACT US
            </div>
            <div class="col bg-primary py-3 text-center text-white">
                LOGIN / REGISTER
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5"
        style="background-image: url('https://images.pexels.com/photos/3760323/pexels-photo-3760323.jpeg'); background-size: cover; background-position: center; height: 50vh;">
        <div class="row h-100">
            <div class="col-12 text-center text-white my-auto">
                <h1>FIND THE RIGHT CARTRIDGE FOR YOUR PRINTER</h1>
            </div>
            <div class="d-flex justify-content-center">

            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row h-100">
            <div class="col-12 text-center my-auto">
                <h4>FEATURED PRODUCT</h4>
            </div>
            <div class="col-12">

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
