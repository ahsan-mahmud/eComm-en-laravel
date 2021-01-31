@extends('master')
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}">
            </div>
            <div class="col-sm-6">
                <a href="/">Go back</a>
                <h2>{{$product['name']}}</h2>
                <h3>{{$product['category']}}</h3>
                <h3>{{$product['price']}}</h3>
                <h4>{{$product['description']}}</h4>
                <br><br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button class="btn btn-primary">Add to cart</button>
                </form>
                <br><br>0
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
