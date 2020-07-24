@extends('adminLTE.master')
@section('content')
<div class="m-2">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category</h3>
            <div class="card-tools">
                <a href="/categories/create" class="btn btn-primary">add Category</a>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection