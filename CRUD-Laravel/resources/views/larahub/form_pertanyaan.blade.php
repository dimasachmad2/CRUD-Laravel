@extends('adminLTE.master')
@section('content')
<div class="card card-primary m-2">
    <div class="card-header">
        <h6 class="text-center text-bold">Input Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="">
            </div>
            <div class="form-group">
                <label for="isi">Isi Pertanyaan</label>
                <textarea type="text" class="form-control" name="isi" id="isi" placeholder=""></textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection