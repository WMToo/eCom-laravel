@extends('master')
@section("content")
<div class="custom-product">

    <div class='col-sm-10'>
       <div class="trending-wrapper">
           <h4>Result for products</h4>
           <a class="btn btn-success" href="ordernow">Order Now</a>
           @foreach ($cart as $item)
           <div class="row searched-item cart-list-devider">
               <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                    <img class="detail-img" src="{{$item->gallery}}" alt=""">
                    </a>
               </div>
               
               <div class="col-sm-3">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h4>{{$item->description}}</h4>
                    </div> 
                </div>
                <div class="col-sm-3">
                   <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"> Remove</a>
                </div>
           </div>
           @endforeach
       </div>
    </div>

</div>
@endsection 


        