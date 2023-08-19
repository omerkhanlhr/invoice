@include('header')
<!DOCTYPE html>
<html lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
</head>
<h1>All Products</h1>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Edit</th>
            <th scope="col">Edit Product</th>
            <th scope="col">Delete Product</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
          <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>
                <a href="{{route('edit.quantity',$product->id)}}" class="btn btn-warning">Edit Quantity</a>
            </td>
            <td>
                <a href="{{route('edit.product',$product->id)}}" class="btn btn-secondary">Edit Product</a>
            </td>
            <td>
                <a href="{{route('delete.product',$product->id)}}" class="btn btn-danger">Delete Product</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

</body>
</html>
