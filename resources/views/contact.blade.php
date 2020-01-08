@extends('layout')
@section('content')
 <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Напишите нам<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form method="POST" action="{{route('contact.store')}}" class="contact-form">
                    @csrf    
                    <div class="row">
                            <div class="col-lg-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Имя">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="email" name="email"  id="email" placeholder="E-mail" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <input type="text" name="subject" id="subject" placeholder="Тема письма" value="{{old('subject')}}" class="form-control @error('subject') is-invalid @enderror">
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <textarea name="message" id="message" placeholder="Сообщение" value="{{old('message')}}" class="form-control @error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <div class="col-lg-12 text-right">
                                <button type="submit">Отправить</button>
                            </div>
                        </div>
                    </form> 

                   
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="contact-widget">
                        <div class="cw-item">
                            <h5>Адрес</h5>
                            <ul>
                                <li>ул.Козлова 33, </li>
                                <li>г.Солигорск, РБ</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>Телефоны</h5>
                            <ul>
                                <li>+375 29 1234567</li>
                                <li>+375 33 1234567</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>E-mail</h5>
                            <ul>
                                <li>example@example.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="map">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
                            height="560" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Contact Section End -->
    @endsection