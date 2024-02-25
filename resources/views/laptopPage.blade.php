@extends('layouts.bars')
@section('bars')
<link rel="stylesheet" href="{{asset('css/laptopPage.css')}}">
<body>
    <h1 class="laptop-header">Lenovo Legion 5 15ACH6</h1>
    <div class="laptop-img-cont">
        <img class="laptop-img" src="{{asset('images/lenovolegion5_1.jpeg')}}" alt="Laptop image">
    </div>
    <div class="laptop-desc">
        <div>
            <h3 class="desc-header">Description</h3>
            <ul class="desc-ul">
                <li>15.6" 2560 x 1440, IPS, 165 Гц</li>
                <li>AMD Ryzen 5 5600H</li>
                <li>16 ГБ DDR4</li>
                <li>SSD 1024 ГБ</li>
                <li>видеокарта NVIDIA GeForce RTX 3050 Ti 4 ГБ (TGP 95 Вт)</li>
                <li>цвет крышки темно-синий</li>
                <li>аккумулятор 60 Вт·ч</li>
            </ul>
        </div>
    </div>
</body>
@endsection
