<?php 

use App\HTTP\Controllers\ProductController;

$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}


?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product">Product</a>
        </li>
     
      @if(Session::has('user'))
      <li class="nav-item">
        <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
      </li>
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="nav-link" href="/logout">logout</a></li>
        </ul>
      </div>
      @else
      <li class="nav-item">
        <a class="nav-link" href="/login">login</a>
      </li>
      @endif
    </ul>
      <form class="form-inline my-2 my-lg-0 btn-group">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>