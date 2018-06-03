@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Siswa 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">

 			  			<label class="control-label">nis</label>	
			  			<input type="text" name="nis" class="form-control" value="{{ $siswa->nama }}"  readonly>
			  		</div>
       			
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}"  readonly>
			  		</div>

			  			<label class="control-label">Jenis kelamin</label>	
			  			<input type="text" name="jk" class="form-control" value="{{ $siswa->nama }}"  readonly>
			  		</div>

			  			<label class="control-label">tanggal_lahir</label>	
			  			<input type="text" name="tanggal_lahir" class="form-control" value="{{ $siswa->nama }}"  readonly>
			  		</div>

			  			<label class="control-label">alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $siswa->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $siswa->Kelas->kelas }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection