@extends('layout')
@section('content')
    <!-- Page Add Section Begin -->
    <!-- <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-breadcrumb">
                        <h2>Оформление заказа<span>.</span></h2>
                    </div>
                </div>
                 <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form method="POST" action=""{{route('checkout.store')}}"" class="checkout-form">
            @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h3><br />Оформить заказ</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Контактные данные*</p>
                            </div>
                            <div class="col-lg-4">
                            <input type="text" name="name" id="name" placeholder="Имя" value="{{old('name')}}">
                                    @error('name')
                                    <p style="color: #F00;">{{$errors->first('name')}}</p>
                                    @enderror
                            </div>
                            <div class="col-lg-5">
                            <input type="text" name="surname" id="surname" placeholder="Фамилия" value="{{old('surname')}}">
                                    @error('surname')
                                    <p style="color: #F00;">{{$errors->first('surname')}}</p>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Адрес доставки*</p>
                            </div>
                            <div class="col-lg-9">
                                <input name="address" id="address" placeholder="Населенный пункт, улица, номер дома, квартира" type="text" value="{{old('address')}}">
                                    @error('address')
                                    <p style="color: #F00;">{{$errors->first('address')}}</p>
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Номер телефона*</p>
                            </div>
                            <div class="col-lg-9">
                                <input name="phonenumber" id="phonenumber" placeholder="375 ХХ ХХХ-ХХ-ХХ" type="text" value="{{old('phonenumber')}}">
                                    @error('phonenumber')
                                    <p style="color: #F00;">{{$errors->first('phonenumber')}}</p>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="in-name">Комментарий к заказу</p>
                            </div>
                            <div class="col-lg-9">
                                <input name="comment" id="comment" type="text" value="{{old('comment')}}">
                                    @error('comment')
                                    <p style="color: #F00;">{{$errors->first('comment')}}</p>
                                    @enderror
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