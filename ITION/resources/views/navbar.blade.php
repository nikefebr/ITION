<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-1" style="background-color: #003567;">
            <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ url('') }}">ITION</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{ url('') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('lomba') }}">Lomba</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('galeri') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('testimoni') }}">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('tentang') }}">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>