@extends('Layout')
@section('title','Single Show Product')
@section('content')
    <div class="container">
        <div class="row" style="height: 90vh">
            <div class="col-lg-5 d-flex align-items-center m-auto justify-center">
                <div class="card mb-3" style="max-width: 100%">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="/Product_image/{{ $data->image }}" class="img-fluid rounded-start" style="height: 150px" width="150px" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Product Name : {{ $data->name }} </h5>
                          <p class="card-text">Product Desc.. : {{ $data->description }}</p>
                          <a href="/" class="btn btn-sm btn-outline-dark">Back</a>
                          {{-- <p class="card-text">
                            <small class="text-muted"><a href=""></a></small>
                        </p> --}}
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
