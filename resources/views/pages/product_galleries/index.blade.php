@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="orders">
            <div class="row">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title ">Daftar Photo Barang</h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Barang</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->product->name}}</td>
                                            <td>
                                                <img src="{{url($item->photo)}}" alt="" style="width:250px" class="img-thumbnail">
                                            </td>
                                            <td>
                                             
                                                <form action="{{route('product_galleries.destroy', $item->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center p-5">  Data Tidak Tersedia</td>
                                              
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection