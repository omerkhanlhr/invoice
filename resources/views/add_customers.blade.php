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
<h1 class="text-center">Add Coustomers</h1>
<body>
<div class="container md-6">
    <div class="col-6">
        <div class="row">
            <form action="{{route('store.customer')}}" method="post">
                @csrf
                <div class="row mb-3 form-check">
                  <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="row mb-3 form-check">
                  <label for="exampleInputPassword1" class="form-label">Customer Email</label>
                  <input type="email" name="email" class="form-control">

                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Add Customer</button>
                </div>
              </form>

        </div>
    </div>
</div>
</body>
</html>

