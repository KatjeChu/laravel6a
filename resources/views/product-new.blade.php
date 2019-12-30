@extends('layout')
@section('content')
<section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-breadcrumb">
                        <h2>Добавить новый товар<span>.</span></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form method="POST"  action="/all-products" class="contact-form" enctype="multipart/form-data">
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
                                

                                    
                                <input type="radio" name="label" id="label1" 
                                value="Распродажа" {{(old('label') == 'Распродажа') ? 'checked' : ''}}>
                                Распродажа<Br>
                                <input type="radio" name="label" id="label2" 
                                value="Новинка" {{(old('label') == 'Новинка') ? 'checked' : ''}}>
                                Новинка<Br>                                
                                <input type="radio" name="label" id="label3" 
                                value="Рекомендуем" {{(old('label') == 'Рекомендуем') ? 'checked' : ''}}>
                                Рекомендуем</p>
                                    @error('label')
                                    <p style="color: #F00;">{{$errors->first('label')}}</p>
                                    @enderror
                                 
                                Выберите изображение для загрузки:
                                <input type="file" name="image" id="image" placeholder="Выберите изображение">
                                @error('image')
                                    <p style="color: #F00;">{{$errors->first('image')}}</p>
                                    @enderror
                                
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