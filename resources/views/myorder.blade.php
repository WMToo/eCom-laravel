@extends('master')
@section("content")
<div class="custom-product">

    <div class='col-sm-10'>
       <div class="trending-wrapper">
           <h4>My orders</h4>
    
           @foreach ($order as $item)
           <div class="row searched-item cart-list-devider">
               <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                    <img class="detail-img" src="{{$item->gallery}}" alt=""">
                    </a>
               </div>
               
               <div class="col-sm-3">
                    <div class="">
                        <h2>Name : {{$item->name}}</h2>
                        <h4>Status : {{$item->status}}</h4>
                        <h4>Address :{{$item->address}}</h4>
                        <h4>Payment Status :{{$item->paymment_method}}</h4>
                        <h4>Payment methold :{{$item->paymment_status}}</h4>
                    </div> 
                </div>        
           </div>
           @endforeach
       </div>
    </div>

</div>
@endsection 


        