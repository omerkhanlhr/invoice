@include('header')
<!DOCTYPE html>
<html lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<!-- ... Head section ... -->
<body>
    <div class="container">
        <h1 class="text-center">Invoice</h1>
        <p><strong>Customer Name:</strong> {{ $customer->name }}</p>
        <p><strong>Product Name:</strong> {{ $product->name }}</p>
        <p><strong>Product Price:</strong> {{ $price }}</p>
        <p><strong>Product Quantity:</strong> {{ $quantity }}</p>
        <p><strong>Total Bill:</strong> PKR:{{ $totalBill }}</p>
    </div>
</body>
</html>
