@extends('layout')
@section('content')
<section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Добавить новый товар<span>.</span></h2>
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
                    <form method="POST"  action="/all-products" class="contact-form">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="title" id="title" placeholder="Название" value="{{old('title')}}">
                                    @error('title')
                                    <p style="color: #F00;">{{$errors->first('title')}}</p>
                                    @enderror
                                <input type="textarea" rows="10" cols="30" name="description" id="description" placeholder="Описание" value="{{old('description')}}">
                                    @error('description')
                                    <p style="color: #F00;">{{$errors->first('description')}}</p>
                                    @enderror
                                <input type="text" name="price" id="price" placeholder="Цена"  value="{{old('price')}}">
                                    @error('price')
                                    <p style="color: #F00;">{{$errors->first('price')}}</p>
                                    @enderror
                                <input type="radio" name="label" id="label" value="Распродажа">Распродажа<Br>
                                <input type="radio" name="label" id="label1" value="Новинка">Новинка<Br>                                
                                <input type="radio" name="label" id="label2" value="Рекомендуем">Рекомендуем</p>
                                    @error('label')
                                    <p style="color: #F00;">{{$errors->first('label')}}</p>
                                    @enderror
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