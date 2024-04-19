<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Mahasiswa</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-[#424242]">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body bg-[#323232] text-white">
                        <h4>NIM: {{ $post->nim }}</h4>
                        <h4>Nama: {{ $post->nama }}</h4>
                        <h4>Alamat: {{ $post->alamat }}</h4>
                        <h4>Nomor HP: {{ $post->nomorhp }}</h4>
                        <h4>Motivasi Kuliah:</h4>
                        <p>{{ $post->motivasikuliah }}</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
