<table class="table mt-4 ">
    Transaksi Detail
    <tbody>
      <tr>
        <th scope="row">Nama</th>
        <td>{{$item->name}}</td>
      </tr>
      <tr>
        <th scope="row">Email</th>
        <td>{{$item->email}}</td>
      </tr>
      <tr>
        <th scope="row">Nomor Hp</th>
        <td>{{$item->phone}}</td>
      </tr>
      <tr>
        <th scope="row">Alamat</th>
        <td>{{$item->adress}}</td>
      </tr>
      <tr>
        <th scope="row">Total Transaksi</th>
        <td>{{$item->transaction_total}}</td>
      </tr>
      <tr>
        <th scope="row">Status Transaksi</th>
        <td>{{$item->transaction_status}}</td>
      </tr>
      <tr>
          <th>Pembelian Product</th>
          <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama Barang</th>
                    <th>Type</th>
                    <th>Harga</th>
                </tr>
                @foreach ($item->details as $detail)
                    <tr>
                        <td>{{$detail->product->name}}</td>
                        <td>{{$detail->product->type}}</td>
                        <td>Rp{{$detail->product->price}}</td>
                    </tr>
                @endforeach
            </table>
        </td>
      </tr>
      
    </tbody>
  </table>


<div class="row">
    <div class="col-4">
        <a href="{{route('transactions.status',$item->id)}}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> Set Success
        </a>
    </div>
    <div class="col-4">
        <a href="{{route('transactions.status',$item->id)}}?status=FAILED" class="btn btn-danger btn-block">
            <i class="fa fa-times"></i> Set Gagal
        </a>
    </div>
    <div class="col-4">
        <a href="{{route('transactions.status',$item->id)}}?status=PENDING" class="btn btn-info btn-block">
            <i class="fa fa-spinner"></i> Set Pending
        </a>
    </div>
</div>

