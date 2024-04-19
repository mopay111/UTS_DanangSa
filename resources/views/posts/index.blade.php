<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="bg-[#424242]">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4 text-white">DATA MAHASISWA <span class="text-yellow-400">POLTEK HARBER</span></h3>
                    <h5 class="text-center text-yellow-400">POLITEKNIK HARAPAN BERSAMA</h5>         
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body bg-[#323232]">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <table class="table table-bordered text-white">
                            <thead>
                              <tr class="text-center">
                                <th scope="col">NIM</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">NOMOR HP</th>
                                <th scope="col">MOTIVASI KULIAH</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->nim }}</td>
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->alamat }}</td>
                                    <td>{{ $post->nomorhp }}</td>
                                    <td>{{ $post->motivasikuliah }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <tr class="bg-red-500">
                                      <td colspan="6" class="text-center">Data Post belum Tersedia.</td>
                                  </tr>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>
