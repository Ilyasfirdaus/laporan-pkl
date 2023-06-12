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
            </div>
          </div>
        </div>
      </nav>
    <div class="header" align='center'>
      <head>DATA INSTITUSI</head>
      <br>
    </div>


    
                        <table class="table table-success table-striped" border="1" align="center">
                            <thead>
                                <tr>
                                    <td>Nama Institusi</td>
                                    <td>Alamat </td>
            
                                </tr>
                            </thead>
                        <tbody>

                    @foreach ($data as $item)
                        <tr>   
                            <td>{{  $item->nama_institusi }} </td>
                            <td>{{  $item->alamat }}</td>
                            
                                
                        </tr>  
                    @endforeach
                        </tbody>
                        </table>
    
        
      
                     
</html> 