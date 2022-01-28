@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Photo Barang</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{route('product_galleries.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nama Barang</label>
                    <select name="products_id" required class="form-control @error('products_id') is-invalid @enderror">
                       @foreach ($products as $product)
                       <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach 
                    </select>
    
    
                    @error('products_id') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="photo" class="form-control-label">Foto Barang</label>
                        <input type="file"
                            class="form-control"
                            placeholder="photo"
                            name="photo"
                            value="{{old('photo')}}"
                            accept="image/*"
                            required
                            class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{$message}}</div> @enderror
                    </div>
    
                    <div class="form-group">
                        <button class="btn btn-danger btn-block" type="submit">
                            Tambah Photo Barang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection