<table class="table">
  
  <thead>
    <th>PLU</th>
    <th>Name</th>
    <th>Purchase Price</th>
    <th>Pack</th>
    <th>Unit Price</th>
    <th>Vendor</th>
  </thead>
  
  <tbody>
    @foreach($products as $product)
      <tr>
        <td>{{ $product->plu }}</td>
        <td><a href="{{ route('products.show', ['id'=> $product->id]) }}">{{ $product->description }}</a></td>
        <td>{{ $product->purchase_price }}</td>
        <td>{{ $product->pack_qty }} / {{ $product->pack_size }} {{ $product->pack_uom }}</td>
        <td>{{ $product->unit_price }}</td>
        <td>{{ $product->vendor->name }}</td>
      </tr>
    @endforeach
  </tbody>

</table>
