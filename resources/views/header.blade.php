<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('all.customer')}}">All Customers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('add.customer')}}">Add Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('all.product')}}">All Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('add.product')}}">Add Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('add.invoice')}}">Create Invoice</a>
        </li>

      </ul>
    </div>
  </nav>
