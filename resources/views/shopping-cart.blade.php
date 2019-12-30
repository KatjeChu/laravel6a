@extends('layout')
@section('content')
<!-- Page Add Section Begin -->
    <!-- <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Cart<span>.</span></h2>
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
    </section> -->
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    <div class="cart-page">
    <!-- Проверка, добавлен ли товар в корзину -->
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
    <!-- endof Проверка, добавлен ли товар в корзину -->
    

        <div class="container">
        
        @if (Cart::count() > 0)
        <h5><br/>В вашей корзине {{Cart::count()}} товар(ов):</h5>
        
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-h">Товар</th>
                            <th>Стоимость</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                        <tr>
                            <td class="product-col">
                                
                                <img src="img/products/{{$item->model->image_name}}" alt="">
                                <div class="p-title">
                                    <a href="{{route('shop.show', $item->model->id)}}">
                                    <h5>{{$item->model->title}}</h5>
                                    </a>
                                </div>
                                
                            </td>
                            <td class="price-col">{{$item->model->price}} руб.</td>
                            <td class="product-close">
                                <form method="POST" action="{{route('cart.destroy', $item->rowId )}}" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="primary-btn pc-btn">
                                Х
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        <!-- прод-е Проверка, есть ли товар в корзине -->
        @else
        <h5><br />Ваша корзина пуста</h5>
        @endif
        <!-- endof прод-е Проверка, есть ли товар в корзине - далее будет продолжение -->
        </div>
        <div class="shopping-method">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="total-info">
                            <div class="total-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="total-cart">Итого</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="total-cart-p">{{Cart::total()}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 text-right">
                                    <a href="{{route('shop.index')}}" class="primary-btn chechout-btn">Вернуться к покупкам</a>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <a href="{{route('checkout.index')}}" class="primary-btn chechout-btn">Оформить заказ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page Section End -->
    @endsection