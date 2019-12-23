@extends('layout')
@section('content')
 <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Товар успешно добавлен!<span>.</span></h2>
                        <h3><a href="/all-products/product-new">Создать новый</a></h3>
                        <h3><a href="/all-products">Вернуть на все товары</a></h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->
    @endsection