@extends('layout')
@section('content')
<!-- Page Add Section Begin -->
    <!-- <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Shirts<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#">Night Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <!-- <div class="product-control">
                <a href="#">Previous</a>
                <a href="#">Next</a>
            </div> -->
            <div class="row">
                
                <div class="col-lg-4">
                    <!-- <div class="product-slider owl-carousel"> -->
                        <div class="product-img">
                            <figure>
                                <img src="/img/products/{{$product->image_name}}" alt="" />
                                <div class="p-status">{{$product->label}}</div>
                            </figure>
                        </div>
                    <!-- </div> -->
                    
                </div>
                <div class="col-lg-8">
                    <div class="product-content">
                        <h2>{{$product->title}}</h2>
                        <div class="pc-meta">
                            <h5>{{$product->price}} руб.</h5>
                            
                        </div>
                        <p>{{$product->description}}</p>
                        <!-- <ul class="tags">
                            <li><span>Category :</span> Men’s Wear</li>
                            <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
                        </ul> -->
                        <!-- <div class="product-quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div> -->
                        
                        <form action="{{route('cart.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id"  value="{{$product->id}}">
                        <input type="hidden" name="title"  value="{{$product->title}}">
                        <input type="hidden" name="price"  value="{{$product->price}}">
                        <button type="submit" class="primary-btn pc-btn">
                            Добавить в корзину
                        </button>
                        @if (Auth::check() && (Auth()->user()->role == 1))
                        <a class="primary-btn pc-btn" href="{{route('product.edit',$product)}}"> Редактировать </a>
                        <a class="primary-btn pc-btn" href="{{route('product.delete',$product)}}">Удалить</a>
                        @endif

                        </form>
                        
                        
                        <!-- <ul class="p-info">
                            <li>Product Information</li>
                            <li>Reviews</li>
                            <li>Product Care</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    @endsection