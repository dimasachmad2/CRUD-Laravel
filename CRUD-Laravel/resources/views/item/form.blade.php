@extends('adminLTE.master')
@section('content')
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Input Items</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/items" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description">
            </div>
            <div class="form-group">
                <label for="stock">stock</label>
                <input type="number" class="form-control" name="stock" id="stock" placeholder="Enter stock">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection