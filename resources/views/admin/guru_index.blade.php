@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $judul }}</div>
                <div class="card-body">
		<table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nip</th>
                            <th>Nama Guru</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat lahir</th>
                            <th>Tanggal Lahir</th>         
                            <th>Email</th>         
                            <th>Pendidikan terakhir</th>         
                            <th>Jurusan</th>         
                            <th>agama</th>         
                            <th>status</th>         
                            <th>Jabatan</th>         
                            <th>Foto</th>         
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>
		<tbody>
		   @foreach ($guru as $row)
		 	<tr>
		            <td>{{ $loop->iteration }}</td>
		            <td>{{ $row->nip }}</td>
		            <td>{{ $row->nama_guru }}</td>
		            <td>{{ $row->alamat_guru }}</td>
		            <td>{{ $row->jk_guru }}</td>
		            <td>{{ $row->tempat_lahir }}</td>
		            <td>{{ $row->tgl_lahir }}</td>
		            <td>{{ $row->email }}</td>
		            <td>{{ $row->pend_terakhir }}</td>
		            <td>{{ $row->jurusan }}</td>
		            <td>{{ $row->agama }}</td>
		            <td>{{ $row->status }}</td>
		            <td>{{ $row->jabatan }}</td>
		            <td>{{ $row->foto }}</td>
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
