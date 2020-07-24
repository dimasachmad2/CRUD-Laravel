@extends('adminLTE.master')

@section('content')
<div class="m-2">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title p-1">Data Item</h3>
                <div class="card-tools">
                    <a href="/items/create" class="btn btn-primary btn-sm">
                    Create Item
                    </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Stock</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($items as $key => $item)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->description }}</td>
                      <td>{{ $item->stock }}</td>
                      <td>{{ $item->price }}</td>
                      <td>{{ $item->category->name }}</td>
                      <td>
                        <a href="/items/{{ $item->id }}" class="btn btn-outline-info">Show</a>
                        <a href="/items/{{ $item->id }}/edit" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                        <form action="/items/{{$item->id}}" method="post" style="display:inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-outline-danger btn-md"><i class="fas fa-trash"></i></button>
                        </form>
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