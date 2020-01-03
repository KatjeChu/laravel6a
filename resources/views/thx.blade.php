@extends('layout')
@section('content')
 <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-breadcrumb">
                        <h2>Ваш заказ или письмо отправлены<span>!</span></h2>
                        <br />
                        <h4>Наши менеджеры проверят ваш заказ и перезвонят вам</h4>
                        <br />
                        <a class="primary-btn chechout-btn" href="{{route('shop.index')}}" ><h3>Купить что-нибудь ещё</h3></a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    
    @endsection