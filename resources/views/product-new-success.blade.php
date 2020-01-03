@extends('layout')
@section('content')
@if (Auth::check() && (Auth()->user()->role == 1))
<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <h2>Товар успешно добавлен, изменен или даже удалён!<span>.</span></h2>
                    <h3><a href="/all-products/product-new">Создать новый</a></h3>
                    <h3><a href="/all-products">Вернуться на все товары</a></h3>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
@else 
<p>У вас нет прав для просмотра этой страницы</p>
@endif
@endsection