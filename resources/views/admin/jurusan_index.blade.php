@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $judul }}</div>
                <div class="card-body">
		<table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode Jurusan</th>
                            <th>Nama Jurusan</th>
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>
		<tbody>
		   @foreach ($jurusan as $row)
		 	<tr>
		            <td>{{ $loop->iteration }}</td>
		            <td>{{ $row->kode_jurusan }}</td>
		            <td>{{ $row->nama_jurusan }}</td>
		           
		            <td>
			<a href="" class="btn btn-info" > Ubah</a> 
			&nbsp;
			<a href="{{ url('admin/jurusan/hapus/'.$row->id) }}" class="btn btn-danger" 
			onclick="return confirm('Anda yakin?')" > Hapus </a>
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
@endsection