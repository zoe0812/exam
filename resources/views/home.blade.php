<div>
    <center>
    <h1>Welcome to my market</h1>
    <p>Choose what fruit you want</p>

    <table>
        <thead>
            <th>Product name</th>
            <th>Product mass</th>
            <th>Product price</th>
            <th>Action</th>
        </thead>
        <tbody>
            @if(count($products)!==0)
            @foreach($products as $product)
            <tr>
                <td>{{$product->p_name}}</td>
                <td>{{$product->p_mass}}g</td>
                <td>RM{{$product->p_price}}</td>
                <td><a href="{{ route('product.show', $product->id )}}">Buy</a></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</table>
</div>
</center>