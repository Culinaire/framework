@extends('master')

@section('body')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-bordered table-condensed">
          <thead>
            <tr>
              <th>PLU</th>
              <th>Name</th>
              <th>Pack Size</th>
              <th>Cases on Hand</th>
              <th>Units on Hand</th>
              <th>Cases to Order</th>
              <th>Vendor</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td>{{ $product->plu }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->pack_qty }} / {{ $product->pack_size }} {{ $product->pack_uom }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td>{{ $product->vendor->name }}</td>
              <td>{{ $product->purchase_price }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>    
    </div>
  </div> 
@endsection