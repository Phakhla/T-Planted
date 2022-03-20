@extends('layouts.app')
@section('title')
    Cart
@endsection
@section('content')
    <cart />
<!--ส่วนของ Feature -->
<div class="container mt-5">
    
    <div class="row">
        <h1 class="text-center"> สินค้าในตะกร้า </h1>
        <div class="col-md-4 text-center">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{asset('assets/images/Bag1.jpg')}}" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">One</h4>
                    <p class="card-text">ราคา 100 บาท</p>   
                        <a href="#" class="btn btn-primary">รายละเอียดสินค้า</a>  
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{asset('assets/images/Bag2.jpg')}}" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Two piece</h4>
                    <p class="card-text">ราคา 190 บาท</p>
                    <a href="#" class="btn btn-primary">รายละเอียดสินค้า</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{asset('assets/images/Bag3.jpg')}}" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Three Piece</h4>
                    <p class="card-text">ราคา 280 บาท</p>
                    <a href="#" class="btn btn-primary">รายละเอียดสินค้า</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



