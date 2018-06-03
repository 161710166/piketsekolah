@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Post 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  		<div class="form-group">
			  			<label class="control-label">Nama Siswa</label>
						<input type="text" name="nama" class="form-control" value="{{ $absen->Siswa->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>
						<input type="text" name="kelas" class="form-control" value="{{ $absen->Kelas->kelas }}"  readonly>
			  		</div>

			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="keterangan" class="form-control" value="{{ $absen->keterangan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alasam</label>
						<input type="text" name="alasan" class="form-control" value="{{ $absen->alasan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Nama Guru Piket</label>
						<input type="text" name="nama_guru_piket" class="form-control" value="{{ $absen->Piket->nama_guru_piket }}"  readonly>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection