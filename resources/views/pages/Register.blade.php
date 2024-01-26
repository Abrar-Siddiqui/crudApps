@extends('Layout')
@section('title','Register Page')
@section('content')
    <div class="container">
        <div class="row " style="height: 90vh">
            <div class="col-lg-4 col-md-6 col-sm-10 col-auto m-auto d-flex align-items-center card shadow-lg px-3 py-4 border-0 " >
                <h3 class="mb-3 text-center">Add Product Details</h3>
                <form enctype="multipart/form-data" action="/store" method="POST">
                    @csrf
                    <div class="mb-3">
                      <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Product Name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    </div>
                    <div class="mb-3">
                        <textarea  class="form-control"  name="description" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Description..">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" value="{{ old('image') }}" name="image" id="exampleInputImage" aria-describedby="imageHelp">
                        @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                  </form>
            </div>
        </div>
    </div>
@endsection
