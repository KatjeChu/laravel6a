@extends('layout')
@section('content')
<section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Редактировать товар<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form method="POST"  action="/all-products/{{$product->id}}" class="contact-form">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="text" name="title" id="title" placeholder="Название" value="{{$product->title}}">
                            <input type="textarea" rows="10" cols="30" name="description" id="description" placeholder="Описание" value="{{$product->description}}">
                            <input type="text" name="price" id="price" placeholder="Цена" value="{{$product->price}}">

                            
                            <input type="radio" name="label" id="label1" 
                            value="Распродажа" <?php if ($product->label=='Распродажа') { echo 'checked'; } ?>>
                                Распродажа<Br>
                            <input type="radio" name="label" id="label2" 
                            value="Новинка" <?php if ($product->label=='Новинка') { echo 'checked'; } ?>>
                                Новинка<Br>                                
                            <input type="radio" name="label" id="label3" 
                            value="Рекомендуем" <?php if ($product->label=='Рекомендуем') { echo 'checked'; } ?>>
                                Рекомендуем<Br>
                            <input type="radio" name="label" id="label" value="Распродажа" value="{{$product->label}}">Распродажа<Br>
                            <input type="radio" name="label" id="label1" value="Новинка"  value="{{$product->label}}">Новинка<Br>
                            <input type="radio" name="label" id="label2" value="Рекомендуем" value="{{$product->label}}">Рекомендуем</p>

                            <!-- <input type="image" name="image" placeholder="Изображение">  -->
                            
                            </div>
                            <div class="col-lg-12 text-right">
                                <button type="submit">Загрузить</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection