@extends('master')
@section("content")
<div class="container custom-product">

    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($product as $item)   
            <div class="carousel-item {{$item['id']==1?'active':''}} ">
                <img class="d-block w-100" src="{{ $item['gallery'] }}" alt="{{ $item['description'] }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $item['name'] }}</h5>
                    <p>{{ $item['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>     --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($product as $item)   
            <div class="carousel-item {{$item['id']==1?'active':''}} ">
                <a href="detail/{{$item['id']}}">
                    <img class="d-block w-100 slider-img " src="{{ $item['gallery'] }}" alt="{{ $item['description'] }}">
                    <div class="carousel-caption d-none d-md-block slider-text">
                        <h5>{{ $item['name'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </a>
            </div>
            @endforeach 
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <div class="trending-wrapper">
            <h3>trending </h3>
            @foreach ($product as $item)
            <div class="trending-item">
                <a href="detail/{{$item['id']}}">   
                    <img class="trending-img" src="{{ $item['gallery'] }}" alt="{{ $item['description'] }}">
                    <div class="">
                        <h5>{{ $item['name'] }}</h5>
                    </div>
                </a>   
            </div>
            @endforeach
        </div>    
    </div>
</div>
@endsection 


        