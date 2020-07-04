@extends('adminLTE.master')

@section('content')
<div class="m-2">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title p-1">List Pertanyaan</h3>
                <div class="card-tools">
                    <a href="/pertanyaan/create" class="btn btn-primary btn-sm">
                    Tanya
                    </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $tanya)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $tanya->judul }}</td>
                      <td>{{ $tanya->isi }}</td>
                      <td>
                          <a href="/jawaban/{{$tanya->id}}" class="btn btn-warning btn-sm">
                            Lihat
                          </a>
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