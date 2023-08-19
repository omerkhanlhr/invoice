@include('header')
<!DOCTYPE html>
<html lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Products</title>
</head>
<h1 class="text-center">Add Products</h1>
<body>
<div class="container md-6">
    <div class="col-6">
        <div class="row">
            <form action="{{route('store.invoice')}}" method="post">
                @csrf
                <div class="row mb-3 form-check">
                    <label for="name" class="form-label">Products</label>

                    <select name="product" class="form-select" id="exampleFormControlSelect1">

                        <option selected="" disabled="">Select Products</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="row mb-3 form-check">
                    <label for="name" class="form-label">Customers</label>

                    <select name="customer" class="form-select" id="exampleFormControlSelect1">

                        <option selected="" disabled="">Select Customers</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mb-3 form-check">
                    <label for="qty">Enter Quantity</label>
                    <input type="number" name="qty" class="form-label">
                </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
              </form>

        </div>
    </div>
</div>
</body>
</html>

