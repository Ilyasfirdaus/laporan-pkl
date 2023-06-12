<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <img src="image/biotrop.png" width="150px">
            </div>
          </div>
        </div>
      </nav>
    <div class="header" align='center'>
      <head>DATA KUNJUNGAN</head>
      <br>
    </div>
    
        
      
         <a href="{{ route('kunjungan.create') }}" class='btn btn-primary'>Tambah Data</a>
                        <table class="table table-success table-striped" border="1" align="center">
                            <thead>
                                <tr>
                                    <td>Jam Masuk </td>
                                    <td>Pengunjung</td>
                                    <td>Institusi</td>
                                    <td>Alamat</td>
                                    <td>Keperluan</td>
                                    <td>Kesan</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                        <tbody>
                    
                    @foreach ($data as $item)
                        <tr>  
                            <td>{{  $item->created_at }}</td>
                            <td><a href="{{ route('pengunjung', $item->pengunjung->id) }}">{{ $item->pengunjung->nama }}</a></td>
                            <td><a href="{{ route('institusi', $item->institusi->id) }}">{{  $item->institusi->nama_institusi }}</a></td>
                            <td>{{  $item->institusi->alamat }}</td>
                            <td>{{  $item->keperluan }}</td>
                            <td>{{  $item->kesan }}</td>
                            <td>
                              <form method="POST" action="{{route('kunjungan.destroy',$item->id)}}">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                          </td>
                        </tr>  
                    @endforeach
                        </tbody>
                        </table>
                     
</html> 