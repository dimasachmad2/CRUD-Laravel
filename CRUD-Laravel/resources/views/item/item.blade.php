@extends('adminLTE.master')
@section('content')
<div class="m-2">
    <div class="card m-3">
        <!-- /.card-header -->
        <div class="card-header">
            <h3 class="card-title">{{$item->name}}</h3>
        </div>
        <!-- /.card-body -->
        <div class="card-body p-2">
            <p class="card-text">Description : {{$item->description}}</p>
            <p class="card-text">Stock : {{$item->stock}}</p>
            <p class="card-text">Price : {{$item->price}}</p>
            @foreach($item->tags as $tag)
                <button class="btn btn-default btn-sm">{{$tag->tag_name}}</button>
            @endforeach
        </div>
    </div>
    <div class="mx-3">
        <a href="/items" class="btn btn-outline-danger btn-md">back</a>
    </div>
</div>
@endsection