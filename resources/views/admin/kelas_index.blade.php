@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $judul }}</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah data kelas
                      </button>
                      
		<table class="table table-hover table-striped table-bordered ">
            
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>semester</th>  
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>
		<tbody>
		   @foreach ($kelas as $row)
		 	<tr>
		            <td>{{ $loop->iteration }}</td>
		            <td>{{ $row->kode_kelas }}</td>
		            <td>{{ $row->nama_kelas }}</td>
		            <td>{{ $row->tahun_ajaran }}</td>
		            <td>{{ $row->semester }}</td>
		            <td>
			<a href="" class="btn btn-info" > Ubah</a> 
			&nbsp;
			<a href="{{ url('admin/kelas/hapus/'.$row->id) }}" class="btn btn-danger" 
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="kelas/simpan" method="post">
            {{ csrf_field() }}
        <div class="modal-body">
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Kelas</label>
                    <input name="kode_kelas" type="number" class="form-control" id="kode_kelas" aria-describedby="emailHelp" placeholder="kode kelas"> 
                    @if ($errors->has('kode_kelas'))
                  <span class="help-block">{{$errors->first('kode_kelas')}}</span>
                            @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kelas</label>
                    <input name="nama_kelas" type="text" class="form-control" id="nama_kelas" aria-describedby="emailHelp" placeholder="nama kelas"> 
                    @if ($errors->has('nama_kelas'))
                  <span class="help-block">{{$errors->first('nama_kelas')}}</span>
                            @endif
                </div>

                  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
