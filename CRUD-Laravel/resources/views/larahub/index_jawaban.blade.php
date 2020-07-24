@extends('adminLTE.master')

@section('content')
<div class="m-2">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title p-1">Jawaban Dari Pertanyaan {{$id_pertanyaan}}</h3>
                <div class="card-tools">
                    <a href="/jawaban/{{$id_pertanyaan}}/create" class="btn btn-primary btn-sm">Tambah</a>
                    <a href="/pertanyaan" class="btn btn-danger btn-sm">Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Isi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($jawabanbyId as $key => $jawab)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $jawab->isi }}</td>
                      <td>
                        <a href="/jawaban/{{$jawab->id}}/edit" class="btn btn-info btn-sm text-white">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
@endsection