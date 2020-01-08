@extends('layout')
@section('content')
    <!-- Page Add Section Begin -->
     <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-breadcrumb">
                        <h2>Оформление заказа<span>.</span></h2>
                    </div>
                </div>
                 <!-- <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div> -->
            </div>
        </div>
    </section> 
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form method="POST" action="{{route('checkout.store')}}" class="checkout-form">
            @csrf
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Контактные данные*</p>
                            </div>
                            <div class="col-lg-4">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Имя">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-5">
                            <input type="text" name="surname" id="surname" class="form-control @error('surname') is-invalid @enderror"  placeholder="Фамилия" value="{{old('surname')}}" >
                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Email*</p>
                            </div>
                            <div class="col-lg-9">
                                <input name="email" id="email" placeholder="На этот адрес будет отправлен счет" type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror"  >
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Адрес доставки*</p>
                            </div>
                            <div class="col-lg-9">
                                <input name="address" id="address" placeholder="Населенный пункт, улица, номер дома, квартира" type="text" value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror"  >
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Номер телефона*</p>
                            </div>
                            <div class="col-lg-9">
                                <input name="phonenumber" id="phonenumber" placeholder="В формате +375 ХХ ХХХ-ХХ-ХХ" type="tel" value="{{old('phonenumber')}}" class="form-control @error('phonenumber') is-invalid @enderror">
                                    @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Комментарий к заказу</p>
                            </div>
                            <div class="col-lg-9">
                                <input name="comment" id="comment" type="text" value="{{old('comment')}}" >
                                    
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="order-table">
                        <h5>Ваш заказ:<br /></h5>
                        @foreach (Cart::content() as $item)
                            <div class="cart-item">
                                <a href="{{route('shop.show', $item->model->id)}}">
                                <p class="product-name">{{$item->model->title}}</p>
                                </a>
                                <p>{{$item->model->price}} руб.</p>
                            </div>
                            @endforeach
                            <div class="cart-total">
                                <span>Итого</span>
                                <p>{{Cart::total()}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                    <div class="payment-method">
                    <button type="submit">Оформить заказ</button>
                    </div>
                    </div>

                </div>

            </form>
        </div>
    </section>
    <!-- Cart Total Page End -->
    @endsection