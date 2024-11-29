
<!-- Main content  -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DULCES</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">PRODUCTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}">CLIENTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sales.index')}}">VENTAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>