@extends('adminLTE.master')
@section('content')
<div class="card card-primary m-2">
    <div class="card-header">
        <h6 class="text-center text-bold">Input Jawaban</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/jawaban" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="id_pertanyaan">Id Pertanyaan</label>
                <input type="number"  class="form-control" name="id_pertanyaan" id="id_pertanyaan" placeholder="">
            </div>
            <div class="form-group">
                <label for="isi">Isi Jawaban</label>
                <textarea type="text" class="form-control" name="isi" id="isi" placeholder=""></textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Jawab</button>
        </div>
    </form>
</div>
@endsection