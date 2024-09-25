<div>
    <h1>Product detail</h1>
    <form action="" method="POST">
        <label>Product name</label>
        <input type="text" readonly name="p_name" value="{{ $product->p_name }}">
        <br>
        <label>Mass</label>
        <input type="number" min="100" name="p_mass"  value="{{ $product->p_mass }}">
        <br>
        <label>Price</label>
        <input type="text" readonly name="p_price" value="{{ $product->p_price  }}">
        <br>
        <button type="submit" name="submit">add to chart</button>
        <br>
        <a href="{{ route('home') }}">back</a>
    </form>
</div>

