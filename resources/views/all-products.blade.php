@extends('layout')
@section('content')
<!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-breadcrumb">
                        <h2>Все товары<span>.</span></h2>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="page-breadcrumb">
                            {{$products->links()}}
                </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <!-- <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                             <div class="cf-left">
                             <span>Сортировать:</span>
                                 <form action="#">
                                    <select class="sort">
                                        <option value="{{route('shop.index', ['id'=>request()->id, 'sort'=>'new_first']) }}">По умолчанию</option>
                                        <option value="{{route('shop.index', ['price'=>request()->price, 'sort'=>'min_max']) }}">По цене от min</option>
                                        <option value="{{route('shop.index', ['price'=>request()->price, 'sort'=>'max_min']) }}">По цене от max</option>
                                        <a href="{{route('shop.index', ['id'=>request()->id, 'sort'=>'new_first']) }}">По умолчанию / </a>
                                        <a href="{{route('shop.index', ['price'=>request()->price, 'sort'=>'min_max']) }}">По цене от min / </a>
                                        <a href="{{route('shop.index', ['price'=>request()->price, 'sort'=>'max_min']) }}">По цене от max</a>
                                    </select>
                                </form>                                 
                            </div> 
                            <div class="cf-right">
                            {{$products->links()}}
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> -->
            <div class="row"> 
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-3">
                    <div class="single-product-item">
                    <a href="/all-products/{{$product->id}}">
                        <figure>
                            
                            <img src="img/products/{{$product->image_name}}" alt="" />
                            <div class="p-status sale">{{$product->label}}</div>
                        </figure></a>
                        <div class="product-text">
                            <a href="/all-products/{{$product->id}}">
                                <h6>{{$product->title}}</h6>
                            </a>
                            <p>{{$product->price}} руб.</p>
                        </div>
                        @if (Auth::check() && (Auth()->user()->role == 1))
                        <a href="{{route('product.delete',$product)}}"><button value="delete" type="submit">Удалить</button></a>
                        @endif
                    </div>
                </div>
                @endforeach
                
    
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->
    @endsection