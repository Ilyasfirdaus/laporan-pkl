<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  

 
	<a class="btn btn-danger" href="{{ route('kunjungan.index') }}" role="button">keluar</a>
	
 
	@foreach($kunjungan as $k)
	<form class="row g-3" action="{{ url('/kunjungan/update',$k->id) }}" method="post">
		{{ csrf_field() }}
		<div class="col-md-6">
			<label for="inputEmail4" class="col-sm-2 col-form-label">keperluan</label>
			<input type="text" class="form-control required="required name="keperluan" value="{{ $k->keperluan }}">
		  </div>
		  <div class="col-md-6">
			<label for="inputEmail4" class="col-sm-2 col-form-label">Tujuan</label>
			<input type="text" class="form-control required="required name="tujuan" value="{{ $k->tujuan }}">
		  </div>
		  <div class="col-md-12">
			<label for="inputEmail4" class="col-sm-2 col-form-label">Kesan</label>
			<input type="text" class="form-control required="required name="kesan" value="{{ $k->kesan}}">
		  </div>
		<div class="col-12">
			<button type="submit" class="btn btn-primary" value="Simpan Data">Ubah Data</button>
		  </div>
	</form>
	@endforeach
		
 
</body>
</html>