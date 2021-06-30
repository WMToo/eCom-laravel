@extends('master')
@section("content")
<div class="custom-product">

    <div class='col-sm-10'>
        <table class="table table-striped">
        
            <tbody>
              <tr>
                <th scope="row">Amount</th>
                <td>{{$total}}</td>
              
              </tr>
              <tr>
                <th scope="row">Tax</th>
                <td>0</td>
                
              </tr>
              <tr>
                <th scope="row">Delivery</th>
                <td>10</td>
              
              </tr>
              <tr>
                <th scope="row">Total Amount</th>
                <td>{{$total+10}}</td>
            
              </tr>
            </tbody>
          </table>
    </div>
    <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">   
              <textarea name="address" class="form-control" placeholder="Enter address"></textarea>
            </div>
            <div class="form-group">
              <label for="Payment">Payment Method</label> <br><br>
              <input type="radio" name ="payment" value="online"><span>Online Payment</span> <br>
              <input type="radio" name ="payment" value="emi"><span>EMI Payment</span> <br>
              <input type="radio" name ="payment" value="cash"><span>COD</span> <br>
            </div> 
            <button type="submit" class="btn btn-primary mt-1">Submit</button>
        </form>
    </div>

</div>
@endsection 


        