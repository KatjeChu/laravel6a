@extends('layout')
@section('content')
<!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Dresses<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#">Night Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <div class="cf-left">
                                <form action="#">
                                    <select class="sort">
                                        <option value="">Sort by</option>
                                        <option value="">Orders</option>
                                        <option value="">Newest</option>
                                        <option value="">Price</option>
                                    </select>
                                </form>
                            </div>
                            <div class="cf-right">
                                <span>20 Products</span>
                                <a href="#">2</a>
                                <a href="#" class="active">4</a>
                                <a href="#">6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"> 
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-3">
                    <div class="single-product-item">
                    <a href="/all-products/{{$product->id}}">
                        <figure>
                            <img src="/" alt="">
                            <div class="p-status sale">{{$product->label}}</div>
                        </figure></a>
                        <div class="product-text">
                            <a href="/all-products/{{$product->id}}">
                                <h6>{{$product->title}}</h6>
                            </a>
                            <p>{{$product->price}} руб.</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="more-product">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="#" class="primary-btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->
    @endsection