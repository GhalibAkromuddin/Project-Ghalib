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
                            <th>Nisn</th>
                            <th>Nama Siswa</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat lahir</th>
                            <th>Tanggal Lahir</th>         
                            <th>Email</th>         
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>
		<tbody>
		   @foreach ($siswa as $row)
		 	<tr>
		            <td>{{ $loop->iteration }}</td>
		            <td>{{ $row->nama_siswa }}</td>
		            <td>{{ $row->alamat }}</td>
		            <td>{{ $row->jk_siswa }}</td>
		            <td>{{ $row->tempat_lahir }}</td>
		            <td>{{ $row->tgl_lahir }}</td>
		            <td>{{ $row->agama }}</td>
		            <td>{{ $row->email }}</td>
		            <td>
			<a href="" class="btn btn-info" > Ubah</a> 
			&nbsp;
			<a href="{{ url('admin/siswa/hapus/'.$row->id) }}" class="btn btn-danger" 
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
