@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Absen
			  	<div class="panel-title pull-right"><a href="{{ route('siswa.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Siswa</th>
					  <th>Kelas</th>
					  <th>Keterangan</th>
					  <th>Alasan</th>
					  <th>Guru Piket</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($absen as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><p>{{ $data->Siswa->nama }}</p></td>
				    	<td><p>{{ $data->Kelas->kelas }}</p></td>				    	
				    	<td>{{ $data->keterangan }}</td>
				    	<td><p>{{ $data->alasan }}</p></td>
				    	<td><p>{{ $data->Piket->nama_guru_piket }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('siswa.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('siswa.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('siswa.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection