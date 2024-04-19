<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mahasiswa</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-[#424242]">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body bg-[#323232] text-white">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NIM</label>
                                <input type="text" class="form-control" name="nim" value="{{ old('nim', $post->nim) }}" placeholder="Masukkan NIM">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama', $post->nama) }}" placeholder="Masukkan Nama">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $post->alamat) }}" placeholder="Masukkan Alamat">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nomor HP</label>
                                <input type="text" class="form-control" name="nomorhp" value="{{ old('nomorhp', $post->nomorhp) }}" placeholder="Masukkan Nomor HP">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Motivasi Kuliah</label>
                                <textarea class="form-control" name="motivasikuliah" rows="5" placeholder="Masukkan Motivasi Kuliah">{{ old('motivasikuliah', $post->motivasikuliah) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</body>
</html>
