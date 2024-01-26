@extends('Layout')
@section('title',"Home Page")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-11 col-auto m-auto mt-4">
                <a href="/register" class="btn btn-outline-primary my-4 " style="float: right">Add Product</a>
                <table class="table">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Descrition</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $item)
                      <tr class="text-center">
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src="Product_image/{{ $item->image }}" width="30px" class="rounded-circle" height="30px" alt="No Image">
                        </td>
                        <td>
                            <a href="/update/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/show/{{ $item->id }}" class="btn btn-sm btn-success">View</a>
                            <a href="/delete/{{ $item->id }}" class="btn btn-sm btn-danger">Del</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
