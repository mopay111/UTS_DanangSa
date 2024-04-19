<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-[#424242]">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body bg-[#323232]">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="text-white">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NIM</label>
                                <input type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM">
                            
                                <!-- error message untuk nim -->
                                @error('nim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">
                            
                                <!-- error message untuk alamat -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nomor HP</label>
                                <input type="number" class="form-control @error('nomorhp') is-invalid @enderror" name="nomorhp" value="{{ old('nomorhp') }}" placeholder="Masukkan Nomor HP">
                            
                                <!-- error message untuk nomorhp -->
                                @error('nomorhp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Motivasi Kuliah</label>
                                <textarea class="form-control @error('motivasikuliah') is-invalid @enderror" name="motivasikuliah" rows="5" placeholder="Masukkan Motivasi Kuliah">{{ old('motivasikuliah') }}</textarea>
                            
                                <!-- error message untuk motivasikuliah -->
                                @error('motivasikuliah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
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
