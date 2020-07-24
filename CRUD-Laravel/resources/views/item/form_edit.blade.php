@extends('adminLTE.master')
@section('content')
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Edit Item</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/items/{{ $item->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$item->name}}" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{$item->description}}" placeholder="Enter Description">
            </div>
            <div class="form-group">
                <label for="stock">stock</label>
                <input type="number" class="form-control" name="stock" id="stock" value="{{$item->stock}}" placeholder="Enter stock">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="number" class="form-control" name="price" id="price" value="{{$item->price}}" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($categories as $category)
                    @if($category->id == $item->category_id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection