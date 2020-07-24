@extends('adminLTE.master')
@section('content')
<div class="card card-primary m-2">
    <div class="card-header">
        <h6 class="text-center text-bold">Edit Jawaban</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="/jawaban/{{$jawaban_edit->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id_pertanyaan">Id Pertanyaan</label>
                <input type="number" class="form-control" name="id_pertanyaan" id="id_pertanyaan" value="{{$jawaban_edit->id_pertanyaan}}" placeholder="">
            </div>
            <div class="form-group">
                <label for="isi">Isi Jawaban</label>
                <textarea type="text" class="form-control" name="isi" id="isi" placeholder="">{{$jawaban_edit->isi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection