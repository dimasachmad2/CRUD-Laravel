@extends('adminLTE.master')
@section('content')
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Input Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/categories" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/categories" class="btn btn-danger">Back</a>
        </div>
    </form>
</div>
@endsection