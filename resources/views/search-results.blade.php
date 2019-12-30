@extends('layout')
@section('content')
<!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-breadcrumb">
                        <h2>Вы искали<span> :{{request()->input('query')}}</span></h2>
                        
                    </div>
                </div>
                 
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
    <div class="container">
        @if (session() -> has ('success_message'))
        <div class="alert alert-success">
        {{session()->get('success_message')}} 
        </div>
        @endif

        @if (count($errors)>0)
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        @endif
    </div>


        <div class="container">
        <div class="row"> 
           
            @foreach ($products as $product)
            <div class="col-lg-2 col-md-2">
                <div class="single-product-item">
                    <a href="/all-products/{{$product->id}}">
                    <figure>
                        
                        <img src="img/products/{{$product->image_name}}" alt="" />
                        <div class="p-status sale">{{$product->label}}</div>
                    </figure>
                    </a>
                    <div class="product-text">
                        <a href="/all-products/{{$product->id}}">
                            <h6>{{$product->title}}</h6>
                        </a>
                        <p>{{$product->price}} руб.</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        </div>
    </section>
    <!-- Categories Page Section End -->
    @endsection