@extends('layouts.main_template')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/1.jpg')}}" class="d-block w-100" alt="Photo 1">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/2.jpg')}}" class="d-block w-100" alt="Photo 2">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/3.jpg')}}" class="d-block w-100" alt="Photo 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!--ส่วนของ Feature -->
<div class="container mt-5">
    <div class="row">
        <h1 class="text-center"> รายการสินค้า </h1>
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

{{-- ข่าว --}}

@endsection