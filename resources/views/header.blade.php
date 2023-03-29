<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total=ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-Com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a> </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a> </li>
        </ul>
        <form action="/search"  class="d-flex" role="search">
          <div class="form-group">
          <input class="form-control search-box" name="query" type="search" placeholder="Search" aria-label="Search">
          </div>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" >Cart(0)</a></li>
            @if(Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" >
                {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
          
              </ul>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            @endif
        </ul>
      </div>
    </div>
  </nav>